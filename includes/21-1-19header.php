<?php 
 	$pageName =  basename($_SERVER["SCRIPT_FILENAME"], '.php');
 
 	include_once ("constructor.php");
	include_once ("metaInfo.php");
	
	if (isset($pageName) && $pageName != "" && strlen($pageName) > 0 )
	{
		$metaDetails = metaDetails(strtolower($pageName)); 
 		$pageTitle = $metaDetails['pageTitle'];
		$metaKeyword = $metaDetails['metaKeyword'];
		$metaDescription = $metaDetails['metaDescription'];
	}
	if($pageTitle =="")
	{
		$pageTitle = "Alberta Payments"; 
		$metaKeyword = "point of sale, credit card processing, merchant processing, alberta pos, retail management solutions, food ordering kiosk, liquor pos, c store, petro back, office,  atm"; 
		$metaDescription = "Alberta Payments LLC provides retail management solutions like point of sale, credit card processing and food processing kiosk with key features to enhance your sales and customer experience.";
	}
	
?>
<!doctype html>
<html lang="en">
  <head>
 	<base href="<?php echo BASEURL; ?>">
	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="keywords" content="<?php echo $metaKeyword; ?>">
	<meta name="description" content="<?php echo $metaDescription; ?>">
	
    <!--Font embed-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/media-query.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="icon" href="img/favicon.png" sizes="32x32" type="image/png">	
    <!--[if IE 9]>
      <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
    <![endif]-->
    <!--[if lte IE 8]>
      <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>
    <![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127159175-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-127159175-1');
    </script>
    <!-- <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'b9e0e5fe-899a-4fdf-af28-0d02c369ed99', f: true }); done = true; } }; })();</script> -->
    <title><?php echo $pageTitle; ?></title>
    
  </head>
  <body>
    <!-- Pre header-->
   <header>
     <div class="container py-3">
         <div class="row">
           <div class="col align-self-start">
             <a href="index.php"><img src="img/alberta-logo.png" alt="Alberta Payments"></a>
           </div>
           <div class="col align-self-center header-anch text-right">
             <div class="btn-group text-right">
               <a href="contact-us.php" class="btn btn-gres btn-secondary active">Contact Us</a>
               <a href="contact-us.php" class="btn btn-blues btn-secondary">Sign in</a>
             </div>
           </div>
         </div>
     </div>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <div class="container">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-menu" aria-controls="nav-menu" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
   
         <div class="collapse navbar-collapse" id="nav-menu">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item dropdown show">
              <a class="nav-link dropdown-toggle" href="#" id="product-nav" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Products
              </a>
              <div class="dropdown-menu" aria-labelledby="product-nav">
                 <ul class="navbar-nav mr-auto sub-dd">
                  <li><a class="dropdown-item" href="payment-processing.php">Payment processing</a></li>
                  <li class="sub-dd-item"><a class="dropdown-item sub-menu-arrow" href="rms-pos.php">Retail management solutions / POS</a>
                    <ul class="sub-dd-list">
                      <li class="nav-item"><a class="dropdown-item" href="loss-prevention.php">Loss prevention</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="scan-data.php">Scan Data Program</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="mobile-product.php">Mobile app</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="kiosk-food-ordering.php">Food ordering kiosk</a></li>
                    </ul>
                  </li>
                 </ul>
                
              </div>
            </li>

              <div class="dropdown-menu" aria-labelledby="product-nav">
                
              </div>
             <li class="nav-item">
               <a class="nav-link" href="industry-relations.php">Industry relations</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="testimonials.php">Customer testimonials</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="about-us.php">Our story</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="dosti.php">Our values</a>
             </li>
             
             <li class="nav-item">
               <a class="nav-link" href="news-and-events.php">News & events</a>
             </li>
           </ul>
             <a href="tel:888-502-6650" class="white">Demo: (888) 502 6650</a>
         </div>
       </div>
     </nav>
   </header>