<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
// Instantiation and passing `true` enables exceptions
function sendMail($subject, $message, $to) {
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'ssl://smtp.googlemail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'alberta.paymentstech@gmail.com';                     // SMTP username
        $mail->Password   = 'Alberta123';                               // SMTP password
        $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 465;                                    // TCP port to connect to
    
        //Recipients
        $mail->setFrom('info@albertapayments.com', 'AlbertaPayments');
        $mail->addAddress('info@albertapayments.com', 'Alberta Payment'); 
        $mail->addBcc("alberta.paymentstech@gmail.com");
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->send();
    
        return true;
    
    } catch (Exception $e) {
        return false;
    }
}