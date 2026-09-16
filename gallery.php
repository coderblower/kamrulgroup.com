<?php
$page_title = "Photo Gallery | Kamrul Group";
include("header.php");

$gallery_items = [
    [
        'image' => 'assets/images/gallery/1.jpg',
        'title' => 'Agreement between Bangladeshi leading business Conglomerate ACI and Dr. Kamrul Ahsan',
        'caption' => 'Agreement between Bangladeshi leading business Conglomerate ACI and Dr. Kamrul Ahsan'
    ],
    [
        'image' => 'assets/images/gallery/2.png',
        'title' => 'Agreement between Malaysia University of Science and Technology and Dr. Kamrul to establish Bangladesh campus.',
        'caption' => 'Agreement between Malaysia University of Science and Technology and Dr. Kamrul to establish Bangladesh campus.'
    ],
    [
        'image' => 'assets/images/gallery/3.png',
        'title' => 'Agreement between UKs number one MVNO Vectone and Dr. Kamrul',
        'caption' => 'Agreement between UKs number one MVNO Vectone and Dr. Kamrul'
    ],
    [
        'image' => 'assets/images/gallery/4.png',
        'title' => 'Agreement signing between Tan Sri Effendi,  The former Agriculture minister of Malaysia and President of Malaysia University of Science and Technology.',
        'caption' => 'Agreement signing between Tan Sri Effendi,  The former Agriculture minister of Malaysia and President of Malaysia University of Science and Technology.'
    ],
    [
        'image' => 'assets/images/gallery/5.png',
        'title' => 'Agreement signing in contract manufacturing of ACI\'s beverages product by Kamrul Agro Food Industriea Ltd',
        'caption' => 'Agreement signing in contract manufacturing of ACI\'s beverages product by Kamrul Agro Food Industriea Ltd'
    ],
    [
        'image' => 'assets/images/gallery/6.png',
        'title' => 'Business Talk with the ICT Adviser of Bangladesh and the Son of the Prime Minister alongwith the Hon\'ble state minister of ICT, Bangladesh Government',
        'caption' => 'Business Talk with the ICT Adviser of Bangladesh and the Son of the Prime Minister alongwith the Hon\'ble state minister of ICT, Bangladesh Government'
    ],
    [
        'image' => 'assets/images/gallery/7.png',
        'title' => 'Collaboration with YPC College, Malaysia',
        'caption' => 'Collaboration with YPC College, Malaysia'
    ],
    [
        'image' => 'assets/images/gallery/8.png',
        'title' => 'Dr. Kamrul in signing agreement ceremony  with Begum Rokeya University, Rangpur',
        'caption' => 'Dr. Kamrul in signing agreement ceremony  with Begum Rokeya University, Rangpur'
    ],
    [
        'image' => 'assets/images/gallery/9.png',
        'title' => 'Dr. Kamrul Signing with Triple UAE',
        'caption' => 'Dr. Kamrul Signing with Triple UAE'
    ],
    [
        'image' => 'assets/images/gallery/10.png',
        'title' => 'Mou signing between Prof Prem kumar and Dr. Kamrul on Malaysia University of science and Technology',
        'caption' => 'Mou signing between Prof Prem kumar and Dr. Kamrul on Malaysia University of science and Technology'
    ],
    [
        'image' => 'assets/images/gallery/11.png',
        'title' => 'Signing between  president, Mecca Cola, France and Dr. Kamrul Ahsan witnessed by H N Ashequr Rahman, MP, Chairman-Meghna Bank Ltd and Mr. Benzir Ahmed, MP, President- BAIRA',
        'caption' => 'Signing between  president, Mecca Cola, France and Dr. Kamrul Ahsan witnessed by H N Ashequr Rahman, MP, Chairman-Meghna Bank Ltd and Mr. Benzir Ahmed, MP, President- BAIRA'
    ],
    [
        'image' => 'assets/images/gallery/12.png',
        'title' => 'With the Founder of Mecca Cola, France infront of the Beverage industry Kamrul Agro Food at Dhamrai, Dhaka',
        'caption' => 'With the Founder of Mecca Cola, France infront of the Beverage industry Kamrul Agro Food at Dhamrai, Dhaka'
    ],
    [
        'image' => 'assets/images/gallery/13.png',
        'title' => 'With the Managing Director of Huawei',
        'caption' => 'With the Managing Director of Huawei'
    ],
    [
        'image' => 'assets/images/gallery/14.png',
        'title' => 'Brothers together  Shakib Al Hasan and Dr. Kamrul',
        'caption' => 'Brothers together  Shakib Al Hasan and Dr. Kamrul'
    ],
    [
        'image' => 'assets/images/gallery/15.png',
        'title' => 'Chief of General Staff General Sabbir',
        'caption' => 'Chief of General Staff General Sabbir'
    ],
    [
        'image' => 'assets/images/gallery/16.png',
        'title' => 'Dhaka Bank Managing Director and Dr. Kamrul as the guest in Seminar',
        'caption' => 'Dhaka Bank Managing Director and Dr. Kamrul as the guest in Seminar'
    ],
    [
        'image' => 'assets/images/gallery/17.png',
        'title' => 'Dr. Kamrul Ahsan alongwith Director General Border Guards Bangladesh(BGB) and HN Ashequr Rahman, MP. The hon\'ble Tresurer of the Ruling party.',
        'caption' => 'Dr. Kamrul Ahsan alongwith Director General Border Guards Bangladesh(BGB) and HN Ashequr Rahman, MP. The hon\'ble Tresurer of the Ruling party.'
    ],
    [
        'image' => 'assets/images/gallery/18.png',
        'title' => 'Dr. Kamrul alongwith the good friend ambassador of Kuwait in Bangladesh',
        'caption' => 'Dr. Kamrul alongwith the good friend ambassador of Kuwait in Bangladesh'
    ],
    [
        'image' => 'assets/images/gallery/19.png',
        'title' => 'Dr. Kamrul and Chairman ATN Bangla',
        'caption' => 'Dr. Kamrul and Chairman ATN Bangla'
    ],
    [
        'image' => 'assets/images/gallery/20.png',
        'title' => 'Dr. Kamrul is presiding over the launching ceremony with Information Minister of Bangladesh',
        'caption' => 'Dr. Kamrul is presiding over the launching ceremony with Information Minister of Bangladesh'
    ],
    [
        'image' => 'assets/images/gallery/21.png',
        'title' => 'Dr. Kamrul visiting Nepal\'s leading bank',
        'caption' => 'Dr. Kamrul visiting Nepal\'s leading bank'
    ],
    [
        'image' => 'assets/images/gallery/22.png',
        'title' => 'Mecca Cola President Towfik Mathlouthi  visiting Dr. Kamrul Ahsan\'s beverage industry in  Dhamrai',
        'caption' => 'Mecca Cola President Towfik Mathlouthi  visiting Dr. Kamrul Ahsan\'s beverage industry in  Dhamrai'
    ],
    [
        'image' => 'assets/images/gallery/23.png',
        'title' => 'The world\'s number one cricketer Shakib Al Hasan and Dr.Kamrul Ahsan,  brother in shoulders',
        'caption' => 'The world\'s number one cricketer Shakib Al Hasan and Dr.Kamrul Ahsan,  brother in shoulders'
    ],
    [
        'image' => 'assets/images/gallery/24.png',
        'title' => 'With  the Defense Adviser of China Embassy',
        'caption' => 'With  the Defense Adviser of China Embassy'
    ],
    [
        'image' => 'assets/images/gallery/25.png',
        'title' => 'With Dr. Mahfuzur Rahman. Relarionship matter',
        'caption' => 'With Dr. Mahfuzur Rahman. Relarionship matter'
    ],
    [
        'image' => 'assets/images/gallery/26.png',
        'title' => 'With Managing Director, Zen Exchange Bahrain',
        'caption' => 'With Managing Director, Zen Exchange Bahrain'
    ],
    [
        'image' => 'assets/images/gallery/27.png',
        'title' => 'With the Ambassador of Zambia',
        'caption' => 'With the Ambassador of Zambia'
    ],
    [
        'image' => 'assets/images/gallery/28.png',
        'title' => 'With the former chief of Army staff of Bangladesh Army',
        'caption' => 'With the former chief of Army staff of Bangladesh Army'
    ],
    [
        'image' => 'assets/images/gallery/29.png',
        'title' => 'With the good friend the member of parliament of Switzerland',
        'caption' => 'With the good friend the member of parliament of Switzerland'
    ],
    [
        'image' => 'assets/images/gallery/30.png',
        'title' => 'With the Vice president of Madagascar',
        'caption' => 'With the Vice president of Madagascar'
    ],
    [
        'image' => 'assets/images/gallery/39.png',
        'title' => 'Moment of Fun- Dr. Kamrul, Shakib Al Hasan, Dr. Enamur Rahman, MP; State Minister-Ministry of Relief and Disaster,  Benzir Ahmed, MP, President BAIRA.',
        'caption' => 'Moment of Fun- Dr. Kamrul, Shakib Al Hasan, Dr. Enamur Rahman, MP; State Minister-Ministry of Relief and Disaster,  Benzir Ahmed, MP, President BAIRA.'
    ],
    [
        'image' => 'assets/images/gallery/31.png',
        'title' => 'Dr. Kamrul and ICT Minister of Bangladesh',
        'caption' => 'Dr. Kamrul and ICT Minister of Bangladesh'
    ],
    [
        'image' => 'assets/images/gallery/32.png',
        'title' => 'Dr. Kamrul and UK Partner Mr. Paul Flood',
        'caption' => 'Dr. Kamrul and UK Partner Mr. Paul Flood'
    ],
    [
        'image' => 'assets/images/gallery/33.png',
        'title' => 'Dr. Kamrul with the MPs of Malaysia',
        'caption' => 'Dr. Kamrul with the MPs of Malaysia'
    ],
    [
        'image' => 'assets/images/gallery/34.png',
        'title' => 'With Ex colleague and Managing Director of Biman Bangladesh AirLines',
        'caption' => 'With Ex colleague and Managing Director of Biman Bangladesh AirLines'
    ],
    [
        'image' => 'assets/images/gallery/35.png',
        'title' => 'with Prince of UAE His Highness Abdullah Al Maktoum',
        'caption' => 'with Prince of UAE His Highness Abdullah Al Maktoum'
    ],
    [
        'image' => 'assets/images/gallery/36.png',
        'title' => 'With TanSri Dr. Zaharddin Idrus,  the Science Adviser to The Prime Minister of Malaysia.',
        'caption' => 'With TanSri Dr. Zaharddin Idrus,  the Science Adviser to The Prime Minister of Malaysia'
    ],
    [
        'image' => 'assets/images/gallery/37.png',
        'title' => 'With the business partner His Highness prince Shaikh Ali Al Khalifa',
        'caption' => 'With the business partner His Highness prince Shaikh Ali Al Khalifa'
    ],
    [
        'image' => 'assets/images/gallery/38.png',
        'title' => 'With the Finance Secretary, Bangladesh Government',
        'caption' => 'With the Finance Secretary, Bangladesh Government'
    ],
    [
        'image' => 'assets/images/gallery/40.png',
        'title' => 'With the French presidential candidate and Minister',
        'caption' => 'With the French presidential candidate and Minister'
    ],
    [
        'image' => 'assets/images/gallery/41.png',
        'title' => 'With the minister of Thailand',
        'caption' => 'With the minister of Thailand'
    ],
    [
        'image' => 'assets/images/gallery/42.png',
        'title' => 'With the Governor of Paris',
        'caption' => 'With the Governor of Paris'
    ],
];
?>

