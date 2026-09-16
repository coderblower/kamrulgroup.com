<?php
$page_title = "Wow Play IP Television | Kamrul Group";
include("header.php");
?>

<style>
    .wowplay-page-section {
        padding-top: 35px;
        padding-bottom: 50px;
        background-color: #ffffff;
    }
    .wowplay-main-title {
        color: #333333;
        font-family: "Roboto Slab", serif;
        font-weight: 700;
        font-size: 32px;
        margin-top: 0;
        margin-bottom: 20px;
    }
    .wowplay-description-text {
        text-align: justify;
        font-size: 14.5px;
        line-height: 1.85;
        color: #444444;
        margin-bottom: 18px;
    }
    .wowplay-banner-wrap {
        margin-top: 25px;
        margin-bottom: 30px;
    }
    .wowplay-banner-wrap img {
        width: 100%;
        height: auto;
        border-radius: 4px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        display: block;
    }
    .wowplay-website-link {
        margin-top: 25px;
        margin-bottom: 35px;
        font-size: 15px;
        color: #444444;
    }
    .wowplay-website-link a {
        color: #2da1d7;
        font-weight: 500;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .wowplay-website-link a:hover {
        color: #072e59;
        text-decoration: underline;
    }
</style>

<div class="section-area wowplay-page-section" style="background-image: none;">
    <div class="container">
        <!-- Main Title matching pages/wowplay.png -->
        <h1 class="wowplay-main-title">Wow Play IP Television</h1>

        <!-- Description Text matching pages/wowplay.png -->
        <p class="wowplay-description-text">
            Wow Play IP Television spnosored By Kamrul Group.
        </p>

        <!-- Banner Image (6.Wow Play TV.jpg) -->
        <div class="wowplay-banner-wrap">
            <img src="<?php echo cld_url('assets/images/banner/wowplay_banner.jpg'); ?>" alt="Wow Play IP Television">
        </div>

        <!-- Website Link matching pages/wowplay.png -->
        <div class="wowplay-website-link">
            Website : &nbsp; <a href="http://wowplaytv.com/" target="_blank">Wow Play IP Television</a>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
