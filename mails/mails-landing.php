<?php 
// check already submitted 

//$getServerDetails = $mysqli->query("");

if(isset($_POST) && isset($_POST['weburl']) && $_POST['weburl'] != "" && $_POST['weburl'] == "sample:www.albertapayments.com" )
{	
	
	
	$to = "info@albertapayments.com, alberta.paymentstech@gmail.com";
	// $cc = "info@albertapayments.com,boopathy.r@globalintegra.net";
	//$to = "boopathy.r@globalintegra.net";
	
	$redirect= "https://www.albertapayments.com/thank-you.php";
	
	$req ="";
	
	$name = $_POST['name']; 
	
	$company = $_POST['company']; 
	
	$phone = $_POST['phone']; 
	
	$email = $_POST['email']; 
	
	$checkVal = implode(", ",$_POST['inlineCheckbox']);
	
	//$info = $_POST['comments']; 
	
	$serverHost  = $_POST['serverHost'];
	
	$subject = "This weblead is from Alberta POS Landing page"; 
	
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
	
	header("Location: $redirect");
	
	//header('Refresh: 3; URL=thank-you.php');
	
	}
	
}
else {
	$rdr = "https://www.albertapayments.com/alberta-pos.php?type=err&msg=smting"; 
	header("Location: $rdr");
}



?>