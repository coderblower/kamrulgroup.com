<?php
$page_title = "News & Events | Kamrul Group";
include("header.php");
?>

<style>
    .event-page-section {
        padding-top: 35px;
        padding-bottom: 60px;
        background-color: #ffffff;
    }
    .event-main-title {
        color: #333333;
        font-family: "Roboto Slab", serif;
        font-weight: 700;
        font-size: 32px;
        margin-top: 0;
        margin-bottom: 30px;
    }
    .event-card-item {
        margin-bottom: 40px;
    }
    .event-post-box {
        position: relative;
        background: #ffffff;
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    .event-img-wrap {
        position: relative;
        overflow: hidden;
        border-radius: 2px;
    }
    .event-img-wrap img {
        width: 100%;
        height: 215px;
        object-fit: cover;
        display: block;
        transition: transform 0.4s ease;
    }
    .event-post-box:hover .event-img-wrap img {
        transform: scale(1.03);
    }
    .event-date-badge {
        position: absolute;
        top: 0;
        left: 0;
        background: #1ab5d3;
        color: #ffffff;
        font-size: 12px;
        font-weight: 600;
        padding: 4px 10px;
        z-index: 3;
        letter-spacing: 0.3px;
    }
    .event-content-body {
        padding-top: 16px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }
    .event-content-body h3 {
        margin: 0 0 10px;
        font-size: 18.5px;
        line-height: 1.35;
        font-weight: 700;
        font-family: "Roboto Slab", serif;
        min-height: 50px;
    }
    .event-content-body h3 a {
        color: #1ab5d3;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .event-content-body h3 a:hover {
        color: #072e59;
        text-decoration: none;
    }
    .event-source-tag {
        color: #777777;
        font-size: 13.5px;
        margin-bottom: 12px;
        font-style: normal;
    }
    .event-read-more-btn {
        color: #333333;
        font-weight: 700;
        font-size: 13.5px;
        text-decoration: none !important;
        display: inline-block;
        margin-bottom: 20px;
        transition: color 0.2s ease;
        cursor: pointer;
    }
    .event-read-more-btn:hover {
        color: #1ab5d3;
    }
    .event-video-wrapper {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 ratio */
        height: 0;
        overflow: hidden;
        background: #000000;
        border: 1px solid #e2e8f0;
        border-radius: 2px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.06);
    }
    .event-video-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
    /* Modal Styling */
    .modal-content {
        border-radius: 8px;
        overflow: hidden;
        border: none;
        box-shadow: 0 15px 35px rgba(0,0,0,0.25);
    }
    .modal-header {
        background: #072e59;
        color: #ffffff;
        padding: 16px 24px;
        border-bottom: none;
    }
    .modal-header .close {
        color: #ffffff;
        opacity: 0.8;
        font-size: 24px;
    }
    .modal-header .close:hover {
        opacity: 1;
    }
    .modal-title {
        color: #ffffff;
        font-family: "Roboto Slab", serif;
        font-weight: 700;
        font-size: 20px;
    }
    .modal-body {
        padding: 24px;
        font-size: 14.5px;
        line-height: 1.8;
        color: #475569;
    }
</style>

<section class="section-area event-page-section" style="background-image: none;">
    <div class="container">
        <!-- Title Section matching pages/event.png -->
        <div class="title-section" style="padding-bottom: 25px;">
            <h1 class="event-main-title">News &amp; Events.</h1>
        </div>

        <div class="row">
            <!-- News Item 1 -->
            <div class="col-xs-12 col-sm-4 col-md-4 event-card-item">
                <div class="event-post-box">
                    <div class="event-img-wrap">
                        <img src="<?php echo cld_url('assets/images/news/1.jpg'); ?>" alt="Signing Ceremony between mecca cola and Kamrul Group">
                        <div class="event-date-badge">October 18, 2017</div>
                    </div>
                    <div class="event-content-body">
                        <h3>
                            <a href="javascript:void(0);" onclick="openNewsModal(1)" title="Signing Ceremony between mecca cola and Kamrul Group">
                                Signing Ceremony between mecca cola and Kamrul Group
                            </a>
                        </h3>
                        <div class="event-source-tag">BD Financial News</div>
                        <div>
                            <a href="javascript:void(0);" onclick="openNewsModal(1)" class="event-read-more-btn">Read more</a>
                        </div>
                    </div>
                    <!-- Video matching pages/event.png -->
                    <div class="event-video-wrapper">
                        <iframe src="https://www.youtube.com/embed/SZbawv6aWMQ" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen title="Signing Ceremony Video"></iframe>
                    </div>
                </div>
            </div>

            <!-- News Item 2 -->
            <div class="col-xs-12 col-sm-4 col-md-4 event-card-item">
                <div class="event-post-box">
                    <div class="event-img-wrap">
                        <img src="<?php echo cld_url('assets/images/news/2.jpg'); ?>" alt="The CEO of Mecca Cola World Group visited the office of Kamrul Group">
                        <div class="event-date-badge">October 17, 2017</div>
                    </div>
                    <div class="event-content-body">
                        <h3>
                            <a href="javascript:void(0);" onclick="openNewsModal(2)" title="The CEO of Mecca Cola World Group visited the office of Kamrul Group">
                                The CEO of Mecca Cola World Group visited the office of Kamrul Group
                            </a>
                        </h3>
                        <div class="event-source-tag">Khobor71 News</div>
                        <div>
                            <a href="javascript:void(0);" onclick="openNewsModal(2)" class="event-read-more-btn">Read more</a>
                        </div>
                    </div>
                    <!-- Video matching pages/event.png -->
                    <div class="event-video-wrapper">
                        <iframe src="https://www.youtube.com/embed/EvEXpUlByvs" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen title="CEO Visit Video"></iframe>
                    </div>
                </div>
            </div>

            <!-- News Item 3 -->
            <div class="col-xs-12 col-sm-4 col-md-4 event-card-item">
                <div class="event-post-box">
                    <div class="event-img-wrap">
                        <img src="<?php echo cld_url('assets/images/news/3.jpg'); ?>" alt="Launching Ceremony of Kamrul Agro Food Industries Ltd">
                        <div class="event-date-badge">17 August 2017</div>
                    </div>
                    <div class="event-content-body">
                        <h3>
                            <a href="javascript:void(0);" onclick="openNewsModal(3)" title="Launching Ceremony of Kamrul Agro Food Industries Ltd">
                                Launching Ceremony of Kamrul Agro Food Industries Ltd
                            </a>
                        </h3>
                        <div class="event-source-tag">A joint venture of Mecca Cola...</div>
                        <div>
                            <a href="javascript:void(0);" onclick="openNewsModal(3)" class="event-read-more-btn">Read more</a>
                        </div>
                    </div>
                    <!-- Video matching pages/event.png -->
                    <div class="event-video-wrapper">
                        <iframe src="https://www.youtube.com/embed/12GQU7fUtvI" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen title="Launching Ceremony Video"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interactive News Detail Modal -->
