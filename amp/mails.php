<?php 

include_once 'simple-php-captcha/simple-php-captcha.php';

@session_start();

$redirect= "thank-you.php";

if ($_SESSION['captcha_code']  != $_POST['captcha_code']) {

    $rdr = ""; 

    header("HTTP/1.0 412 Precondition Failed", true, 412);

    echo json_encode(array('errmsg'=>'Invlid Captcha')); die;

}

echo json_encode(array('message'=>'success')); die;

if(isset($_POST['name']) && $_POST['name'] != "" && strtolower($_POST['company']) != "google" 

        && $_SESSION['captcha_code']  == $_POST['captcha_code']) {



        // $to = "info@albertapayments.com, alberta.paymentstech@gmail.com";

        $to = "info@albertapayments.com";

        // $cc = "ummehani@albertapayments.com,info@albertapayments.com,boopathy.r@globalintegra.net"; 

        $cc = "alberta.paymentstech@gmail.com";

        $req ="";

        $name = $_POST['name']; 

	    $company = $_POST['company']; 

	    $phone = $_POST['phone']; 

	    $email = $_POST['email']; 

	    $checkVal = implode(", ",$_POST['inlineCheckbox']);

	    $info = $_POST['comments']; 

	    $serverHost  = $_POST['serverHost'];

        $subject = "This weblead is from Albertapayments.com"; 

        $messagecont= "<table width='500' border='1' style='font-family:verdana;' bordercolor='#bbbbbb' cellspacing='0'>

	                    <tr><td colspan='2' bgcolor='#eeeeee'><h3><strong>$subject</strong></h3></td></tr>

                        <tr><td width='128'><b>Name</b></td><td width='338'>$name </td></tr>

                        <tr><td width='128'><b>Company</b></td><td width='338'>$company </td></tr>

	                    <tr><td width='128'><b>Phone</b></td><td width='338'>$phone </td></tr>

	                    <tr><td><b>E-Mail</b></td><td>$email </td></tr>

                        <tr><td><b>Choose a product</b></td><td>$checkVal </td></tr>

                        <tr><td colspan='2'><b>Message</b></td></tr>

	                    <tr><td colspan='2'>$info</td></tr>

	                    <tr><td><b>IP Address</b></td><td>$serverHost</td></tr>

                    </table>";

        $from = "forms@albertapayments.com";

        $headers = "From: ".$from."\r\n"; 

        $headers .= "CC: ".$cc."\r\n";

        $headers .= "MIME-Version: 1.0\r\n"; 

        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $success = mail($to, $subject, $messagecont, $headers);	

        if($success) {

            // header("Location: thank-you.php");

            echo json_encode(array('success'=>'success'));



        } else {

            header("HTTP/1.0 412 Precondition Failed", true, 412);

            echo json_encode(array('errmsg'=>'Something went wrong happen. Please try again.'));

        }

}



die;



?>