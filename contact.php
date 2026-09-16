<?php
$page_title = "Contact Us | Kamrul Group";
include("header.php");
?>

<style>
    .contact-page-section {
        padding-top: 45px;
        padding-bottom: 70px;
        background-color: #ffffff;
    }
    .contact-title-main {
        color: #333333;
        font-weight: 700;
        font-size: 32px;
        margin-top: 0;
        margin-bottom: 12px;
    }
    .contact-subtitle {
        color: #64748b;
        font-size: 15.5px;
        max-width: 620px;
        margin: 0 auto;
        line-height: 1.6;
    }
    .contact-info-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 30px 20px 25px;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        height: 100%;
    }
    .contact-info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-color: #fec731;
    }
    .contact-card-icon {
        width: 65px;
        height: 65px;
        line-height: 65px;
        border-radius: 50%;
        background: #f8fafc;
        border: 2px solid #fec731;
        color: #fec731;
        font-size: 26px;
        margin: 0 auto 18px;
        transition: all 0.3s ease;
    }
    .contact-info-card:hover .contact-card-icon {
        background: #fec731;
        color: #072e59;
    }
    .contact-info-card h4 {
        color: #072e59;
        font-weight: 700;
        font-size: 18px;
        margin-bottom: 10px;
    }
    .contact-info-card p {
        color: #555555;
        font-size: 14px;
        line-height: 1.65;
        margin-bottom: 0;
    }
    .contact-info-card a {
        color: #2da1d7;
        text-decoration: none;
        font-weight: 500;
    }
    .contact-info-card a:hover {
        color: #0b4b8a;
    }
    .contact-form-box {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }
    .contact-map-box {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        height: 100%;
    }
    .form-control:focus {
        border-color: #2da1d7;
        box-shadow: 0 0 0 3px rgba(45, 161, 215, 0.15);
    }
</style>

<div class="section-area contact-page-section" style="background-image: none;">
    <div class="container">
        <!-- Header Info -->
        <div class="row text-center" style="margin-bottom: 40px;">
            <div class="col-md-12">
                <h1 class="contact-title-main">Contact Us</h1>
                <p class="contact-subtitle">
                    Have any questions or business inquiries? Connect with Kamrul Group headquarters or leave us a message below.
                </p>
            </div>
        </div>

        <!-- 3 Contact Cards -->
        <div class="row" style="margin-bottom: 45px;">
            <!-- Address -->
            <div class="col-md-4 col-sm-6" style="margin-bottom: 25px;">
                <div class="contact-info-card">
                    <div class="contact-card-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h4>Head Office</h4>
                    <p>House 19, Road 24, Block k,<br>Banani, Dhaka-1213, Bangladesh.</p>
                </div>
            </div>

            <!-- Phone -->
            <div class="col-md-4 col-sm-6" style="margin-bottom: 25px;">
                <div class="contact-info-card">
                    <div class="contact-card-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h4>Phone & Hotline</h4>
                    <p>Phone: +88 02 9897873<br>Sun - Thu: 9:00 AM - 6:00 PM</p>
                </div>
            </div>

            <!-- Email -->
            <div class="col-md-4 col-sm-12" style="margin-bottom: 25px;">
                <div class="contact-info-card">
                    <div class="contact-card-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <h4>Email Support</h4>
                    <p>
                        <a href="mailto:info@kamrulgroup.com">info@kamrulgroup.com</a><br>
                        <a href="mailto:query@kamrulgroup.com">query@kamrulgroup.com</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Form & Map Section -->
        <div class="row">
            <!-- Left: Message Form -->
            <div class="col-md-7 col-sm-12" style="margin-bottom: 30px;">
                <div class="contact-form-box">
                    <h3 style="color: #072e59; font-weight: 700; font-size: 22px; margin-top: 0; margin-bottom: 20px;">
                        <i class="fa fa-pencil" style="color: #fec731; margin-right: 8px;"></i>Send Us a Message
                    </h3>
                    <form action="#" method="POST" id="contact-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label style="font-weight: 600; color: #475569; font-size: 13px;">Full Name *</label>
                                <input type="text" class="form-control" name="name" placeholder="Your Full Name" required style="height: 44px; border-radius: 4px; border: 1px solid #cbd5e1;">
                            </div>
                            <div class="col-md-6 form-group">
                                <label style="font-weight: 600; color: #475569; font-size: 13px;">Email Address *</label>
                                <input type="email" class="form-control" name="email" placeholder="Your Email Address" required style="height: 44px; border-radius: 4px; border: 1px solid #cbd5e1;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label style="font-weight: 600; color: #475569; font-size: 13px;">Phone Number</label>
                                <input type="text" class="form-control" name="phone" placeholder="Your Contact Number" style="height: 44px; border-radius: 4px; border: 1px solid #cbd5e1;">
                            </div>
                            <div class="col-md-6 form-group">
                                <label style="font-weight: 600; color: #475569; font-size: 13px;">Subject *</label>
                                <input type="text" class="form-control" name="subject" placeholder="Inquiry Subject" required style="height: 44px; border-radius: 4px; border: 1px solid #cbd5e1;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600; color: #475569; font-size: 13px;">Your Message *</label>
                            <textarea class="form-control" name="message" rows="5" placeholder="Write your message or inquiry here..." required style="border-radius: 4px; border: 1px solid #cbd5e1;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="background: #0b4b8a; border-color: #0b4b8a; padding: 12px 32px; font-weight: 600; font-size: 15px; border-radius: 4px; transition: all 0.3s;">
                            <i class="fa fa-paper-plane" style="margin-right: 6px;"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Right: Map Embed -->
            <div class="col-md-5 col-sm-12" style="margin-bottom: 30px;">
                <div class="contact-map-box">
                    <h3 style="color: #072e59; font-weight: 700; font-size: 22px; margin-top: 0; margin-bottom: 20px;">
                        <i class="fa fa-map" style="color: #fec731; margin-right: 8px;"></i>Our Location
                    </h3>
                    <div style="border-radius: 6px; overflow: hidden; border: 1px solid #e2e8f0; height: 320px;">
                        <iframe 
                            src="https://maps.google.com/maps?q=House+19,+Road+24,+Block+K,+Banani,+Dhaka,+Bangladesh&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                            width="100%" 
                            height="100%" 
                            frameborder="0" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
