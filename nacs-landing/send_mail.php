<?php 

    session_start();

    include '../Mail/index.php';



    $name = $_POST['firstname'];

    $businessname = $_POST['bname'];

    $phone = $_POST['Phone'];

    $email = $_POST['Email'];

    $products = $_POST['product'];



    

    $html = '<table border="1"><tbody>';

    $html .= '<tr><td colspan="2"><strong>Landing Page Enquiry Form</strong></td></tr>';

    $html .= '<tr><td><strong>Name : </strong></td><td>'.$name.'</td></tr>';

    $html .= '<tr><td><strong>Business Name : </strong></td><td>'.$businessname.'</td></tr>';

    $html .= '<tr><td><strong>Phone No : </strong></td><td>'.$phone.'</td></tr>';

    $html .= '<tr><td><strong>Email : </strong></td><td>'.$email.'</td></tr>';

    $html .= '<tr><td><strong>Products : </strong></td><td>'.implode(',',$products).'</td></tr>';

    $html .= '</tbody></table>';

    $to = 'shreyashcoderkube@gmail.com';

    $mail = sendMail('Landing Page Enquiry Form',$html,$to);

    if($mail) {

        $_SESSION['success_message'] = 'Thank you for contacting us. We will connect with you as soon as possible.';

        header('location:../../thank-you.php');

    } else {

        header('location:index.php');

    }



?>