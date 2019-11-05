<?php 
	$pageName =  basename($_SERVER["SCRIPT_FILENAME"], '.php');
	  $useragent = $_SERVER['HTTP_USER_AGENT'];
  	if (!preg_match("/Mobile|Android|BlackBerry|iPhone|Windows Phone/", $_SERVER['HTTP_USER_AGENT'])) {
    	// header('Location: ../'.$pageName); exit;
  	}
  	include_once ("../includes/constructor.php");
  	include_once ("../includes/metaInfo.php");
  	if (isset($pageName) && $pageName != "" && strlen($pageName) > 0 ) {
    	$metaDetails = metaDetails(strtolower($pageName)); 
    	$pageTitle = $metaDetails['pageTitle'];
    	$metaKeyword = $metaDetails['metaKeyword'];
    	$metaDescription = $metaDetails['metaDescription'];
  	}

  	if($pageTitle =="") {
    	$pageTitle = "Alberta Payments"; 
    	$metaKeyword = "point of sale, credit card processing, merchant processing, alberta pos, retail management solutions, food ordering kiosk, liquor pos, c store, petro back, office,  atm"; 
    	$metaDescription = "Alberta Payments LLC provides retail management solutions like point of sale, credit card processing and food processing kiosk with key features to enhance your sales and customer experience.";
  	}
?>
