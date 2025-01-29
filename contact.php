<?php
global $contactPage;
$contactPage = true;
?>
<?php include 'includes/header.php'; ?>

<style>
    .required {
        color: red !important;
    }
</style>

<!-- page-title -->
<section class="page-title centred pt_90 pb_0">

    <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->


<!-- contact-section -->
<section class="contact-section pt_90">
    <div class="auto-container">
        <div class="info-inner pb_25">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="single-info">
                        <div class="icon-box"><i class="icon-45"></i></div>
                        <h4>Corporate Office</h4>
                        <p><?= $address; ?></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="single-info">
                        <div class="icon-box"><i class="icon-46"></i></div>
                        <h4>Email Address</h4>
                        <p><a href="mailto:<?= $email; ?>"><?= $email; ?></a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="single-info">
                        <div class="icon-box"><i class="icon-47"></i></div>
                        <h4>Phone Number</h4>
                        <p><a href="tel:<?= $phone; ?>"><?= $phone; ?></a></p>
                        <p><a href="tel:<?= $phone2; ?>"><?= $phone2; ?></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-inner pb_70">
            <form method="post" action="contact.php" id="contact-form">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <label>Your Name <span>*</span></label>
                        <input type="text" name="username" placeholder="" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <label>Phone <span>*</span></label>
                        <input type="text" name="phone" placeholder="" required>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label>Email Address <span>*</span></label>
                        <input type="email" name="email" placeholder="" required>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label>Subject <span>*</span></label>
                        <input type="text" name="subject" placeholder="" required>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label>Write Message <span>*</span></label>
                        <textarea name="message" placeholder=""></textarea>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn pt_18">
                        <button type="submit" class="theme-btn btn-one" name="submit-form">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- contact-section end -->

<?php include 'includes/footer.php'; ?>