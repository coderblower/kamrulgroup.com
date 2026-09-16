<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/slick.min.css">
  <style>
    body {
      background: #fff;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }
    .carousel-border-box {
      border: 1px solid #444;
      background: #fff;
      padding: 15px 10px;
      margin: 2px 0;
    }
    .slick-slide {
      margin: 0 15px;
      text-align: center;
      display: flex !important;
      align-items: center;
      justify-content: center;
      height: 110px;
    }
    .slick-slide img {
      max-height: 100px;
      max-width: 100%;
      width: auto;
      object-fit: contain;
      margin: 0 auto;
      border-radius: 4px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.1);
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
    <div class="agro-products-slider">
      <div class="slide"><img src="assets/images/image10.png" alt="Kamrul Agro Food Industries"></div>
      <div class="slide"><img src="assets/images/companies/agro.png" alt="Kamrul Agro"></div>
      <div class="slide"><img src="assets/images/image1.png" alt="Mecca Cola"></div>
      <div class="slide"><img src="assets/images/KG/8.jpg" alt="Agro Bottled Beverage"></div>
      <div class="slide"><img src="assets/images/KG/9.jpg" alt="Spring Water"></div>
      <div class="slide"><img src="assets/images/KG/7.jpg" alt="Packaged Drinks"></div>
      <div class="slide"><img src="assets/images/KG/2.jpg" alt="Bottled Water Production"></div>
      <div class="slide"><img src="assets/images/KG/1.jpg" alt="Pure Mineral Water"></div>
      <div class="slide"><img src="assets/images/companies/mecca.png" alt="Mecca Cola Bangladesh"></div>
      <div class="slide"><img src="assets/images/KG/6.jpg" alt="Fresh Juice & Drinks"></div>
    </div>
  </div>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.agro-products-slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1600,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 992,
          settings: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 600,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 400,
          settings: {
            slidesToShow: 2
          }
        }]
      });
    });
  </script>
</body>
</html>
