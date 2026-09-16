<?php
$page_title = "Contact Us | Kamrul Group";
include("header.php");
?>
<div class="page-header-banner">
    <div class="container">
        <h1>Contact Us</h1>
    </div>
</div>
<div class="container" style="padding-bottom: 60px;">
    <div class="row">
        <div class="col-md-6">
            <h2 style="color:#072e59; font-weight:700; margin-top:0;">Get in Touch</h2>
            <p style="color:#64748b; font-size:15px;">Feel free to drop us a message or inquiry anytime.</p>
            <form action="#" method="POST" style="margin-top:25px;">
                <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" class="form-control" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" rows="5" placeholder="Write your message here..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="background:#0b4b8a; border-color:#0b4b8a; padding:10px 30px; font-weight:600;">Send Message</button>
            </form>
        </div>
        <div class="col-md-6">
            <h2 style="color:#072e59; font-weight:700; margin-top:0;">Headquarters</h2>
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:25px; margin-top:25px;">
                <h4 style="color:#072e59; font-weight:700;"><i class="fa fa-map-marker text-warning"></i> Head Office</h4>
                <p style="color:#475569; font-size:15px; line-height:1.7;">
                    House 19 (2nd Floor), Road 24, Block k,<br>
                    Banani, Dhaka-1213, Bangladesh.
                </p>
                <hr>
                <h4 style="color:#072e59; font-weight:700;"><i class="fa fa-phone text-warning"></i> Phone & Email</h4>
                <p style="color:#475569; font-size:15px; line-height:1.7;">
                    Phone: +88 02 9897873<br>
                    Email: info@kamrulgroup.com
                </p>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
