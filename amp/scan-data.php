<?php include('includes/meta.php'); ?>
<!doctype html>
<html amp lang="en">
	<head>
		<?php include('includes/head.php') ?>
		
		 <!-- <script async src="https://cdn.ampproject.org/v0.js"></script> -->
   		<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
   		<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
	</head>
	<body>
        <?php include('includes/header.php') ?>
        <section class="sti-services-wrap">
            <p>Store Types</p>
            <section class="sti-services">
                <ul>
                    <li class="sticky-serv"><a href="verticals.php#conv-store">Convenience <br>Store</a></li>
                    <li class="sticky-serv"><a href="verticals.php#liquor">Liquor <br>Store</a></li>
                    <li class="sticky-serv"><a href="verticals.php#supermarket">Supermarket</a></li>
                    <li class="sticky-serv"><a href="verticals.php#restaurant">Quick Service <br>restaurant</a></li>
                </ul>
            </section>
        </section>
        <div class="scan-header-bg pt-7">
            <div class="container">
                <div class="scan-inner-bg text-center pt-5 pb-7">
                    <amp-img height="50" width="345"  src="../img/scan-inner-title.png" alt="Do you have 5 minutes?"></amp-img>
                    <div class="mins5 py-4">
                        <div class="row text-ceneter">
                            <div class="col-md-2">
                                <amp-img height="77" width="111" src="../img/5mins.png" alt="5 Mins"></amp-img>
                            </div>
                            <div class="col-md-10">
                                <h3 class="mins5-title">5 mins with Alberta <a href="rms-pos.php" style="color:#fff">POS</a> can help you earn<br> manufacturer incentives with Scan Data Program</h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <!--Three column features-->
                <div class="col-features">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <amp-img height="130" width="130" src="../img/easy-to.jpg" alt="Easy to use"></amp-img>
                            <h4>Easy to use</h4>
                        </div>
                        <div class="col-md-4 text-center">
                            <amp-img height="130" width="130" src="../img/built-in.jpg" alt="Easy to use"></amp-img>
                            <h4>Built-in loyalty program</h4>
                        </div>
                        <div class="col-md-4 text-center">
                            <amp-img height="130" width="130" src="../img/integrated.jpg" alt="Easy to use"></amp-img>
                            <h4>Integrated with Scan Data Program*</h4>
                            <span class="alpha">Altira or RJR</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="up-sell-img">
            <amp-img height="200" width="500" layout="responsive" src="../img/up-sell.jpg" alt="SCAN DATA - UP SELL"></amp-img>
        </div>

        <div class="start-earning text-center py-4">
            <p class="white"><b>$$</b>Start earning additional revenue from manufacturer incentives today!<b>$$</b></p>
        </div>
        <div class="scan-footer py-7">
            <div class="container pl-15">
                <div class="row">
                    <div class="col-md-4">
                        <div class="bg-grey-wrap text-center py-4">
                            <amp-img height="84" class="lock-call" width="84" src="../img/call-aqua.png" alt="Call"></amp-img>
                            <p><a href="tel:888 502 6650">(888) 502 6650</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-grey-wrap text-center py-4">
                            <amp-img height="84" width="84" class="lock-call" src="../img/web-ico.png" alt="Call"></amp-img>
                            <p><a href="https://www.albertapayments.com/">albertapayments.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-grey-wrap text-center py-4">
                            <amp-img height="84" width="84" class="lock-call" src="../img/email-ico.png" alt="Call"></amp-img>
                            <p><a href="mailto:info@albertapayments.com">info@albertapayments.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="contact-us.php" class="scan-btn col-md-5 text-uppercase">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include "product-slider.php"; ?>
        <?php include "includes/footer.php"; ?>
    </body>
</html>        