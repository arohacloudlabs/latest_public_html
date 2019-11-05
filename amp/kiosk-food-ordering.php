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
        <div class="inner-header product-header kiosk py-9">
        <div class="container pl-15">
            <div class="col-md-9 pl-15">
                <h1 class="robo-bold white"><span>Food ordering Kiosk</small></span></h1>
            </div>
        </div>
        </div>
        <!--Inner page header ends-->
        <div class="breadcrumbs">
            <div class="container">
            <p><span><a href="index.php">Home</a></span> <span><amp-img height="12" width="12" src="../img/arrow-point-to-right.png"></amp-img></span> <span><a href="rms-pos.php">Retail management solutions / POS</a></span> <span><amp-img height="12" width="12" src="../img/arrow-point-to-right.png"></amp-img></span> <span>kiosk food ordering</span></p>
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

        <!--<div class="our-vert">
        <p class="our-vert-click">Store Types<amp-img height="100" width="100" src="../img/up-arrow.png" alt="Down"></p>
        <div class="clearfix"></div>
            <section class="sti-services-wrap">
            <section class="sti-services">
            <ul>
                <li class="sticky-serv"><a href="verticals.php#conv-store">Convenience Store</a></li>
                <li class="sticky-serv"><a href="verticals.php#liquor">Liquor Store</a></li>
                <li class="sticky-serv"><a href="verticals.php#supermarket">Supermarket</a></li>
                <li class="sticky-serv"><a href="verticals.php#restaurant">Quick Service restaurant</a></li>
            </ul>
            <div class="clearfix"></div>
            </section>
            </section>
        </div>-->

        <!--Food ordering features-->
        <section class="food-ordering">
            <div class="container text-center pl-15">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="text-uppercase py-5 orange" style="color: #e74618;">Food Ordering at your Fingertips</h2>
                        <p class="robo-reg mb-5 disp-container">Alberta’s food ordering kiosk is the most economical & reliable technology in the market. The kiosk helps you control cost, improves order accuracy and reduces time taken to check out by taking customer orders to eliminate traditional processes and human error. <br><br> Our kiosk has proven to <strong>increase sales up to 15%</strong> by reducing walk-away’s from the line, and increase single order processing speed.</p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="text-wrap-left">
                            <h3 class="h1 py-3">Increases sales</h3>
                            <p class="para-1">Alberta Food Ordering Kiosk has proven to increase sales up to 15% by increasing single order processing speed and reducing walk-away’s from the line.</p>
                            <h3 class="h2 py-3">Centralized Menu boards</h3>
                            <p class="para-2">The centrally managed menu board helps update the inventory, pricing and special offers from anywhere using our cloud-based technology. The better control on your system helps in accurately updating the kitchen operations about new order on real-time basis</p>			
                            <h3 class="h3 py-3">Marketing Platform</h3>
                            <p class="para-3">Upsell your products by prompting customers to avail offer based on the order placed by the customer. The digital signage can be used to highlight ‘deal of the day’ or ‘on-going promotions’. This gives customer an opportunity to explore more products and increases their time spent shopping at the store.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-5">
                        <div class="text-wrap-right">
                            <h3 class="h4 py-3">Reduces operational cost</h3>
                            <p class="para-4">The self-ordering kiosk helps in saving human hours and improves order accuracy. The self-ordering kiosk also gives customer’s freedom to order themselves on this intuitive technology</p>
                            <h3 class="h5 py-3">Improve customer service</h3>
                            <p class="para-5">Food ordering kiosk helps increase customer satisfaction by providing accurate and quick service on the order. This encourages to be a regular visitor at your store and also provide positive feedback. </p>
                            <h3 class="h6 py-3">Menu Management</h3>
                            <p class="para-6">Our food ordering kiosk is designed to handle complex and combo menus. It is much quicker to change the pricing, items and offers on the menu using our cloud based technology which helps you access your menu from anywhere, anytime.</p>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    
                    <div class="col-md-12 text-center">
                        <amp-img height="100" width="100" src="../img/food-ordering-features.png" class="d-block mx-auto food-ord-img" alt="Food ordering kiosk"></amp-img>
                        <a href="contact-us.php" class="c2a-btn my-5">Ask for a demo!</a>
                    </div>
                    
                </div>
            </div>
        </section>
        <?php include "product-slider.php"; ?>
        <?php include "includes/footer.php"; ?>
    </body>
</html>    