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
        <?php include('includes/header.php'); ?>
        <div class="mt-breadcrumb breadcrumbs">
            <div class="container">
                <p><span><a href="index.php">Home</a></span> <span><amp-img height="12" width="12" src="../img/arrow-point-to-right.png"></amp-img></span> <span>Sitemap</span></p>  
            </div>
        </div>
        <section class="sitemap">
            <div class="container py-5">
            <h1 class="mb-5">Sitemap</h1>
                <div class="wrap-block mb-4">
                    <h5 class="p-3">About Alberta</h5>
                    <ul>
                        <li><a href="about-us.php">Our story</a></li>
                        <li><a href="dosti.php">Our values</a></li>
                        <li><a href="verticals.php">Verticals</a></li>
                    </ul>
                </div>

                <div class="wrap-block products mb-4">
                    <h5 class="p-3">Products</h5>
                    <ul>
                        <li class="mb-4"><a href="payment-processing.php"><h6 class="">Payment processing</h6></a></li>
                        <li><a href="rms-pos.php"><h6 class="">Point of Sale systems</h6></a></li>
                        <!-- <li><a href="rms-pos.php">Point-of-Sale Systems (POS/ RMS)</li> -->
                        <li><a href="inventory-management.php">Inventory Management</a></li>
                        <li><a href="loss-prevention.php">Loss prevention</a></li>
                        <li><a href="scan-data.php">Scan Data Program</a></li>
                        <li><a href="mobile-product.php">Mobile app</a></li>
                        <li><a href="kiosk-food-ordering.php">Food ordering kiosk</a></li>
                    </ul>
                </div>

                <div class="wrap-block mb-4">
                    <h5 class="p-3">Agents and Relations</h5>
                    <ul>
                        <li><a href="agent-program.php">Agent program</a></li>
                        <li><a href="industry-relations.php">Industry relations</a></li>
                        <li><a href="testimonials.php">Customer testimonials</a></li>
                    </ul>
                </div>

                <div class="wrap-block mb-4">
                    <h5 class="p-3">News, Events & Careers</h5>
                    <ul>
                        <li><a href="news-and-events.php">News & events</a></li>
                        <li><a href="careers.php">Career</a></li>
                </div>

                <div class="wrap-block mb-4">
                    <h5 class="p-3">General</h5>
                    <ul>
                        <li><a href="contact-us.php">Contact us</a></li>
                        <li><a href="https://www.albertapayments.com/blog/">Blog</a></li>
                        <li><a href="privacy-policy.php">Privacy policy</a></li>
                        <li><a href="terms-of-use.php">Terms & conditions</a></li>
                        <li><a href="sitemap.php">Sitemap</a></li>
                </div>

            </div>
        </section>
    </body>
</html>        