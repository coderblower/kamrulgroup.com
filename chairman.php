<?php
$page_title = "Message from the Chairman | Kamrul Group";
include("header.php");
?>

<style>
    .chairman-section {
        padding-top: 40px;
        padding-bottom: 60px;
        background-color: #ffffff;
    }
    .chairman-heading {
        color: #333333;
        font-family: "Roboto Slab", serif;
        font-weight: 700;
        font-size: 30px;
        margin-top: 0;
        margin-bottom: 30px;
    }
    /* 5:3 Ratio Layout */
    .chairman-layout-row {
        display: flex;
        flex-wrap: wrap;
        margin-left: -15px;
        margin-right: -15px;
        align-items: flex-start;
    }
    .chairman-text-col {
        flex: 0 0 62.5%;
        max-width: 62.5%;
        padding-left: 15px;
        padding-right: 30px;
    }
    .chairman-image-col {
        flex: 0 0 37.5%;
        max-width: 37.5%;
        padding-left: 15px;
        padding-right: 15px;
    }
    .chairman-photo-card {
        width: 100%;
        text-align: center;
    }
    .chairman-photo {
        width: 100%;
        height: auto;
        border-radius: 4px;
        box-shadow: 0 6px 22px rgba(0,0,0,0.14);
        display: block;
        transition: transform 0.3s ease;
    }
    .chairman-photo:hover {
        transform: scale(1.015);
    }
    .drop-cap-f {
        font-size: 78px;
        float: left;
        line-height: 58px;
        margin-top: 2px;
        margin-right: 12px;
        font-family: "Roboto Slab", serif;
        color: #333333;
        font-weight: 700;
    }
    .chairman-text {
        text-align: justify;
        font-size: 14.5px;
        line-height: 1.85;
        color: #444444;
        margin-bottom: 22px;
    }
    .chairman-signature-block {
        text-align: center;
        margin-top: 18px;
        margin-bottom: 10px;
    }
    .chairman-signature-link {
        color: #2da1d7;
        font-size: 15px;
        font-weight: 500;
        text-decoration: none !important;
        line-height: 1.6;
        display: inline-block;
        transition: color 0.2s ease;
    }
    .chairman-signature-link:hover {
        color: #072e59;
    }
    .chairman-profile-link {
        margin-top: 8px;
        font-size: 13.5px;
        color: #555555;
    }
    .chairman-profile-link a {
        color: #2da1d7;
        text-decoration: underline;
        transition: color 0.2s ease;
    }
    .chairman-profile-link a:hover {
        color: #072e59;
    }

    /* Responsive adjustments */
    @media (max-width: 991px) {
        .chairman-text-col {
            flex: 0 0 100%;
            max-width: 100%;
            padding-right: 15px;
            margin-bottom: 30px;
        }
        .chairman-image-col {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .chairman-photo-card {
            max-width: 360px;
            margin: 0 auto;
        }
    }
</style>

<div class="section-area chairman-section" style="background-image: none;">
    <div class="container">
        <!-- Title -->
        <h1 class="chairman-heading">Message from the Chairman</h1>

        <!-- 5:3 Ratio Container: 5 parts text (62.5%), 3 parts image (37.5%) -->
        <div class="chairman-layout-row">
            <!-- 5 Parts: Speech and Message Text -->
            <div class="chairman-text-col">
                <!-- Message Paragraph 1 with Drop Cap -->
                <p class="chairman-text">
                    <span class="drop-cap-f">F</span>irst of all, let me shed some light on the background of the birth of Kamrul Group. The Group’s flagship entity – Kamrul Agro Food Industries Ltd– had come into being in 2011. The beginning was very modest, but the aim was very large and the vision was very wide. Kamrul Group was born with the aim and objective of serving the People and the Country, and with a vision of building Bangladesh as an economically developed and self-reliant country. These objective and vision have made Kamrul Group keep widening its areas of business and thus turned it into one of the largest business and industrial conglomerates of the country by ensuring its strong presence in almost all major industrial and business sectors. Kamrul Group now boasts entities in sectors including Kamrul Agro Food Industries Ltd, Mecca Cola-Bangladesh, Malaysia University of Science and Technology- Bangladesh Campus, Swiftlink Payment Services L.L.C, Maestro Soft Ltd, TFP Solutions (Bangladesh)Ltd, Maestro Crown College, Khobor71, Wow Play, Mulamuli.com.bd, Maestro Pay SDN BHD, Worker Welfare Watch SDN BHD, GG Consortium(Bangladesh)Ltd, Tap and Pay WLL. Bahrain, Tap N Pay (UK) Ltd., Dignite international, Bangladesh Chapter. Kamrul Group has kept its march forward at a greater pace even in the present era of globalization and information technology, which have turned the entire world into a global village and invited cross-border competition. We believe globalization has not only invited challenges, it has simultaneously opened up immense opportunities for any business entity. It has created inter-state trade dependence, furthered investment potentials and created scope of free-flow of information and industrial raw materials. Ensuring quality of goods and services and their price competitiveness is not only helping them find good market locally, but also taking them beyond boundaries. I would like to take the opportunity to share with you the experience of Kamrul Group here. With meticulous planning, highest managerial efficiency and best use of its human resources, we have diversified our product range, ensured the best quality of our every product and service, and given the needs and requirements of the valued customers the topmost priority. All these have made every company of Kamrul Group a market leader in the respective sections of its operation. Keeping focus on business expansion and growth in the most prospective sectors, Kamrul Group is continuously taking up new projects to become the largest conglomerate distinctly.
                </p>

                <!-- Message Paragraph 2 -->
                <p class="chairman-text">
                    Kamrul Group always upholds its aim, objective and vision and keeps up its endeavor for social and economic development of the country through fair business and corporate activities. It has contributed a lot to the overall development of the country and its economy as well as to the development of the local corporate culture. As the custodian of Kamrul Group, I would like to reiterate our commitment to the development of the country. I hope that the Group’s cordial relations with all our valued customers and clients, as partners of prosperity, will be strengthened further in future. We also look forward to developing successful relations with our potential customers and clients. It will certainly help us grow and serve the stakeholders and the nation, even better in the days ahead.
                </p>
            </div>

            <!-- 3 Parts: Wider Image with Name & Profile Link directly underneath -->
            <div class="chairman-image-col">
                <div class="chairman-photo-card">
                    <!-- High-Resolution Chairman Photo -->
                    <img src="assets/images/ch_mess.jpeg" alt="Dr. Kamrul Ahsan - Chairman, Kamrul Group" class="chairman-photo">

                    <!-- Name & Profile Link directly underneath image -->
                    <div class="chairman-signature-block">
                        <a href="chairman.php" class="chairman-signature-link">
                            Dr. Kamrul Ahsan<br>
                            Chairman, kamrul Group.
                        </a>
                        <div class="chairman-profile-link">
                            Website : <a href="chairmanp.php">Visit Kamrul Ahsan Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
