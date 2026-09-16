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
        margin-bottom: 25px;
    }
    .chairman-photo {
        float: right;
        max-width: 290px;
        width: 100%;
        height: auto;
        margin-left: 30px;
        margin-bottom: 25px;
        border-radius: 4px;
        box-shadow: 0 4px 18px rgba(0,0,0,0.12);
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
        margin-bottom: 20px;
    }
    .chairman-signature-block {
        text-align: center;
        margin-top: 35px;
        margin-bottom: 25px;
        clear: both;
    }
    .chairman-signature-link {
        color: #2da1d7;
        font-size: 15px;
        font-weight: 500;
        text-decoration: none !important;
        line-height: 1.6;
        display: inline-block;
    }
    .chairman-signature-link:hover {
        color: #072e59;
    }
    .chairman-profile-link {
        margin-top: 10px;
        font-size: 14px;
        color: #555555;
    }
    .chairman-profile-link a {
        color: #2da1d7;
        text-decoration: underline;
    }
    .chairman-profile-link a:hover {
        color: #072e59;
    }
    @media (max-width: 767px) {
        .chairman-photo {
            float: none !important;
            margin-left: auto !important;
            margin-right: auto !important;
            margin-bottom: 25px !important;
            display: block !important;
            max-width: 260px !important;
        }
    }
</style>

<div class="section-area chairman-section" style="background-image: none;">
    <div class="container">
        <!-- Title -->
        <h1 class="chairman-heading">Message from the Chairman</h1>

        <!-- Content Area -->
        <div>
            <!-- Chairman Photo loaded from assets/images/ch_mess.jpeg -->
            <img src="assets/images/ch_mess.jpeg" alt="Dr. Kamrul Ahsan - Chairman, Kamrul Group" class="chairman-photo">

            <!-- Message Paragraph 1 with Drop Cap -->
            <p class="chairman-text">
                <span class="drop-cap-f">F</span>irst of all, let me shed some light on the background of the birth of Kamrul Group. The Group’s flagship entity – Kamrul Agro Food Industries Ltd– had come into being in 2011. The beginning was very modest, but the aim was very large and the vision was very wide. Kamrul Group was born with the aim and objective of serving the People and the Country, and with a vision of building Bangladesh as an economically developed and self-reliant country. These objective and vision have made Kamrul Group keep widening its areas of business and thus turned it into one of the largest business and industrial conglomerates of the country by ensuring its strong presence in almost all major industrial and business sectors. Kamrul Group now boasts entities in sectors including Kamrul Agro Food Industries Ltd, Mecca Cola-Bangladesh, Malaysia University of Science and Technology- Bangladesh Campus, Swiftlink Payment Services L.L.C, Maestro Soft Ltd, TFP Solutions (Bangladesh)Ltd, Maestro Crown College, Khobor71, Wow Play, Mulamuli.com.bd, Maestro Pay SDN BHD, Worker Welfare Watch SDN BHD, GG Consortium(Bangladesh)Ltd, Tap and Pay WLL. Bahrain, Tap N Pay (UK) Ltd., Dignite international, Bangladesh Chapter. Kamrul Group has kept its march forward at a greater pace even in the present era of globalization and information technology, which have turned the entire world into a global village and invited cross-border competition. We believe globalization has not only invited challenges, it has simultaneously opened up immense opportunities for any business entity. It has created inter-state trade dependence, furthered investment potentials and created scope of free-flow of information and industrial raw materials. Ensuring quality of goods and services and their price competitiveness is not only helping them find good market locally, but also taking them beyond boundaries. I would like to take the opportunity to share with you the experience of Kamrul Group here. With meticulous planning, highest managerial efficiency and best use of its human resources, we have diversified our product range, ensured the best quality of our every product and service, and given the needs and requirements of the valued customers the topmost priority. All these have made every company of Kamrul Group a market leader in the respective sections of its operation. Keeping focus on business expansion and growth in the most prospective sectors, Kamrul Group is continuously taking up new projects to become the largest conglomerate distinctly.
            </p>

            <!-- Message Paragraph 2 -->
            <p class="chairman-text">
                Kamrul Group always upholds its aim, objective and vision and keeps up its endeavor for social and economic development of the country through fair business and corporate activities. It has contributed a lot to the overall development of the country and its economy as well as to the development of the local corporate culture. As the custodian of Kamrul Group, I would like to reiterate our commitment to the development of the country. I hope that the Group’s cordial relations with all our valued customers and clients, as partners of prosperity, will be strengthened further in future. We also look forward to developing successful relations with our potential customers and clients. It will certainly help us grow and serve the stakeholders and the nation, even better in the days ahead.
            </p>

            <!-- Signature block -->
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

<?php include("footer.php"); ?>
