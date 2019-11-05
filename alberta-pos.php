<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--Font embed-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="css/landing.css">
        <link rel="stylesheet" href="css/media-query.css">
        <title>Alberta POS</title>




         <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127159175-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-127159175-1');
    </script>
	
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '920303741653006');
	fbq('track', 'PageView');
	</script>

	<noscript>
	<img height="1" width="1"
	src="https://www.facebook.com/tr?id=920303741653006&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->
    </head>

<body class="land-p">

<!--<div class="land-head">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-4 col-sm-6">
                <a href=""><img src="img/alberta-logo-white.png" alt="Alberta POS" class="img-responsive"></a>
            </div>
            
            <div class="col-md-4 col-sm-6 text-right">
                <a href="tel:888-502-6650" class="land-phone">888-502-6650</a>
            </div>
        </div>
    </div>
</div>-->

<!--Banner section-->

<div class="banner-sec">
    <div class="container">
        <div class="row justify-content-end">
			<div class="col-md-6 py-4 text-left">
				<a href="" class="text-center d-block"><img src="img/alberta-pos-shortn.png" alt="Alberta POS"></a>
				<p class="white">
					Alberta Point of Sale System is a cloud based technology designed for making your retail business operations efficient. The key features include:
					<ul>
						<li><a href="inventory-management.php" class="white"><img src="img/smart-inventory-icon-w.png" alt="SMART Inventory Management">SMART Inventory Management</a></li>
						<li><a href="rms-pos.php#loyalty-prog" class="white"><img src="img/loyalty-platform-w.png" alt="Loyalty Platform">Loyalty Platform</a></li>
						<li><a href="scan-data.php" class="white"><img src="img/automized-scan-data-w.png" alt="Automized Sacn Data Reports">Automized Scan Data Reports</a></li>
						<li><a href="loss-prevention.php" class="white"><img src="img/loss-theft-prevention-w.png" alt="Loss/Theft Prevention">Loss/Theft Prevention</a></li>
						<li><a href="mobile-product.php" class="white"><img src="img/mobile-appli-icon-w.png" alt="Mobile Application">Mobile Application</a></li>
						<li><a href="rms-pos.php#biz-ins" class="white"><img src="img/live-sales-report-w.png" alt="Live Sales Reports">Live Sales Reports</a></li>
					</ul>
				</p>
			</div>
            <div class="col-md-6 align-self-en">
            
                    <form action="mails/mails-landing.php" method="post" id="registerForm">
                    <?php if(isset($_GET['type'])){
			if ($_GET['type'] == "err"){
				if($_GET['msg'] == "smting"){
					$msg = "Something went wrong, Unable to send message now"; 	
					$class = "errContact";
				}
			}
			?>
	           	<div class = "<?php echo $class; ?>"><?php echo $msg; ?></div>
            <?php }	?>
                <span class="form-title">Sign up for a sales agent to contact you with more information!</span>
                <div class="elemts-check"> 
                    <input type = "text" name = "serverHost" value = "<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
                    <input type = "text" maxlength="150" name= "weburl" id="weburl" value= "sample:www.albertapayments.com" />
                </div>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend name-bg">
                    <div class="input-group-text"><img src="img/name.png" alt="Name"></div>
                    </div>
                    <input type="text" class="form-control required" id="name" name="name" placeholder="Name" title="Please enter your Name">
                </div>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend company-bg">
                    <div class="input-group-text"><img src="img/company.png" alt="Company"></div>
                    </div>
                    <input type="text" class="form-control required" id="company" name="company" placeholder="Business Name" title="Please enter your business name">
                </div>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend phone-bg">
                    <div class="input-group-text"><img src="img/phone.png" alt="Phone"></div>
                    </div>
                    <input type="text" class="form-control required" id="phone" name="phone" placeholder="Phone" title="Please enter your Phone No">
                </div>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend email-bg">
                    <div class="input-group-text"><img src="img/email.png" alt="Email"></div>
                    </div>
                    <input type="email" class="form-control required" id="email" name="email" placeholder="Email" title="Please enter your Email">
                </div>
                
                    <div class="input-group prod-check mb-2 mr-sm-2">
                    <div class="prod-bord">
                    <legend>Choose a Product</legend>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input checking" type="checkbox" name="inlineCheckbox[]" id="check1" value="Payment Processing"  title="Please enter your Email">
                        <p class="form-check-label" for="inlineCheckbox1">Payment Processing</p>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input checking" type="checkbox" name="inlineCheckbox[]" id="check2" value="POS" title="Please enter your Email">
                        <p class="form-check-label" for="inlineCheckbox1">POS</p>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input checking" type="checkbox" name="inlineCheckbox[]" id="check3" value="Kiosks" title="Please enter your Email">
                        <p class="form-check-label" for="inlineCheckbox2">Kiosks</p>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input checking" type="checkbox" name="inlineCheckbox[]" id="check4" value="ATM" title="Please enter your Email">
                        <p class="form-check-label" for="inlineCheckbox3">ATM</p>
                        </div>
                    </div>
                    </div>

               
                <div class="form-group">
                <div class="input-group mb-2 mr-sm-2">
                    <div class="g-recaptcha resol" id="recaptcha" data-sitekey="6LfcaH8UAAAAAFQXH9cb6M35ITyHAmsr0BNV8zoC"></div> 
                    
                    <span class="msg-error"></span>
                </div>
                </div>
                <!-- <button type="submit" class="btn btn-primary contact-btn mb-2">Send us</button> -->
                <input type="button" name="sbt_form" class="btn btn-primary contact-btn mb-2 subaction" placeholder="Send us" value="Submit">
                </form>
            </div>
			<div class="pro-bund container">
				<img src="img/product-bundle.png" alt="Product Bundle">
			</div>
        </div>
    </div>
