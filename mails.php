<?php 
include_once 'simple-php-captcha/simple-php-captcha.php';

@session_start();
  
$redirect= "thank-you.php";

 /*  print_r($_SESSION);
 print_r($_POST); 
 exit();  */ 
 

	if ($_SESSION['captcha_code']  != $_POST['captcha_code']) {
	  // the code was incorrect
	  // you should handle the error so that the form processor doesn't continue
	
	  // or you can use the following code if there is no validation or you do not know how
	  /* echo "The security code entered was incorrect.<br /><br />";
	  echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
	  exit; */ 
	  
	  $rdr = ""; 
	  header("Location:https://www.albertapayments.com/contact-us.php?type=err&msg=capCErr");
	}



 
if(isset($_POST['name']) && $_POST['name'] != "" && strtolower($_POST['company']) != "google" && $_SESSION['captcha_code']  == $_POST['captcha_code'])
{	
	//$to = "boopathy.r@globalintegra.net"; 
	
	 $to = "alberta.paymentstech@gmail.com";
	// $cc = "info@albertapayments.com"; 

	
	
	$req ="";
	
	$name = $_POST['name']; 
	
	$company = $_POST['company']; 
	
	$phone = $_POST['phone']; 
	
	$email = $_POST['email']; 
	
	$checkVal = implode(", ",$_POST['inlineCheckbox']);
	
	$info = $_POST['comments']; 
	
	$serverHost  = $_POST['serverHost'];
	
	$subject = "This weblead is from Albertapayments.com"; 
	
	$messagecont= "
	
	<table width='500' border='1' style='font-family:verdana;' bordercolor='#bbbbbb' cellspacing='0'>
	<tr>
	<td colspan='2' bgcolor='#eeeeee'><h3><strong>$subject</strong></h3></td>
	</tr>
	<tr>
	<td width='128'><b>Name</b></td>
	
	<td width='338'>$name </td>
	
	</tr>
	<tr>
	
	<td width='128'><b>Company</b></td>
	
	<td width='338'>$company </td>
	
	</tr>
	
	<tr>
	
	<td width='128'><b>Phone</b></td>
	
	<td width='338'>$phone </td>
	
	</tr>
	
	<tr>
	
	<td><b>E-Mail</b></td>
	
	<td>$email </td>
	
	</tr>
	
	<tr>
	
	<td><b>Choose a product</b></td>
	
	<td>$checkVal </td>
	
	</tr>
	
	<tr>
	
	<td colspan='2'><b>Message</b></td>
	
	</tr>
	
	<tr>
	
	<td colspan='2'>$info</td>
	
	</tr>
	
	<tr>
	
	<td><b>IP Address</b></td>
	
	<td>$serverHost</td>
	
	</tr>
	</table>";
	
	
	$from = "forms@albertapayments.com";
	
	$headers = "From: ".$from."\r\n"; 
	
	// $headers .= "CC: ".$cc."\r\n";
	
	$headers .= "MIME-Version: 1.0\r\n"; 
	
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 
	
	//$headers .= "X-Priority: 1\r\n"; 
	
	
	
	$success = mail($to, $subject, $messagecont, $headers);	
	
	
	if($success)
	
	{
	
	//echo "<div class='msg-notify'><h3>Your request has been submitted, <br/>You will receive an information shortly.</h3></div>"; 
	
	header("Location:https://www.albertapayments.com/thank-you.php");
	
	//header('Refresh: 3; URL=thank-you.php');
	
	}
	
}
else {
	$rdr = "https://www.albertapayments.com/"; 
	header("Location:https://www.albertapayments.com/contact-us.php?type=err&msg=smting");
}



?>