<?php
$page_title = "Dignite international, Bangladesh Chapter | Kamrul Group";
include("header.php");
?>

<style>
    .dignite-page-section {
        padding-top: 35px;
        padding-bottom: 50px;
        background-color: #ffffff;
    }
    .dignite-main-title {
        color: #333333;
        font-family: "Roboto Slab", serif;
        font-weight: 700;
        font-size: 32px;
        margin-top: 0;
        margin-bottom: 20px;
    }
    .dignite-description-text {
        text-align: justify;
        font-size: 14.5px;
        line-height: 1.85;
        color: #444444;
        margin-bottom: 30px;
    }
    .dignite-banner-wrap {
        margin-bottom: 30px;
    }
    .dignite-banner-wrap img {
        width: 100%;
        height: auto;
        border-radius: 4px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        display: block;
    }
    .dignite-website-link {
        margin-top: 25px;
        margin-bottom: 35px;
        font-size: 15px;
        color: #444444;
    }
    .dignite-website-link a {
        color: #2da1d7;
        font-weight: 500;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .dignite-website-link a:hover {
        color: #072e59;
        text-decoration: underline;
    }
</style>

<div class="section-area dignite-page-section" style="background-image: none;">
    <div class="container">
        <!-- Main Title matching pages/dignite.png -->
        <h1 class="dignite-main-title">Dignite international, Bangladesh Chapter</h1>

        <!-- Description Text -->
        <p class="dignite-description-text">
            DIGNITE International-France is An international NGO working for Africa and South Asia. Kamrul Group Chairman Dr. Kamrul Ahsan has been appointed as the country head of Dignite international, Bangladesh Chapter
        </p>

        <!-- Banner Image -->
        <div class="dignite-banner-wrap">
            <img src="<?php echo cld_url('assets/images/banner/dignite.png'); ?>" alt="Dignite international, Bangladesh Chapter">
        </div>

        <!-- Website Link matching pages/dignite.png -->
        <div class="dignite-website-link">
            Website : &nbsp; <a href="https://www.dignite-international.org/" target="_blank">Dignite international, Bangladesh Chapter</a>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
