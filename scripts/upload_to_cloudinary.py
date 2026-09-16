import os
import sys
import json
import time
from concurrent.futures import ThreadPoolExecutor, as_completed
import cloudinary
import cloudinary.uploader

# Configure Cloudinary
cloudinary.config(
    cloud_name="saiful",
    api_key="264356237539194",
    api_secret="-ZIEGdVT_UQF7Q2NxS8R1OjSjJ0",
    secure=True
)

MEDIA_EXTENSIONS = {".png", ".jpg", ".jpeg", ".gif", ".svg", ".webp", ".ico"}
PROJECT_ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))

def gather_files():
    files_to_upload = []
    
    # 1. assets/images
    assets_img_dir = os.path.join(PROJECT_ROOT, "assets", "images")
    if os.path.exists(assets_img_dir):
        for root, dirs, files in os.walk(assets_img_dir):
            for f in files:
                ext = os.path.splitext(f)[1].lower()
                if ext in MEDIA_EXTENSIONS:
                    full_path = os.path.join(root, f)
                    rel_path = os.path.relpath(full_path, PROJECT_ROOT)
                    files_to_upload.append(rel_path)

    # 2. images
    img_dir = os.path.join(PROJECT_ROOT, "images")
    if os.path.exists(img_dir):
        for root, dirs, files in os.walk(img_dir):
            for f in files:
                ext = os.path.splitext(f)[1].lower()
                if ext in MEDIA_EXTENSIONS:
                    full_path = os.path.join(root, f)
                    rel_path = os.path.relpath(full_path, PROJECT_ROOT)
                    files_to_upload.append(rel_path)

    # 3. Root media files (like agro.png)
    for f in os.listdir(PROJECT_ROOT):
        full_path = os.path.join(PROJECT_ROOT, f)
        if os.path.isfile(full_path):
            ext = os.path.splitext(f)[1].lower()
            if ext in MEDIA_EXTENSIONS and not f.startswith("Screenshot"):
                rel_path = os.path.relpath(full_path, PROJECT_ROOT)
                if rel_path not in files_to_upload:
                    files_to_upload.append(rel_path)

    return sorted(set(files_to_upload))

def upload_single_file(rel_path):
    full_path = os.path.join(PROJECT_ROOT, rel_path)
    rel_without_ext, ext = os.path.splitext(rel_path)
    # Strip any trailing whitespace from the filename/path
    cleaned_rel = rel_without_ext.strip()
    public_id = f"kamrulgroup/{cleaned_rel}"

    try:
        res = cloudinary.uploader.upload(
            full_path,
            public_id=public_id,
            overwrite=True,
            resource_type="image"
        )
        return {
            "rel_path": rel_path,
            "public_id": res.get("public_id"),
            "url": res.get("secure_url"),
            "format": res.get("format"),
            "bytes": res.get("bytes"),
            "status": "success"
        }
    except Exception as e:
        return {
            "rel_path": rel_path,
            "status": "error",
            "error": str(e)
        }

def main():
    files = gather_files()
    print(f"Found {len(files)} media files to upload.")

    manifest_path = os.path.join(PROJECT_ROOT, "cloudinary_manifest.json")
    existing_manifest = {}
    if os.path.exists(manifest_path):
        try:
            with open(manifest_path, "r", encoding="utf-8") as mf:
                existing_manifest = json.load(mf)
        except Exception:
            existing_manifest = {}

    results = dict(existing_manifest)
    
    # Check if cola.mp4 is in manifest
    results["cola.mp4"] = {
        "rel_path": "cola.mp4",
        "public_id": "kamrulgroup/cola",
        "url": "https://res.cloudinary.com/saiful/video/upload/kamrulgroup/cola.mp4",
        "resource_type": "video",
        "status": "success"
    }

    start_time = time.time()
    success_count = 0
    error_count = 0

    # Concurrency with 8 workers
    print("Uploading files to Cloudinary in parallel (8 workers)...")
    with ThreadPoolExecutor(max_workers=8) as executor:
        future_to_file = {executor.submit(upload_single_file, rel_p): rel_p for rel_p in files}
        for idx, future in enumerate(as_completed(future_to_file), 1):
            rel_p = future_to_file[future]
            try:
                res = future.result()
                if res["status"] == "success":
                    results[rel_p] = res
                    success_count += 1
                    print(f"[{idx}/{len(files)}] [OK] {rel_p}")
                else:
                    print(f"[{idx}/{len(files)}] [ERROR] {rel_p}: {res.get('error')}")
                    error_count += 1
            except Exception as exc:
                print(f"[{idx}/{len(files)}] [EXCEPTION] {rel_p}: {exc}")
                error_count += 1

    elapsed = time.time() - start_time
    print(f"\nUpload completed in {elapsed:.2f} seconds.")
    print(f"Success: {success_count}, Errors: {error_count}")

    # Write manifest
    with open(manifest_path, "w", encoding="utf-8") as mf:
        json.dump(results, mf, indent=2)
    print(f"Manifest written to: {manifest_path}")

    if error_count > 0:
        sys.exit(1)

if __name__ == "__main__":
    main()
