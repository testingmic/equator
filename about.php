<?php 
global $aboutPage;
$aboutPage = true; 
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/content.php'; ?>

<style>
    .cocoa-image img {
        border-radius: 10px;
    }
    .cta-section .inner-container .icon-box img {
        max-width: 250px;
    }
</style>

<!-- page-title -->
<section class="page-title centred pt_90 pb_0">

    <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>About Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->


<!-- about-style-three -->
<section class="about-style-three pt_90 pb_100">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_seven">
                    <div class="content-box">
                        <div class="sec-title pb_50">
                            <span class="sub-title mb_14">About US</span>
                            <h2>Our reputation is built on <span>Experience</span></h2>
                        </div>
                        <?php echo who_we_are_content(); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                <div class="video_block_one">
                    <div class="video-box z_1 p_relative ml_50 centred">
                        <figure class="image-box cocoa-image">
                            <img src="assets/images/cocoa-beans.jpg" alt="">
                        </figure>
                        <div class="video-content">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-three end -->


<!-- cta-section -->
<section class="cta-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="shape" style="background-image: url(assets/images/shape/shape-16.png);"></div>
            <div class="icon-box"><img src="assets/images/round-cocoa.jpg" alt=""></div>
            <h2><span>Trade for</span> less, <span>with</span> low prices <br /><span>and</span> transparent fees</h2>
        </div>
    </div>
</section>
<!-- cta-section end -->


<!-- account-style-three -->
<section class="account-style-three pt_100 pb_70">
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                <div class="inner-content">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 account-block">
                            <div class="account-block-one pb_1 wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-01"></i></div>
                                    <h3><a href="#">Farmer Training and Support</a></h3>
                                    <p>We provide education and training programs to farmers on best agricultural practices, sustainable farming methods, and financial literacy. This helps improve yield, increase profitability, and promote eco-friendly farming techniques.</p>
                                </div>
                            </div>
                            <div class="account-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-03"></i></div>
                                    <h3><a href="#">Youth and Women Empowerment</a></h3>
                                    <p>We support programs aimed at empowering women and young people in cocoa farming communities. By offering skills training and financial assistance, we help create employment opportunities and encourage the next generation to participate in the cocoa industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 account-block pt_75">
                            <div class="account-block-one pb_1 wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-02"></i></div>
                                    <h3><a href="#">Environmental Sustainability</a></h3>
                                    <p>As part of our commitment to sustainability, we advocate for responsible land use and reforestation initiatives. We work closely with farmers to encourage agroforestry practices that maintain soil fertility and reduce the environmental impact of cocoa farming.</p>
                                </div>
                            </div>
                            <div class="account-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-04"></i></div>
                                    <h3><a href="#">Community Development</a></h3>
                                    <p>We invest in community projects, such as building schools, providing clean water, and supporting healthcare initiatives in cocoa-producing regions. These efforts help improve the overall well-being of farmers and their families, creating a more sustainable cocoa industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_eight">
                    <div class="content-box ml_60">
                        <div class="sec-title pb_20">
                            <h2>Corporate Social Responsibility <span>(CSR)</span></h2>
                        </div>
                        <div class="text-box">
                            <p>We believe in giving back to the communities that support our business. Our Corporate Social Responsibility (CSR) initiatives are focused on sustainable cocoa farming, farmer empowerment, and community development.</p>
                            <ul class="list-style-one mb_40 clearfix">
                                <li>Trade with one tap, anywhere, anytime</li>
                                <li>Seamlessly manage your account and portfolio</li>
                                <li>Stay ahead with real-time charts and indicators</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- account-style-three end -->

<?php include 'includes/footer.php'; ?>