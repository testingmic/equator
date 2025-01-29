<?php
global $servicesPage;
$servicesPage = true;
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/content.php'; ?>

<!-- page-title -->
<section class="page-title centred pt_90 pb_0">
    <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Products and Services</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li>Products and Services</li>
            </ul>

        </div>
    </div>
</section>
<!-- page-title end -->


<!-- faq-section -->
<section class="faq-section pt_40 pb_50">
    <div class="auto-container">

        <div class="row">
            <div class="col-md-4">
                <div class="bg-white p-3" style="margin-bottom: 20px;">
                    <p>Our core activity is the purchase of high-quality cocoa beans and their delivery to the Take Over Centres of the Cocoa Marketing Company (CMC), the authorized department of the Ghana Cocoa Board. Through our expertise and industry connections, we facilitate efficient cocoa trading, ensuring that both local and international markets receive premium-grade cocoa.</p>
                </div>
                <div class="bg-white p-3">
                    <img src="assets/images/cocoa-beans.jpg" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div>

                    <ul class="accordion-box">
                        <?php foreach (products_and_services_content() as $service) { ?>
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <div class="icon-box"><i class="icon-29"></i></div>
                                    <h5><?= $service['title'] ?></h5>

                                </div>
                                <div class="acc-content current">
                                    <div class="content bg-white p-3">
                                        <?= $service['description'] ?>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq-section end -->


<?php include 'includes/footer.php'; ?>