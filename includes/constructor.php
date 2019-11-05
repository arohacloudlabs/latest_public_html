<?php 

	 $siteStat= "live"; 
	
	if($siteStat == "local"){
		define("BASEURL","http://localhost/alberta/");
	}
	else if($siteStat == "live"){
		define("BASEURL","https://www.albertapayments.com/");
	}
	else{
		define("BASEURL","https://www.albertapayments.com/");
	}
?>