<?php
$page_title = "Mecca Cola Bangladesh | Kamrul Group";
include("header.php");
?>

<style>
    .mecca-page-section {
        padding-top: 40px;
        padding-bottom: 60px;
        background-color: #ffffff;
    }
    .mecca-main-title {
        color: #333333;
        font-family: "Roboto Slab", serif;
        font-weight: 700;
        font-size: 30px;
        margin-top: 0;
        margin-bottom: 25px;
    }
    .mecca-sub-title {
        color: #333333;
        font-family: "Roboto Slab", serif;
        font-weight: 700;
        font-size: 26px;
        margin-top: 45px;
        margin-bottom: 25px;
    }
    .mecca-description-text {
        text-align: justify;
        font-size: 14.5px;
        line-height: 1.85;
        color: #444444;
        margin-bottom: 30px;
    }
    .mecca-banner-wrap {
        margin-bottom: 25px;
    }
    .mecca-banner-wrap img {
        width: 100%;
        height: auto;
        border-radius: 4px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        display: block;
    }
    .mecca-gallery-card {
        margin-bottom: 25px;
        overflow: hidden;
        border-radius: 4px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        background: #f8fafc;
        border: 1px solid #e2e8f0;
    }
    .mecca-gallery-card img {
        width: 100%;
        height: 480px;
        object-fit: cover;
        display: block;
        transition: transform 0.4s ease;
    }
    .mecca-gallery-card:hover img {
        transform: scale(1.02);
    }
    .mecca-video-box {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 aspect ratio */
        height: 0;
        overflow: hidden;
        border-radius: 4px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        background: #000000;
        border: 1px solid #e2e8f0;
    }
    .mecca-video-box iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
    .mecca-video-caption {
        margin-top: 12px;
        font-size: 14.5px;
        color: #333333;
        font-weight: 600;
        line-height: 1.5;
    }
    .mecca-website-link {
        margin-top: 30px;
        margin-bottom: 25px;
        font-size: 14px;
        color: #555555;
    }
    .mecca-website-link a {
        color: #2da1d7;
        font-weight: 500;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .mecca-website-link a:hover {
        color: #072e59;
        text-decoration: underline;
    }
    @media (max-width: 767px) {
        .mecca-gallery-card img {
            height: 320px;
        }
    }
</style>

<div class="section-area mecca-page-section" style="background-image: none;">
    <div class="container">
        <!-- Main Title matching pages/mecca-cola.png -->
        <h1 class="mecca-main-title">Mecca Cola Bangladesh</h1>

        <!-- Description Paragraph -->
        <p class="mecca-description-text">
            Founder and President of Mecca Cola World Group Limited Tawfik Mathlouthi and Chairman of Kamrul Group Dr Kamrul Ahsan exchanging documents after signing a joint venture agreement between them at a ceremony in the capital on Monday. Meghna Bank Chairman HN Ashequr Rahman, BAIRA President Benjir Ahmed, Kamrul Group Adviser Lt Col (Retd) MA Latif Khan and Managing Director of Kamrul Group Dil Afroze also attended, among others, in the signing ceremony. The first halal cola was established in 2002 in France; at present distributing in 64 countries; one of the leading global soft drinks brand 'Mecca Cola' is going to be launched to manufacture in Bangladesh in a very recent time in joint venture partnership with Kamrul Group.
        </p>

        <!-- Images section replacing broken image icon: mecca.jpg 2.jpg, mecca.jpg, mecca.jpg 1.jpg -->
        <div class="mecca-images-section">
            <!-- 1. Wide Panoramic Product Banner (mecca.jpg 2.jpg) -->
            <div class="mecca-banner-wrap">
                <img src="assets/images/mecca_2.jpg" alt="Mecca Cola Beverage Product Line - Best Wishes">
            </div>

            <!-- 2. Two Factory & Production Images (mecca.jpg & mecca.jpg 1.jpg) -->
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="mecca-gallery-card">
                        <img src="assets/images/mecca_main.jpg" alt="Mecca Cola Automated Canning Line">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="mecca-gallery-card">
                        <img src="assets/images/mecca_1.jpg" alt="Mecca Cola Cans Packaging & Stacking">
                    </div>
                </div>
            </div>
        </div>

        <!-- Video Gallery Heading -->
        <h2 class="mecca-sub-title">Mecca cola Video Gallery</h2>

        <!-- Two Videos in a Row -->
        <div class="row">
            <!-- Video 1: London Halal Food Festival -->
            <div class="col-sm-6 col-xs-12" style="margin-bottom: 25px;">
                <div class="mecca-video-box">
                    <iframe src="https://www.youtube.com/embed/zQsQt2_bMjA" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen title="Meccacola - London Halal Food Festival 2016"></iframe>
                </div>
                <div class="mecca-video-caption">Meccacola - London Halal Food Festival 2016</div>
            </div>

            <!-- Video 2: Islamic soft drink to benefit Palestinian cause -->
            <div class="col-sm-6 col-xs-12" style="margin-bottom: 25px;">
                <div class="mecca-video-box">
                    <iframe src="https://www.youtube.com/embed/gxqOkCrZOi8" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen title="Islamic soft drink to benefit Palestinian cause"></iframe>
                </div>
                <div class="mecca-video-caption">Islamic soft drink to benefit Palestinian cause</div>
            </div>
        </div>

        <!-- Website Link matching pages/mecca-cola.png -->
        <div class="mecca-website-link">
            Website : <a href="https://meccacolabd.com" target="_blank">Mecca Cola World</a>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
