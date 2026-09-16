<?php
$page_title = "Career Opportunities | Kamrul Group";
include("header.php");
?>

<style>
    .career-page-section {
        padding-top: 45px;
        padding-bottom: 70px;
        background-color: #ffffff;
    }
    .career-title-main {
        color: #333333;
        font-weight: 700;
        font-size: 32px;
        margin-top: 0;
        margin-bottom: 12px;
    }
    .career-subtitle {
        color: #64748b;
        font-size: 15.5px;
        max-width: 650px;
        margin: 0 auto;
        line-height: 1.6;
    }
    .career-feature-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 30px 20px 25px;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        height: 100%;
    }
    .career-feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-color: #fec731;
    }
    .career-card-icon {
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
    .career-feature-card:hover .career-card-icon {
        background: #fec731;
        color: #072e59;
    }
    .career-feature-card h4 {
        color: #072e59;
        font-weight: 700;
        font-size: 17px;
        margin-bottom: 12px;
    }
    .career-feature-card p {
        color: #555555;
        font-size: 13.5px;
        line-height: 1.65;
        margin-bottom: 0;
    }
    .job-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 24px;
        margin-bottom: 22px;
        transition: all 0.3s ease;
        box-shadow: 0 2px 6px rgba(0,0,0,0.03);
    }
    .job-card:hover {
        border-color: #2da1d7;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        transform: translateY(-3px);
    }
    .job-badge {
        display: inline-block;
        font-size: 12px;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 4px;
        margin-right: 6px;
        margin-bottom: 8px;
    }
    .badge-dept {
        background: #e0f2fe;
        color: #0369a1;
    }
    .badge-loc {
        background: #fef3c7;
        color: #b45309;
    }
    .badge-type {
        background: #f1f5f9;
        color: #475569;
    }
    .btn-apply-role {
        background: #0b4b8a;
        color: #ffffff !important;
        border: none;
        padding: 8px 20px;
        font-weight: 600;
        font-size: 13.5px;
        border-radius: 4px;
        transition: all 0.25s ease;
        text-decoration: none !important;
        display: inline-block;
    }
    .btn-apply-role:hover {
        background: #072e59;
    }
    .career-form-box {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 35px;
        box-shadow: 0 4px 18px rgba(0,0,0,0.06);
    }
    .hr-info-box {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 30px 25px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        height: 100%;
    }
    .form-control:focus {
        border-color: #2da1d7;
        box-shadow: 0 0 0 3px rgba(45, 161, 215, 0.15);
    }
</style>

