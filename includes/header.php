<?php	 
$pageName =  basename($_SERVER["SCRIPT_FILENAME"], '.php');
$useragent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match("/Mobile|Android|BlackBerry|iPhone|Windows Phone/", $_SERVER['HTTP_USER_AGENT'])) {
    echo "<script> var name='".$pageName."';location.href='https://www.albertapayments.com/amp/'+name+'.php'</script>";exit;
    //header('Location:https://www.albertapayments.com/amp/index.php'); exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
	<?php 
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
 	<base href="<?php echo BASEURL; ?>">
   <link rel="amphtml" href=“/amp/index”>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="<?php echo BASEURL.basename($_SERVER["SCRIPT_FILENAME"], '.php') ?>">
	<meta name="keywords" content="<?php echo $metaKeyword; ?>">
	<meta name="description" content="<?php echo $metaDescription; ?>">
	
    <!--Font embed-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/plyr.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/media-query.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    
<!-- <link rel="stylesheet" href="https://cdn.plyr.io/3.4.6/plyr.css"> -->
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
	
	<!-- Begin Constant Contact Active Forms -->
	<script> var _ctct_m = "e066cf63671c9098cd096d6f29888dcd"; </script>
	<script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
	<!-- End Constant Contact Active Forms -->

    <title><?php echo $pageTitle; ?></title>
  </head>
  <body>
    <!-- Pre header-->
   <header class="fixed-top">
    <noscript>
    <style>.subaction{display:none;visibility:hidden;opacity:0;}</style>  
    <div class="alert alert-danger" style="text-align: center;">JavaScript is Disabled. Please enable to view full site.</div></noscript>
     <div class="container py-3">
         <div class="row">
           <div class="col align-self-start">
             <a href="https://www.albertapayments.com/"><img src="img/alberta-logo.png" alt="Alberta Payments"></a>
           </div>
           <div class="col align-self-center header-anch text-right">
             <div class="btn-group text-right">
               <a href="contact-us" class="btn btn-gres btn-secondary active">Contact Us</a>
               <a href="contact-us" class="btn btn-blues btn-secondary">Sign in</a>
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
                  <li><a class="dropdown-item" href="payment-processing">Payment processing</a></li>
                  <li class="sub-dd-item"><a class="dropdown-item sub-menu-arrow" href="rms-pos">Point-of-Sale Systems (POS/ RMS)</a>
                    <ul class="sub-dd-list">
                      <li class="nav-item"><a class="dropdown-item" href="inventory-management">Inventory management</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="loss-prevention">Loss prevention</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="scan-data">Scan Data Program</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="mobile-product">Mobile app</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="kiosk-food-ordering">Food ordering kiosk</a></li>
                    </ul>
                  </li>
                 </ul>
                
              </div>
            </li>

              <div class="dropdown-menu" aria-labelledby="product-nav">
                
              </div>
              <li class="nav-item dropdown show">
              <a class="nav-link dropdown-toggle" href="#" id="product-nav" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Relations
              </a>
              <div class="dropdown-menu" aria-labelledby="product-nav">
                 <ul class="navbar-nav mr-auto sub-dd">
                  <li><a class="dropdown-item" href="industry-relations">Industry relations</a></li>
                  <li><a class="dropdown-item" href="testimonials">Customer testimonials</a></li>
                 </ul>
                
              </div>
            </li>
             <li class="nav-item">
               <a class="nav-link" href="agent-program">Agent program</a>
             </li>
             <li class="nav-item dropdown show">
              <a class="nav-link dropdown-toggle" href="#" id="product-nav" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About Us  
              </a>
              <div class="dropdown-menu" aria-labelledby="product-nav">
                 <ul class="navbar-nav mr-auto sub-dd">
                  <li><a class="dropdown-item" href="about-us">Our story</a></li>
                  <li><a class="dropdown-item" href="dosti">Our values</a></li>
                 </ul>
                
              </div>
            </li>

             
             <li class="nav-item">
               <a class="nav-link" href="news-and-events">News & events</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="<?php echo BASEURL ?>blog">Blog</a>
             </li>
           </ul>
             <a href="tel:888-502-6650" class="white">DEMO: (888) 502 6650</a>
         </div>
       </div>
     </nav>
   </header>