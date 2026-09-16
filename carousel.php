<?php require_once __DIR__ . '/cloudinary.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <style>
    body {
      background: transparent;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }
    .carousel-border-box {
      border: 2px solid #000;
      background: #fff;
      padding: 12px 10px;
      margin: 5px 0;
    }
    .slick-slide {
      margin: 0 15px;
      text-align: center;
      display: flex !important;
      align-items: center;
      justify-content: center;
      height: 90px;
    }
    .slick-slide img {
      max-height: 80px;
      max-width: 100%;
      width: auto;
      object-fit: contain;
      margin: 0 auto;
    }
    .slick-slider {
      position: relative;
      display: block;
      box-sizing: border-box;
      user-select: none;
      touch-action: pan-y;
      -webkit-tap-highlight-color: transparent;
    }
    .slick-list {
      position: relative;
      display: block;
      overflow: hidden;
      margin: 0;
      padding: 0;
    }
    .slick-track {
      position: relative;
      top: 0;
      left: 0;
      display: block;
    }
    .slick-track:before,
    .slick-track:after {
      display: table;
      content: '';
    }
    .slick-track:after {
      clear: both;
    }
    .slick-slide {
      display: none;
      float: left;
      height: 100%;
      min-height: 1px;
    }
    .slick-initialized .slick-slide {
      display: block;
    }
  </style>
</head>
<body>
  <div class="carousel-border-box">
    <div class="customer-logos">
      <div class="slide"><a href="mecca-cola.php" target="_parent"><img src="<?php echo cld_url('assets/images/image1.png'); ?>" alt="Mecca Cola"></a></div>
      <div class="slide"><a href="must.php" target="_parent"><img src="<?php echo cld_url('assets/images/image2.png'); ?>" alt="MUST University"></a></div>
      <div class="slide"><a href="wowplay.php" target="_parent"><img src="<?php echo cld_url('assets/images/image3.png'); ?>" alt="Hello Future"></a></div>
      <div class="slide"><a href="maestrosoft.php" target="_parent"><img src="<?php echo cld_url('assets/images/image4.png'); ?>" alt="Maestro Soft"></a></div>
      <div class="slide"><a href="tfpbd.php" target="_parent"><img src="<?php echo cld_url('assets/images/image5.png'); ?>" alt="TFP Solutions"></a></div>
      <div class="slide"><a href="maestrocrown.php" target="_parent"><img src="<?php echo cld_url('assets/images/image6.png'); ?>" alt="Maestro Crown College"></a></div>
      <div class="slide"><a href="khobor71.php" target="_parent"><img src="<?php echo cld_url('assets/images/image7.png'); ?>" alt="Khobor71"></a></div>
      <div class="slide"><a href="mulamuli.php" target="_parent"><img src="<?php echo cld_url('assets/images/image9.png'); ?>" alt="Mulamuli"></a></div>
      <div class="slide"><a href="agro.php" target="_parent"><img src="<?php echo cld_url('assets/images/image10.png'); ?>" alt="Kamrul Agro"></a></div>
      <div class="slide"><a href="swiftlink.php" target="_parent"><img src="<?php echo cld_url('assets/images/image11.png'); ?>" alt="Swiftlink"></a></div>
      <div class="slide"><a href="maestropay.php" target="_parent"><img src="<?php echo cld_url('assets/images/image12.png'); ?>" alt="Maestro Pay"></a></div>
      <div class="slide"><a href="fwwmc.php" target="_parent"><img src="<?php echo cld_url('assets/images/image13.png'); ?>" alt="FWWMC"></a></div>
      <div class="slide"><a href="tapnpayb.php" target="_parent"><img src="<?php echo cld_url('assets/images/image14.png'); ?>" alt="Tap N Pay Bahrain"></a></div>
      <div class="slide"><a href="dignite.php" target="_parent"><img src="<?php echo cld_url('assets/images/image15.png'); ?>" alt="Dignite International"></a></div>
    </div>
  </div>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 3
          }
        }]
      });
    });
  </script>
</body>
</html>