<style>
    .gallery-section {
        padding-top: 35px;
        padding-bottom: 60px;
        background-color: #fff;
    }
    .gallery-header-title {
        color: #333333;
        font-weight: 700;
        font-size: 32px;
        margin-top: 10px;
        margin-bottom: 25px;
    }
    .gallery-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        padding: 8px;
        margin-bottom: 24px;
        transition: all 0.25s ease-in-out;
        box-shadow: 0 2px 5px rgba(0,0,0,0.04);
        display: block;
        text-decoration: none !important;
        height: 100%;
    }
    .gallery-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 18px rgba(0,0,0,0.12);
        border-color: #2da1d7;
    }
    .gallery-img-wrap {
        width: 100%;
        height: 175px;
        overflow: hidden;
        border-radius: 4px;
        background-color: #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .gallery-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.35s ease;
    }
    .gallery-card:hover .gallery-img {
        transform: scale(1.04);
    }
    .gallery-caption {
        margin-top: 10px;
        padding: 2px 4px;
        font-size: 12px;
        line-height: 1.45;
        color: #2da1d7;
        font-weight: 500;
        min-height: 52px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .gallery-card:hover .gallery-caption {
        color: #0b4b8a;
    }
    /* Modal Custom Styling */
    #image-gallery .modal-content {
        border-radius: 8px;
        overflow: hidden;
        border: none;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }
    #image-gallery .modal-header {
        background: #f8fafc;
        border-bottom: 1px solid #e2e8f0;
        padding: 14px 20px;
    }
    #image-gallery .modal-title {
        color: #072e59;
        font-weight: 700;
        font-size: 16px;
        margin: 0;
        padding-right: 25px;
    }
    #image-gallery .modal-body {
        padding: 15px;
        background: #0f172a;
        min-height: 350px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #image-gallery .modal-footer {
        background: #f8fafc;
        border-top: 1px solid #e2e8f0;
        padding: 12px 20px;
    }
    .modal-btn-nav {
        background: #0b4b8a !important;
        color: #fff !important;
        border: none !important;
        padding: 8px 18px !important;
        font-weight: 600 !important;
        border-radius: 4px !important;
        transition: background 0.2s !important;
    }
    .modal-btn-nav:hover {
        background: #072e59 !important;
    }