</div>


<!--Overlay section-->
<!--<div class="over-sec">
    <div class="container text-center">
        <div class="over-bg">
            <img src="img/alberta-pos-short.png" alt="Alberta POS">
            <h1 class="white">Alberta Point of Sales system is a cloud based technology designed for making your retail business operations efficient.</h1>
        </div>
    </div>
</div>-->


<!--Mid feature-->
<!--<div class="mid-fea py-5">
    <div class="container text-center">
        <h4 class="key-head pb-5">Key Features</h4>
        <div class="row">
            <div class="col-md-4">
                <img src="img/smart-inventory-icon.png" alt="SMART Inventory Management">
                <h4>SMART Inventory Management</h4>
            </div>
            <div class="col-md-4">
                <img src="img/loyalty-platform.png" alt="Loyalty platform">
                <h4>Loyalty Platform</h4>
            </div>
            <div class="col-md-4">
                <img src="img/automized-scan-data.png" alt="Automized Scan data reports">
                <h4>Automized Scan Data Reports</h4>
            </div>
            <div class="col-md-4">
                <img src="img/loss-theft-prevention.png" alt="Loss/Theft prevention">
                <h4>Loss/Theft Prevention</h4>
            </div>
            <div class="col-md-4">
                <img src="img/mobile-appli-icon.png" alt="Mobile Application">
                <h4>Mobile Application</h4>
            </div>
            <div class="col-md-4">
                <img src="img/live-sales-report.png" alt="Live sales reports">
                <h4>Live Sales Reports</h4>
            </div>
        </div>
    </div>
</div>-->

<div class="mid-quote p-5">
    <div class="container text-center">
        <a href="https://www.albertapayments.com/"><img src="img/alberta-logo-land.jpg" alt="Alberta POS"></a>
        <p class="">is a one stop shop for all your business needs! We also offer</p>
    </div>
</div>

<div class="mid-new container">
	<div class="row">
		<div class="col-md-4 px-5">
			<img src="img/payment-process-land.png" alt="Payment Processing">
            <p><a href="payment-processing.php">Payment Processing</a></p>
		</div>
		<div class="col-md-4 px-5">
            <img src="img/kiosk-land.png" alt="Food ordering kiosk">
            <p><a href="kiosk-food-ordering.php">Food Ordering Kiosk</a></p>
		</div>
		<div class="col-md-4 px-5">
            <img src="img/atm-land.png" alt="ATM">
            <p>ATM</p>
		</div>
	</div>
</div>

<!--<div class="foot-top py-5">
    <div class="container">
        <div class="ft-one">
			<img src="img/payment-process-land.png" alt="ATM">
            <p>Payment Processing</p>
        </div>
        <div class="ft-two">
            <img src="img/kiosk-land.png" alt="Payment processing">
            <p>Food Ordering Kiosk</p>
        </div>
        <div class="ft-three">
            <img src="img/atm-land.png" alt="Food ordering kiosk">
            <p>ATM</p>
        </div>
    </div>
</div>-->

<!--<div class="container text-center">
    <a href="https://www.albertapayments.com" class="more-btn">For more information, visit our website.</a>
</div>-->
        

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>



</body>
</html>