<div class="section-area career-page-section" style="background-image: none;">
    <div class="container">
        <!-- Header Introduction -->
        <div class="row text-center" style="margin-bottom: 45px;">
            <div class="col-md-12">
                <h1 class="career-title-main">Career Opportunities</h1>
                <p class="career-subtitle">
                    Join Kamrul Group's dynamic team across 16+ diversified industries. We empower innovative minds, foster continuous growth, and celebrate collaborative achievements.
                </p>
            </div>
        </div>

        <!-- 4 Value Pillars -->
        <div class="row" style="margin-bottom: 55px;">
            <div class="col-md-3 col-sm-6" style="margin-bottom: 25px;">
                <div class="career-feature-card">
                    <div class="career-card-icon">
                        <i class="fa fa-building"></i>
                    </div>
                    <h4>Diverse Exposure</h4>
                    <p>Work across agro-food processing, fintech, modern media, higher education, and international trade.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" style="margin-bottom: 25px;">
                <div class="career-feature-card">
                    <div class="career-card-icon">
                        <i class="fa fa-lightbulb-o"></i>
                    </div>
                    <h4>Innovation & Growth</h4>
                    <p>Embrace modern technology and forward-thinking initiatives that challenge and accelerate your potential.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" style="margin-bottom: 25px;">
                <div class="career-feature-card">
                    <div class="career-card-icon">
                        <i class="fa fa-trophy"></i>
                    </div>
                    <h4>Competitive Rewards</h4>
                    <p>Performance-driven bonuses, healthcare benefits, celebratory festivals, and career advancements.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" style="margin-bottom: 25px;">
                <div class="career-feature-card">
                    <div class="career-card-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <h4>Inclusive Culture</h4>
                    <p>A merit-driven environment committed to equal opportunity, safety, mutual respect, and teamwork.</p>
                </div>
            </div>
        </div>

        <!-- Featured Openings -->
        <div class="row" style="margin-bottom: 50px;">
            <div class="col-md-12">
                <div style="border-bottom: 2px solid #e2e8f0; padding-bottom: 12px; margin-bottom: 30px;">
                    <h2 style="color: #072e59; font-weight: 700; font-size: 24px; margin: 0;">
                        <i class="fa fa-briefcase" style="color: #fec731; margin-right: 8px;"></i>Featured Openings
                    </h2>
                </div>

                <!-- Job 1 -->
                <div class="job-card">
                    <div class="row" style="display: flex; align-items: center; flex-wrap: wrap;">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <h3 style="color: #072e59; font-weight: 700; font-size: 19px; margin-top: 0; margin-bottom: 10px;">
                                Senior Software Engineer (Fintech & Web)
                            </h3>
                            <div>
                                <span class="job-badge badge-dept"><i class="fa fa-code"></i> Technology Division</span>
                                <span class="job-badge badge-loc"><i class="fa fa-map-marker"></i> Banani, Dhaka</span>
                                <span class="job-badge badge-type"><i class="fa fa-clock-o"></i> Full-Time</span>
                            </div>
                            <p style="color: #64748b; font-size: 13.5px; margin-top: 10px; margin-bottom: 0; line-height: 1.6;">
                                Looking for an experienced full-stack engineer proficient in modern web applications, scalable REST APIs, payment gateways, and cloud deployment.
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 text-right" style="margin-top: 15px;">
                            <a href="#apply-section" class="btn-apply-role apply-btn-trigger" data-position="Senior Software Engineer (Fintech & Web)">
                                Apply Now <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Job 2 -->
                <div class="job-card">
                    <div class="row" style="display: flex; align-items: center; flex-wrap: wrap;">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <h3 style="color: #072e59; font-weight: 700; font-size: 19px; margin-top: 0; margin-bottom: 10px;">
                                Quality Assurance Officer (Food & Beverages)
                            </h3>
                            <div>
                                <span class="job-badge badge-dept"><i class="fa fa-flask"></i> Kamrul Agro Food</span>
                                <span class="job-badge badge-loc"><i class="fa fa-map-marker"></i> Dhamrai Plant, Dhaka</span>
                                <span class="job-badge badge-type"><i class="fa fa-clock-o"></i> Full-Time</span>
                            </div>
                            <p style="color: #64748b; font-size: 13.5px; margin-top: 10px; margin-bottom: 0; line-height: 1.6;">
                                Lead laboratory quality checks, pasteurization monitoring, chemical and microbial testing, and BSTI/international hygiene compliance for juices and bottled drinks.
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 text-right" style="margin-top: 15px;">
                            <a href="#apply-section" class="btn-apply-role apply-btn-trigger" data-position="Quality Assurance Officer (Food & Beverages)">
                                Apply Now <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Job 3 -->
                <div class="job-card">
                    <div class="row" style="display: flex; align-items: center; flex-wrap: wrap;">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <h3 style="color: #072e59; font-weight: 700; font-size: 19px; margin-top: 0; margin-bottom: 10px;">
                                Business Development & Global Trade Officer
                            </h3>
                            <div>
                                <span class="job-badge badge-dept"><i class="fa fa-globe"></i> International Operations</span>
                                <span class="job-badge badge-loc"><i class="fa fa-map-marker"></i> Banani HQ, Dhaka</span>
                                <span class="job-badge badge-type"><i class="fa fa-clock-o"></i> Full-Time</span>
                            </div>
                            <p style="color: #64748b; font-size: 13.5px; margin-top: 10px; margin-bottom: 0; line-height: 1.6;">
                                Drive partner relations, coordinate cross-border remittances and trade channels with our global offices in UAE, UK, Malaysia, Bahrain, and Sri Lanka.
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 text-right" style="margin-top: 15px;">
                            <a href="#apply-section" class="btn-apply-role apply-btn-trigger" data-position="Business Development & Global Trade Officer">
                                Apply Now <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Job 4 -->
                <div class="job-card">
                    <div class="row" style="display: flex; align-items: center; flex-wrap: wrap;">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <h3 style="color: #072e59; font-weight: 700; font-size: 19px; margin-top: 0; margin-bottom: 10px;">
                                Senior Executive - Accounts & Finance
                            </h3>
                            <div>
                                <span class="job-badge badge-dept"><i class="fa fa-calculator"></i> Corporate Finance</span>
                                <span class="job-badge badge-loc"><i class="fa fa-map-marker"></i> Banani, Dhaka</span>
                                <span class="job-badge badge-type"><i class="fa fa-clock-o"></i> Full-Time</span>
                            </div>
                            <p style="color: #64748b; font-size: 13.5px; margin-top: 10px; margin-bottom: 0; line-height: 1.6;">
                                Manage group accounting, taxation, auditing, financial statements, and ledger reconciling across multiple corporate entities.
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 text-right" style="margin-top: 15px;">
                            <a href="#apply-section" class="btn-apply-role apply-btn-trigger" data-position="Senior Executive - Accounts & Finance">
                                Apply Now <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Application Form & HR Contacts -->
        <div class="row" id="apply-section">
            <!-- Left: Application Form -->
            <div class="col-md-8 col-sm-12" style="margin-bottom: 30px;">
                <div class="career-form-box">
                    <h3 style="color: #072e59; font-weight: 700; font-size: 22px; margin-top: 0; margin-bottom: 10px;">
                        <i class="fa fa-pencil" style="color: #fec731; margin-right: 8px;"></i>Submit Your Application
                    </h3>
                    <p style="color: #64748b; font-size: 14px; margin-bottom: 25px;">
                        Interested in joining our team or applying for general consideration? Complete the form below.
                    </p>
                    <form action="#" method="POST" id="career-application-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label style="font-weight: 600; color: #475569; font-size: 13px;">Full Name *</label>
                                <input type="text" class="form-control" name="full_name" placeholder="Your Full Name" required style="height: 44px; border-radius: 4px; border: 1px solid #cbd5e1;">
                            </div>
                            <div class="col-md-6 form-group">
                                <label style="font-weight: 600; color: #475569; font-size: 13px;">Email Address *</label>
                                <input type="email" class="form-control" name="email" placeholder="Your Email Address" required style="height: 44px; border-radius: 4px; border: 1px solid #cbd5e1;">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label style="font-weight: 600; color: #475569; font-size: 13px;">Phone Number *</label>
                                <input type="text" class="form-control" name="phone" placeholder="e.g. +880 1700 000000" required style="height: 44px; border-radius: 4px; border: 1px solid #cbd5e1;">
                            </div>
                            <div class="col-md-6 form-group">
                                <label style="font-weight: 600; color: #475569; font-size: 13px;">Position Applied For *</label>
                                <select class="form-control" name="position" id="position-select" required style="height: 44px; border-radius: 4px; border: 1px solid #cbd5e1;">
                                    <option value="">-- Select a Position --</option>
                                    <option value="Senior Software Engineer (Fintech & Web)">Senior Software Engineer (Fintech & Web)</option>
                                    <option value="Quality Assurance Officer (Food & Beverages)">Quality Assurance Officer (Food & Beverages)</option>
                                    <option value="Business Development & Global Trade Officer">Business Development & Global Trade Officer</option>
                                    <option value="Senior Executive - Accounts & Finance">Senior Executive - Accounts & Finance</option>
                                    <option value="General Consideration / Other Role">General Consideration / Other Role</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label style="font-weight: 600; color: #475569; font-size: 13px;">Years of Experience</label>
                                <input type="text" class="form-control" name="experience" placeholder="e.g. 3 Years" style="height: 44px; border-radius: 4px; border: 1px solid #cbd5e1;">
                            </div>
                            <div class="col-md-6 form-group">
                                <label style="font-weight: 600; color: #475569; font-size: 13px;">LinkedIn or Portfolio Profile</label>
                                <input type="url" class="form-control" name="profile_url" placeholder="https://linkedin.com/in/username" style="height: 44px; border-radius: 4px; border: 1px solid #cbd5e1;">
                            </div>
                        </div>

                        <div class="form-group">
                            <label style="font-weight: 600; color: #475569; font-size: 13px;">Cover Letter / Brief Summary</label>
                            <textarea class="form-control" name="cover_note" rows="4" placeholder="Briefly describe why you are interested in this position and what sets you apart..." style="border-radius: 4px; border: 1px solid #cbd5e1;"></textarea>
                        </div>

                        <div style="background: #f1f5f9; border-radius: 6px; padding: 14px 18px; margin-bottom: 22px; font-size: 13px; color: #475569;">
                            <i class="fa fa-info-circle text-primary" style="margin-right: 6px;"></i>
                            <strong>CV Attachment:</strong> Please also email your detailed CV in PDF/Word format directly to 
                            <a href="mailto:career@kamrulgroup.com" style="color: #0b4b8a; font-weight: 700;">career@kamrulgroup.com</a> 
                            specifying the job title in the subject line.
                        </div>

                        <button type="submit" class="btn btn-primary" style="background: #0b4b8a; border-color: #0b4b8a; padding: 12px 34px; font-weight: 600; font-size: 15px; border-radius: 4px; transition: all 0.3s;">
                            <i class="fa fa-paper-plane" style="margin-right: 6px;"></i> Submit Application
                        </button>
                    </form>
                </div>
            </div>

            <!-- Right: HR & Direct Contact -->
            <div class="col-md-4 col-sm-12" style="margin-bottom: 30px;">
                <div class="hr-info-box">
                    <h3 style="color: #072e59; font-weight: 700; font-size: 20px; margin-top: 0; margin-bottom: 18px;">
                        <i class="fa fa-address-card" style="color: #fec731; margin-right: 8px;"></i>Human Resources
                    </h3>
                    <p style="color: #64748b; font-size: 13.5px; line-height: 1.6; margin-bottom: 20px;">
                        Have questions about careers, internships, or working at Kamrul Group? Reach out to our HR and Talent Acquisition department.
                    </p>

                    <div style="border-top: 1px solid #e2e8f0; padding-top: 18px; margin-bottom: 18px;">
                        <div style="display: flex; align-items: flex-start; margin-bottom: 15px;">
                            <i class="fa fa-envelope" style="color: #fec731; font-size: 18px; margin-right: 12px; margin-top: 3px;"></i>
                            <div>
                                <strong style="color: #072e59; display: block; font-size: 13.5px;">Email Applications:</strong>
                                <a href="mailto:career@kamrulgroup.com" style="color: #2da1d7; font-size: 13.5px; word-break: break-all;">career@kamrulgroup.com</a><br>
                                <a href="mailto:hr@kamrulgroup.com" style="color: #2da1d7; font-size: 13.5px; word-break: break-all;">hr@kamrulgroup.com</a>
                            </div>
                        </div>

                        <div style="display: flex; align-items: flex-start; margin-bottom: 15px;">
                            <i class="fa fa-phone" style="color: #fec731; font-size: 18px; margin-right: 12px; margin-top: 3px;"></i>
                            <div>
                                <strong style="color: #072e59; display: block; font-size: 13.5px;">Direct Telephone:</strong>
                                <span style="color: #64748b; font-size: 13.5px;">+88 02 9897873</span>
                            </div>
                        </div>

                        <div style="display: flex; align-items: flex-start;">
                            <i class="fa fa-map-marker" style="color: #fec731; font-size: 20px; margin-right: 14px; margin-top: 2px;"></i>
                            <div>
                                <strong style="color: #072e59; display: block; font-size: 13.5px;">Corporate Office:</strong>
                                <span style="color: #64748b; font-size: 13.5px; line-height: 1.5; display: block;">
                                    House 19, Road 24, Block k,<br>
                                    Banani, Dhaka-1213, Bangladesh.
                                </span>
                            </div>
                        </div>
                    </div>

                    <div style="background: #ffffff; border: 1px dashed #cbd5e1; border-radius: 6px; padding: 14px; text-align: center; margin-top: 20px;">
                        <span style="font-size: 12.5px; color: #475569; display: block;">
                            <i class="fa fa-clock-o text-warning"></i> Office Hours: Sun - Thu (9:00 AM - 6:00 PM)
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>

<script>
$(document).ready(function() {
    $('.apply-btn-trigger').on('click', function(e) {
        let position = $(this).data('position');
        if (position) {
            $('#position-select').val(position);
        }
        $('html, body').animate({
            scrollTop: $('#apply-section').offset().top - 80
        }, 600);
    });
});
</script>