</style>

<div class="section-area gallery-section" style="background-image: none;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="gallery-header-title">Gallery</h1>
            </div>
        </div>

        <div class="row">
            <?php foreach ($gallery_items as $index => $item): ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 thumb-item">
                    <a class="gallery-card thumbnail-link" href="#" 
                       data-toggle="modal" 
                       data-title="<?= htmlspecialchars($item['title']) ?>" 
                       data-image="<?= htmlspecialchars(cld_url($item['image'])) ?>" 
                       data-target="#image-gallery">
                        <div class="gallery-img-wrap">
                            <img class="img-responsive gallery-img" 
                                 src="<?= htmlspecialchars(cld_url($item['image'])) ?>" 
                                 alt="<?= htmlspecialchars($item['title']) ?>" 
                                 loading="lazy">
                        </div>
                        <div class="gallery-caption">
                            <?= htmlspecialchars($item['caption']) ?>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Modal Viewer -->
<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="image-gallery-title" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive center-block" src="" alt="Preview" style="max-height: 75vh; border-radius: 4px;">
            </div>
            <div class="modal-footer" style="display: flex; justify-content: space-between; align-items: center;">
                <button type="button" class="btn btn-primary modal-btn-nav" id="show-previous-image">
                    <i class="fa fa-arrow-left"></i> Previous
                </button>
                <button type="button" class="btn btn-primary modal-btn-nav" id="show-next-image">
                    Next <i class="fa fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>

