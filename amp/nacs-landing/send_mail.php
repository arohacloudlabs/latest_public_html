<?php 
    include '../Mail/index.php';
    $name = $_POST['firstname'];
    $businessname = $_POST['bname'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $products = $_POST['product'];


    $html = '<table style="border:display:none"><tbody>';
    $html .= '<tr><td><strong>Name : </strong></td><td>'.$name.'</td></tr>';
    $html .= '<tr><td><strong>Business Name : </strong></td><td>'.$businessname.'</td></tr>';
    $html .= '<tr><td><strong>Phone No : </strong></td><td>'.$phone.'</td></tr>';
    $html .= '<tr><td><strong>Email : </strong></td><td>'.$email.'</td></tr>';
    $html .= '<tr><td><strong>Products : </strong></td><td>'.implode(',',$products).'</td></tr>';
    $html .= '</tbody></table>';
    $to = 'alberta.paymentstech@gmail.com';
    $mail = sendMail('New Contact',$html,$to);
    if($mail) {
        echo json_encode(array('message'=>'Thank you for contact. We will contact you soon.'));
    } else {
        echo 'Somethig went wrong happen!';
        header('location:index.php');
    }
    
?>