<?php
$page_title = "Mecca Cola Bangladesh | Kamrul Group";
include("header.php");
?>

<style>
    .mecca-page-section {
        padding-top: 35px;
        padding-bottom: 50px;
        background-color: #ffffff;
    }
    .mecca-main-title {
        color: #333333;
        font-family: "Roboto Slab", serif;
        font-weight: 700;
        font-size: 32px;
        margin-top: 0;
        margin-bottom: 20px;
    }
    .mecca-sub-title {
        color: #333333;
        font-family: "Roboto Slab", serif;
        font-weight: 700;
        font-size: 26px;
        margin-top: 35px;
        margin-bottom: 20px;
    }
    .mecca-description-text {
        text-align: justify;
        font-size: 14.5px;
        line-height: 1.85;
        color: #444444;
        margin-bottom: 30px;
    }
    /* 3 Images Side by Side */
    .mecca-images-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-bottom: 35px;
        width: 100%;
    }
    .mecca-gallery-card {
        border-radius: 6px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        border: 1px solid #e2e8f0;
        background: #f8fafc;
        height: 280px;
        position: relative;
    }
    .mecca-gallery-card a {
        display: block;
        width: 100%;
        height: 100%;
    }
    .mecca-gallery-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.35s ease;
    }
    .mecca-gallery-card:hover img {
        transform: scale(1.03);
    }
    /* 2 Videos Side by Side */
    .mecca-videos-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
        margin-top: 10px;
        margin-bottom: 30px;
        width: 100%;
    }
    .mecca-video-card {
        display: flex;
        flex-direction: column;
    }
    .mecca-video-box {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 aspect ratio */
        height: 0;
        overflow: hidden;
        border-radius: 6px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
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
        font-size: 15px;
        color: #333333;
        font-weight: 600;
        line-height: 1.5;
    }
    .mecca-website-link {
        margin-top: 25px;
        margin-bottom: 20px;
        font-size: 15px;
        color: #444444;
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
        .mecca-images-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }
        .mecca-gallery-card {
            height: 240px;
        }
        .mecca-videos-grid {
            grid-template-columns: 1fr;
            gap: 20px;
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

        <!-- 3 Images Side by Side in 3 Parts -->
        <div class="mecca-images-grid">
            <div class="mecca-gallery-card">
                <a href="assets/images/mecca_2.jpg" class="fancybox" rel="mecca-gallery" title="Mecca Cola Beverage Product Line">
                    <img src="assets/images/mecca_2.jpg" alt="Mecca Cola Beverage Product Line">
                </a>
            </div>
            <div class="mecca-gallery-card">
                <a href="assets/images/mecca_main.jpg" class="fancybox" rel="mecca-gallery" title="Mecca Cola Automated Canning Line">
                    <img src="assets/images/mecca_main.jpg" alt="Mecca Cola Automated Canning Line">
                </a>
            </div>
            <div class="mecca-gallery-card">
                <a href="assets/images/mecca_1.jpg" class="fancybox" rel="mecca-gallery" title="Mecca Cola Cans Packaging & Stacking">
                    <img src="assets/images/mecca_1.jpg" alt="Mecca Cola Cans Packaging & Stacking">
                </a>
            </div>
        </div>

        <!-- Video Gallery Heading -->
        <h2 class="mecca-sub-title">Mecca cola Video Gallery</h2>

        <!-- 2 Videos Side by Side in 2 Columns -->
        <div class="mecca-videos-grid">
            <!-- Video 1: Signing Ceremony between mecca cola and Kamrul Group -->
            <div class="mecca-video-card">
                <div class="mecca-video-box">
                    <iframe src="https://www.youtube.com/embed/12GQU7fUtvI" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen title="Signing Ceremony between mecca cola and Kamrul Group"></iframe>
                </div>
                <div class="mecca-video-caption">Signing Ceremony between mecca cola and Kamrul Group</div>
            </div>

            <!-- Video 2: London Halal Food Festival -->
            <div class="mecca-video-card">
                <div class="mecca-video-box">
                    <iframe src="https://www.youtube.com/embed/gxqOkCrZOi8" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen title="Meccacola - London Halal Food Festival 2016"></iframe>
                </div>
                <div class="mecca-video-caption">Meccacola - London Halal Food Festival 2016</div>
            </div>
        </div>

        <!-- Website Link matching pages/mecca-cola.png -->
        <div class="mecca-website-link">
            Website : &nbsp; <a href="https://meccacolabd.com" target="_blank">Mecca Cola World</a>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