<div class="modal fade" id="newsDetailModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalTitle">News Details</h4>
            </div>
            <div class="modal-body">
                <div style="margin-bottom: 15px;">
                    <span id="modalDate" style="display: inline-block; background: #1ab5d3; color: #ffffff; padding: 3px 10px; font-size: 12px; font-weight: 600; border-radius: 3px; margin-right: 10px;"></span>
                    <span id="modalSource" style="color: #64748b; font-size: 13px; font-weight: 500;"></span>
                </div>
                <div style="margin-bottom: 20px;">
                    <img id="modalImg" src="" alt="News Feature" style="width: 100%; max-height: 380px; object-fit: cover; border-radius: 4px; border: 1px solid #e2e8f0;">
                </div>
                <div id="modalDescription" style="font-size: 15px; line-height: 1.8; color: #334155; margin-bottom: 25px; text-align: justify;"></div>
                
                <h5 style="color: #072e59; font-weight: 700; margin-bottom: 12px; font-size: 16px;">
                    <i class="fa fa-play-circle" style="color: #1ab5d3; margin-right: 6px;"></i> Related Event Video
                </h5>
                <div class="event-video-wrapper" style="margin-bottom: 15px;">
                    <iframe id="modalVideoFrame" src="" allowfullscreen></iframe>
                </div>
            </div>
            <div class="modal-footer" style="border-top: 1px solid #e2e8f0; padding: 12px 24px;">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="font-weight: 600; padding: 6px 18px;">Close</button>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>

<script>
var newsData = {
    1: {
        title: "Signing Ceremony between Mecca Cola and Kamrul Group",
        date: "October 18, 2017",
        source: "Source: BD Financial News",
        img: "<?php echo cld_url('assets/images/news/1.jpg'); ?>",
        video: "https://www.youtube.com/embed/SZbawv6aWMQ",
        desc: "A historic signing ceremony was officially held between Mecca Cola World Group and Kamrul Group. Under this landmark bilateral agreement, Kamrul Group enters into a strategic partnership to manufacture, market, and distribute world-renowned Mecca Cola beverage products across Bangladesh and regional international markets.<br><br>The signing ceremony was graced by the top leadership of both organizations, notable business dignitaries, corporate stakeholders, and international delegates, symbolizing a significant expansion in the country's fast-moving consumer goods (FMCG) and beverage manufacturing industries."
    },
    2: {
        title: "The CEO of Mecca Cola World Group visited the office of Kamrul Group",
        date: "October 17, 2017",
        source: "Source: Khobor71 News",
        img: "<?php echo cld_url('assets/images/news/2.jpg'); ?>",
        video: "https://www.youtube.com/embed/EvEXpUlByvs",
        desc: "The Chief Executive Officer of Mecca Cola World Group paid a high-profile official visit to the corporate headquarters of Kamrul Group in Banani, Dhaka. During the extensive visit, bilateral strategic discussions were conducted with Chairman Dr. Kamrul Ahsan and senior directors.<br><br>The delegation reviewed manufacturing and quality assurance benchmarks, strategic distribution corridors across South Asia, and future technological modernizations for modern bottling and canning plants under the joint venture umbrella."
    },
    3: {
        title: "Launching Ceremony of Kamrul Agro Food Industries Ltd",
        date: "17 August 2017",
        source: "Source: A joint venture of Mecca Cola...",
        img: "<?php echo cld_url('assets/images/news/3.jpg'); ?>",
        video: "https://www.youtube.com/embed/12GQU7fUtvI",
        desc: "Kamrul Agro Food Industries Ltd officially celebrated its grand launching ceremony as a flagship agro-processing and beverage industrial facility. Built with state-of-the-art European and Asian automated technology, the plant produces natural fruit juices, purified drinking water, and carbonated beverages adhering to strict BSTI and international hygiene standards.<br><br>The venture represents a major commitment to empowering local farmers, generating skilled employment, and delivering world-class beverages to consumers nationwide."
    }
};

function openNewsModal(id) {
    var item = newsData[id];
    if (item) {
        $('#modalTitle').text(item.title);
        $('#modalDate').text(item.date);
        $('#modalSource').text(item.source);
        $('#modalImg').attr('src', item.img);
        $('#modalDescription').html(item.desc);
        $('#modalVideoFrame').attr('src', item.video);
        $('#newsDetailModal').modal('show');
    }
}

$('#newsDetailModal').on('hidden.bs.modal', function () {
    $('#modalVideoFrame').attr('src', '');
});
</script>
