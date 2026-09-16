<?php require_once __DIR__ . '/cloudinary.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo isset($page_title) ? $page_title : 'Kamrul Group | Name of Trust'; ?></title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/js/jquery.fancybox.css">

    <style>
        .btn:focus, .btn:active, button:focus, button:active {
            outline: none !important;
            box-shadow: none !important;
        }
        #myVideo {
            width: 100%;
            height: auto;
            display: block;
        }
        .navbar-logo img {
            transition: transform 0.2s;
        }
        .navbar-logo:hover img {
            transform: scale(1.02);
        }
        .post-thumbmail img {
            width: 100%;
            height: auto;
        }

        /* Navigation Dropdowns */
        .navbar-nav > li.dropdown {
            position: relative;
        }
        .navbar-nav .dropdown-menu {
            border-radius: 6px !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
            border: 1px solid #e2e8f0 !important;
            background-color: #ffffff !important;
            padding: 8px 0 !important;
            margin-top: 2px !important;
            left: 0 !important;
            right: auto !important;
        }
        .dropdown-menu-about {
            min-width: 230px !important;
            width: max-content !important;
        }
        .dropdown-menu-entities {
            min-width: 530px !important;
            max-width: 580px !important;
            width: max-content !important;
        }
        .navbar-nav .dropdown-menu > li {
            margin: 0 !important;
            padding: 0 !important;
            float: none !important;
            display: block !important;
            width: 100% !important;
        }
        .navbar-nav .dropdown-menu > li > a {
            display: block !important;
            padding: 7px 22px !important;
            font-size: 14.5px !important;
            line-height: 1.45 !important;
            color: #334155 !important;
            white-space: nowrap !important;
            background: transparent !important;
            border-radius: 0 !important;
            transition: all 0.18s ease-in-out !important;
        }
        .navbar-nav .dropdown-menu > li > a:hover,
        .navbar-nav .dropdown-menu > li > a:focus {
            color: #1ab5d3 !important;
            background-color: #f8fafc !important;
            padding-left: 26px !important;
            text-decoration: none !important;
        }
        @media (max-width: 767px) {
            .navbar-nav .dropdown-menu,
            .dropdown-menu-about,
            .dropdown-menu-entities {
                position: static !important;
                float: none !important;
                width: 100% !important;
                min-width: 100% !important;
                max-width: 100% !important;
                box-shadow: none !important;
                border: none !important;
                background-color: #f8fafc !important;
                padding: 4px 0 8px 15px !important;
            }
            .navbar-nav .dropdown-menu > li > a {
                white-space: normal !important;
                word-wrap: break-word !important;
                padding: 7px 15px !important;
                font-size: 14px !important;
            }
            .navbar-nav .dropdown-menu > li > a:hover {
                padding-left: 15px !important;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="preheader">
                <div class="row"> 
                    <div class="col-sm-8">
                        <div class="lang-section">
                            Address: House-19,Road-24,Block-k,Banani,Dhaka-1213
                        </div>
                        <div class="phone-section">
                            <a href="tel:+88029897873" title=""><span class="fa fa-phone"></span><em> +88 02 9897873</em></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="social-section">
                            <a href="https://www.facebook.com/Kamrul-Group-%E0%A6%95%E0%A6%BE%E0%A6%AE%E0%A6%B0%E0%A7%81%E0%A6%B2-%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A7%81%E0%A6%AA-220121791514205/" title="" target="_blank" class="fa fa-facebook"></a>
                            <a href="#" title="" class="fa fa-twitter"></a>
                            <a href="#" title="" class="fa fa-linkedin"></a>
                            <a href="#" title="" class="fa fa-google-plus"></a>
                            <a href="#" title="" class="fa fa-youtube"></a>
                            <a href="#" title="" class="fa fa-instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="main-header">
        <div class="container">
            <nav class="navbar">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span style="margin-top:-20px!important"><a class="navbar-logo" href="index.php" title="Kamrul Group">
                        <img src="<?php echo cld_url('assets/images/kamrulgroup.png'); ?>" alt="Kamrul Group Logo" width="100" height="84"></a></span>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php" title="">Home</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="">About us <b class="caret"></b></a>
                            <ul class="dropdown-menu dropdown-menu-about">
                                <li><a href="about.php">About Kamrul Group</a></li>
                                <li><a href="chairman.php">Chairman Message</a></li>
                                <li><a href="chairmanp.php">Chairman Profile</a></li>
                                <li><a href="managing.php">Managing Director</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="">Business Entities <b class="caret"></b></a>
                            <ul class="dropdown-menu dropdown-menu-entities">
                                <li><a href="agro.php">Kamrul Agro Food Industries Ltd.</a></li>
                                <li><a href="mecca-cola.php">Mecca Cola,Bangladesh</a></li>
                                <li><a href="must.php">Malaysia University of Science and Technology- Bangladesh Campus</a></li>
                                <li><a href="swiftlink.php">Swiftlink Payment Services L.L.C</a></li>
                                <li><a href="maestrosoft.php">Maestro Soft Ltd.</a></li>
                                <li><a href="tfpbd.php">TFP Solutions(Bangladesh)Ltd</a></li>
                                <li><a href="maestrocrown.php">Maestro Crown College</a></li>
                                <li><a href="khobor71.php">Khobor71</a></li>
                                <li><a href="wowplay.php">Wow Play</a></li>
                                <li><a href="mulamuli.php">Mulamuli.com.bd</a></li>
                                <li><a href="ggc.php">GG Consortium(Bangladesh)Ltd</a></li>
                                <li><a href="maestropay.php">Maestro Pay SDN BHD</a></li>
                                <li><a href="fwwmc.php">Worker Welfare Watch SDN BHD.</a></li>
                                <li><a href="tapnpayb.php">Tap and Pay WLL.Bahrain</a></li>
                                <li><a href="tapnpayuk.php">Tap N Pay (UK) Ltd.</a></li>
                                <li><a href="dignite.php">Dignite international, Bangladesh Chapter</a></li>
                            </ul>
                        </li>
                        <li><a href="gallery.php" title="">Gallery</a></li>
                        <li><a href="event.php" title="">News &amp; Events</a></li>
                        <li><a href="career.php" title="">Career</a></li>
                        <li><a href="contact.php" title="">Contact</a></li> 
                    </ul>
                </div>
            </nav>
        </div>
    </div>
