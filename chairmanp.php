<?php
$page_title = "Chairman Profile | Kamrul Group";
include("header.php");
?>

<style>
    .chairman-profile-section {
        padding-top: 35px;
        padding-bottom: 60px;
        background-color: #ffffff;
    }
    .profile-image-container {
        text-align: center;
        margin-bottom: 35px;
    }
    .profile-image-container img {
        max-width: 440px;
        width: 100%;
        height: auto;
        border-radius: 6px;
        box-shadow: 0 6px 24px rgba(0,0,0,0.12);
        transition: transform 0.3s ease;
        display: inline-block;
    }
    .profile-image-container img:hover {
        transform: scale(1.015);
    }
    .drop-cap-d {
        font-size: 78px;
        float: left;
        line-height: 58px;
        margin-top: 2px;
        margin-right: 12px;
        font-family: "Roboto Slab", serif;
        color: #333333;
        font-weight: 700;
    }
    .profile-bio-text {
        text-align: justify;
        font-size: 14.5px;
        line-height: 1.85;
        color: #444444;
        margin-bottom: 22px;
    }
    .profile-bottom-nav {
        text-align: center;
        margin-top: 40px;
        margin-bottom: 20px;
        padding-top: 20px;
        border-top: 1px solid #e2e8f0;
    }
    .profile-bottom-nav a {
        color: #2da1d7;
        font-size: 14.5px;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .profile-bottom-nav a:hover {
        color: #072e59;
        text-decoration: underline;
    }
    @media (max-width: 767px) {
        .profile-image-container img {
            max-width: 320px;
        }
    }
</style>

<div class="section-area chairman-profile-section" style="background-image: none;">
    <div class="container">
        <!-- Broken image replacement matching pages/chairmanp.png -->
        <div class="profile-image-container">
            <img src="assets/images/chman_sir12crop2.jpeg" alt="Dr. Kamrul Ahsan - Chairman, Kamrul Group">
        </div>

        <!-- Paragraph 1 with Drop Cap 'D' -->
        <p class="profile-bio-text">
            <span class="drop-cap-d">D</span>r. Kamrul Ahsan is blessed with the rare combination of his career portfolio as an academic, internationally recognized human rights activist, media personality and entrepreneurial leadership. Dr. Kamrul Ahsan did his MBA from University of the west of Scotland, UK. Studied law in University of London and did his Doctorate from Europe's one of the ancient universities namely Kharkiv National University in 2008. As part of his humanitarian activities he has further pursued his higher studies on climate changes with world's leading - University of Oxford. He has also done his Post Graduate Diploma (Level 7) in Strategic Management and Leadership from United Kingdom.
        </p>

        <!-- Paragraph 2 -->
        <p class="profile-bio-text">
            Dr. Ahsan is leading the young entrepreneurs segment and invested in the field of manufacturing industry, Banking and Financial Technology, software and service industry. He went to UK for higher studies on Scholarship.
        </p>

        <!-- Paragraph 3 -->
        <p class="profile-bio-text">
            After coming back from UK he has started meat processing business in Bangladesh. Prince of Bahrain His Highness General Sheikh Khalifa Bin Abdullah Bin Al Khalifa, a good friend of Dr. Kamrul, personally visited Bangladesh and inaugurated the meat processing site in 2008. Within couple of years this small meat process business became the market leader by supplying beef, mutton and chicken to the renowned super stores like Agora, Meena Bazar, Nandan, Shwapno, CSD and many others. In 2011 he has established export oriented state of Art food and beverages industry in Dhamrai, Dhaka, Bangladesh. In 2016 he signed the joint venture agreement with Mecca Cola World Group, France. Mecca Cola is the first halal cola in the world. Furthermore he is the Founder and CEO of Tap n Pay of Bangladesh and introduced with a great innovation, the fourth generation mobile financial services for the unbanked population of his motherland in partnership with Meghna Bank Ltd and Mobility One Malaysia - a leading fintech company of Malaysia; enlisted with London Stock Exchange. Dr. Kamrul Ahsan is the pioneer to introduce Near Field Communication (NFC) card based ewallet in Bangladesh in 2011.
        </p>

        <!-- Paragraph 4 -->
        <p class="profile-bio-text">
            He is the chairman of Maestro Group which is the partner of world's first intelligent vehicle manufacturing company of China named Apollo Group Energy and intelligence car Ltd. He is the founder and chairman of Meastro Crown College, a Government approved higher education institute and Malaysia University of science and Technology- Bangladesh Campus. He is the chairman of TFP solutions (Bangladesh)Ltd a joint venture company of Malaysian public listed company TFP solutions Berhad - later on kamrul group has taken over the shares from this Malaysian public listed company. He is the Chairman of Maestrosft Ltd, a tech company engage in developing Artificial intelligence (AI) and Internet of Things (IoT). Dr. Kamrul is the chairman of SwiftLink Payment services LLC, UAE, branded as "Pocket" and Dr. Kamrul is the first Bangladeshi who introduced ewallet to Ewallet remittance from Middle East to Bangladesh. He is also the founder of Tap n Pay WLL, Bahrain and Tap n Pay (UK) Ltd two renowned fintech companies in Bahrain and UK. He is the Founder chairman of Mobios Lanka Bangla Ltd, a technology joint venture company of Sri Lanka and Bangladesh. He is the Founder of GG Consortium Ltd, a India Bangladesh joint venture company engaged in Coffee manufacturing and distribution. He has also built up the E-Commerce and Ride sharing platform. Dr. Kamrul has introduced the first bidding e-commerce platform in Bangladesh named "mulamuli.com.bd".
        </p>

        <!-- Paragraph 5 -->
        <p class="profile-bio-text">
            Dr. Kamrul is the member of United Nations Association; Amnesty international; Human Rights watch. Dr. Kamrul Ahsan has been appointed as the country head of "DIGNITE International-France. An international NGO working for Africa and south Asia.
        </p>

        <!-- Paragraph 6 -->
        <p class="profile-bio-text">
            Dr. Kamrul Ahsan is a novelist- poet and columnist. As of 2019, four books have been published in Ekushey Book fair, Bangladesh. He is the pioneer to introduce human rights based investigative Television programme in Bangladesh namely "Bibeker Kache Prosno" televised in ATN Bangla and was rated as the best TV programme by the viewers. He is the chairman of the editorial committee of the leading news portal "Khobor71.com" and the founder of W0w play- IP Television, a UK-Bangladesh joint venture Television.
        </p>

        <!-- Navigation back to Message -->
        <div class="profile-bottom-nav">
            <a href="chairman.php"><i class="fa fa-arrow-left"></i> View Message from the Chairman</a>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
