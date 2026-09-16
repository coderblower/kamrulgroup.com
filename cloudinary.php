<?php
/**
 * Cloudinary CDN Configuration and Helper for Kamrul Group
 */

if (!defined('CLOUDINARY_CLOUD_NAME')) {
    define('CLOUDINARY_CLOUD_NAME', 'saiful');
}

if (!defined('CLOUDINARY_BASE_URL')) {
    define('CLOUDINARY_BASE_URL', 'https://res.cloudinary.com/' . CLOUDINARY_CLOUD_NAME);
}

if (!defined('CLOUDINARY_IMG_CDN')) {
    define('CLOUDINARY_IMG_CDN', CLOUDINARY_BASE_URL . '/image/upload/f_auto,q_auto/kamrulgroup/');
}

if (!defined('CLOUDINARY_VIDEO_CDN')) {
    define('CLOUDINARY_VIDEO_CDN', CLOUDINARY_BASE_URL . '/video/upload/kamrulgroup/');
}

/**
 * Returns the Cloudinary CDN URL for a given relative asset path.
 *
 * @param string $path The relative asset path (e.g., 'assets/images/kamrulgroup.png' or 'cola.mp4')
 * @return string The full Cloudinary CDN delivery URL
 */
function cld_url($path) {
    if (empty($path)) {
        return '';
    }

    // Return as-is if already an absolute URL
    if (strpos($path, 'http://') === 0 || strpos($path, 'https://') === 0 || strpos($path, '//') === 0) {
        return $path;
    }

    $clean_path = ltrim($path, '/');
    $ext = strtolower(pathinfo($clean_path, PATHINFO_EXTENSION));

    if (in_array($ext, ['mp4', 'webm', 'ogv'])) {
        return CLOUDINARY_VIDEO_CDN . $clean_path;
    }

    // Cloudinary URL-encodes special characters in delivery URLs
    // We split path segments and URL-encode them appropriately if needed
    $parts = explode('/', $clean_path);
    $encoded_parts = array_map('rawurlencode', $parts);
    $encoded_path = implode('/', $encoded_parts);

    return CLOUDINARY_IMG_CDN . $encoded_path;
}
