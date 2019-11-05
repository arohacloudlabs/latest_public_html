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
        <!--Inner page header starts-->
        <div class="inner-header product-header mob-app py-9">
            <div class="container pt-7">
                <div class="col-md-9">
                    <h1 class="robo-bold white"><span>Mobile app</span></h1>
                    <p class="robo-reg white">With Alberta mobile app on your phone, your business is at your fingertips anytime, anywhere. You get live updates about the same, you can change the product pricing and send push notifications too.</p>
                </div>
            </div>
        </div>
        <!--Inner page header ends-->
        <div class="breadcrumbs">
            <div class="container">
                <p><span><a href="index.php">Home</a></span> <span><amp-img height="12" width="12" src="../img/arrow-point-to-right.png"></amp-img></span> <span><a href="rms-pos.php">Retail management solutions / POS</a></span> <span><amp-img height="12" width="12" src="../img/arrow-point-to-right.png"></amp-img></span> <span>Mobile Product</span></p>
            </div>
        </div>
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
        <!--Features Section-->
        <section class="prod-features mob-feat pt-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h3>
                            <span class="d-block robo-light">Our Mobile app is</span>
                            <span class="robo-bold">helping your </span>
                            <span class="robo-bold">business grow faster</span>
                        </h3>
                    </div>
                    <div class="col-md-5">
                        <div class="pro-features-text">
                            <ul>
                                <li>View live transactions of your store sales</li>
                                <li>Change pricing on the go to match with your competition</li>
                                <li>Get push notifications for various alerts / transactions</li>
                                <li>Scan to create purchase order & receive order using your phone</li>
                            </ul>
                            <p class="robo-light">Now you can enjoy your time with your family while we take care of your needs!</p>
                            <p class="robo-light">Compatible with most payment terminals.</p>
                            <p class="robo-light">Did you know that you can upgrade yourself to Alberta POS even with your existing payment terminal. <a href="https://www.youtube.com/watch?v=tQC17rDtvTQ&feature=youtu.be" target="_blank">Click here</a> to schedule a demo and ask us how.</p>
                            <a href="contact-us.php" class="c2a-btn">Ask for a demo!</a>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <!--Features Section-->
        <?php include "product-slider.php"; ?>
        <?php include "includes/footer.php"; ?>
    </body>
</html>    
