<?php
$page_title = "MaestroSoft Limited | Kamrul Group";
include("header.php");
?>

<style>
    .maestrosoft-page-section {
        padding-top: 35px;
        padding-bottom: 50px;
        background-color: #ffffff;
    }
    .maestrosoft-main-title {
        color: #333333;
        font-family: "Roboto Slab", serif;
        font-weight: 700;
        font-size: 32px;
        margin-top: 0;
        margin-bottom: 20px;
    }
    .maestrosoft-description-text {
        text-align: justify;
        font-size: 14.5px;
        line-height: 1.85;
        color: #444444;
        margin-bottom: 18px;
    }
    .maestrosoft-banner-wrap {
        margin-top: 25px;
        margin-bottom: 30px;
    }
    .maestrosoft-banner-wrap img {
        width: 100%;
        height: auto;
        border-radius: 4px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        display: block;
    }
    .maestrosoft-website-link {
        margin-top: 25px;
        margin-bottom: 35px;
        font-size: 15px;
        color: #444444;
    }
    .maestrosoft-website-link a {
        color: #2da1d7;
        font-weight: 500;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .maestrosoft-website-link a:hover {
        color: #072e59;
        text-decoration: underline;
    }
</style>

<div class="section-area maestrosoft-page-section" style="background-image: none;">
    <div class="container">
        <!-- Main Title matching pages/maestrosoft.png -->
        <h1 class="maestrosoft-main-title">MAESTROSOFT LIMITED</h1>

        <!-- Description Text matching pages/maestrosoft.png -->
        <p class="maestrosoft-description-text">
            MaestroSoft Limited, Headquartered at Banani, Dhaka Bangladesh, started it's journey to be one of the pioneer destination for future Tech world. From it's inception it is aimed to provide the best State of The Art solution for 21st century. Having a vision to set up the first ever Artificial Intelligence(AI) lab in Bangladesh and being focused on the Artificial Intelligence, MaestroSoft Limited offers wide range of technical solutions in the field of IoT, Block Chain technologies, IUMS, web and progressive app development.
        </p>

        <p class="maestrosoft-description-text">
            MaestroSoft Limited is one of the emerging Tech startup working with next generation crypto currency ( Blockchain ) technologies. With the motto of "Shifting the Paradigm" MaestroSoft Limited assure the best ROT ( Return of Technology ) investments and delivers innovative and cost effective Technical solutions.
        </p>

        <!-- Banner Image (8.MaestroSoft Ltd.jpg) -->
        <div class="maestrosoft-banner-wrap">
            <img src="<?php echo cld_url('assets/images/banner/maestrosoft_banner.jpg'); ?>" alt="MaestroSoft Limited">
        </div>

        <!-- Website Link matching pages/maestrosoft.png -->
        <div class="maestrosoft-website-link">
            Website : &nbsp; <a href="http://www.maestrosoftltd.com/" target="_blank">MAESTROSOFT LIMITED</a>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