<script>
$(document).ready(function () {
    let current_image = 0;
    let total_images = 0;

    // Assign IDs to all gallery links
    $('.thumbnail-link').each(function (index) {
        $(this).attr('data-image-id', index + 1);
        total_images++;
    });

    function updateGallery(selector) {
        current_image = parseInt(selector.attr('data-image-id'));
        $('#image-gallery-title').text(selector.attr('data-title'));
        $('#image-gallery-image').attr('src', selector.attr('data-image'));

        // Toggle prev/next buttons
        if (current_image <= 1) {
            $('#show-previous-image').hide();
        } else {
            $('#show-previous-image').show();
        }

        if (current_image >= total_images) {
            $('#show-next-image').hide();
        } else {
            $('#show-next-image').show();
        }
    }

    $('.thumbnail-link').on('click', function (e) {
        e.preventDefault();
        updateGallery($(this));
    });

    $('#show-previous-image').on('click', function () {
        if (current_image > 1) {
            current_image--;
            let prev_el = $('[data-image-id="' + current_image + '"]');
            updateGallery(prev_el);
        }
    });

    $('#show-next-image').on('click', function () {
        if (current_image < total_images) {
            current_image++;
            let next_el = $('[data-image-id="' + current_image + '"]');
            updateGallery(next_el);
        }
    });

    // Keyboard navigation
    $(document).keydown(function (e) {
        if ($('#image-gallery').hasClass('in')) {
            if (e.which === 37 && current_image > 1) { // Left arrow
                $('#show-previous-image').click();
            } else if (e.which === 39 && current_image < total_images) { // Right arrow
                $('#show-next-image').click();
            }
        }
    });
});
</script>
