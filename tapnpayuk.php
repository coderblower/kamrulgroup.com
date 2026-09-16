<?php
$page_title = "Tap N Pay (UK) Ltd. | Kamrul Group";
include("header.php");
?>

<style>
    .tapnpayuk-page-section {
        padding-top: 35px;
        padding-bottom: 50px;
        background-color: #ffffff;
    }
    .tapnpayuk-main-title {
        color: #333333;
        font-family: "Roboto Slab", serif;
        font-weight: 700;
        font-size: 32px;
        margin-top: 0;
        margin-bottom: 20px;
    }
    .tapnpayuk-description-text {
        text-align: justify;
        font-size: 14.5px;
        line-height: 1.85;
        color: #444444;
        margin-bottom: 30px;
    }
    .tapnpayuk-banner-wrap {
        margin-bottom: 30px;
    }
    .tapnpayuk-banner-wrap img {
        width: 100%;
        height: auto;
        border-radius: 4px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        display: block;
    }
    .tapnpayuk-website-link {
        margin-top: 25px;
        margin-bottom: 35px;
        font-size: 15px;
        color: #444444;
    }
    .tapnpayuk-website-link a {
        color: #2da1d7;
        font-weight: 500;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .tapnpayuk-website-link a:hover {
        color: #072e59;
        text-decoration: underline;
    }
</style>

<div class="section-area tapnpayuk-page-section" style="background-image: none;">
    <div class="container">
        <!-- Main Title matching pages/tapnpayuk.png -->
        <h1 class="tapnpayuk-main-title">Tap N Pay (UK) Ltd.</h1>

        <!-- Description Text matching pages/tapnpayuk.png -->
        <p class="tapnpayuk-description-text">
            Tap n Pay (UK) Ltd. is a company registered and Licensed in UK, United Kindom. The company operates as the payment solution through its own transaction engine and software as e-wallet and Mobile banking transactions for the parties through maintaining an escrow account with a bank.
        </p>

        <!-- Banner Image -->
        <div class="tapnpayuk-banner-wrap">
            <img src="<?php echo cld_url('assets/images/banner/tapnpayuk.png'); ?>" alt="Tap N Pay (UK) Ltd.">
        </div>

        <!-- Website Link matching pages/tapnpayuk.png -->
        <div class="tapnpayuk-website-link">
            Website : &nbsp; <a href="http://tapnpay.co.uk/" target="_blank">Tap N Pay (UK) Ltd.</a>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
