<?php

include('smtp/PHPMailerAutoload.php');



$result = array();


session_start();
$to = trim($_GET['email']);

$msg='Thanks for contacting us';

$otp = rand(1000,9999);

$purpose = trim($_GET['purpose']);

$returnmsg = ''.$otp;

$subject = 'No Reply';

$pro_name=$_SESSION['pr_name'];



switch (strtolower($purpose)){

    case 'reg_verification':

        $subject = 'Verification';

        $msg = $otp.' is your one time password (OTP) for Register To Rolex Engineering';

        $returnmsg = ''.$otp;

        break;

    case 'f_verification':

        $subject = 'Change Password';

        $msg = $otp.' is your one time password (OTP) for Change Your Password To Rolex Engineering';

        $returnmsg = ''.$otp;

        break;

    case 'book':

        $subject = 'Purchase Machine';

        $msg = 'Your Purchse For '.$pro_name. 'Is Done. Our Team Will Process Your Order And Contact Soon';

        $returnmsg = 'Order Booked';;

        break;

    case 'service': 

        $subject = 'Service Acknowledgement';

        $msg = 'Your booking of service car is registered suuccessfully.';

        $returnmsg ='Service Booked';

        break;

    case 'cnewcar':

        $subject = 'Cancel Acknowledgement';

        $msg = 'Your booking of new car has been canceled';

        $returnmsg = 'Booking Canceled';

        break;

    case 'ctestcar':

        $subject = 'Cancel Acknowledgement';

        $msg = 'Your booking of test car has been canceled';

        $returnmsg = 'Booking Canceled';

        break;

    case 'cservice':

        $subject = 'Cancel Acknowledgement';

        $msg = 'Your booking of service car has been canceled';

        $returnmsg = 'Booking Canceled';

        break;

    default:

        

}

smtp_mailer($to,$subject,$msg);

function smtp_mailer($to,$subject, $msg){

	$mail = new PHPMailer(); 

	$mail->SMTPDebug  = 0;

	$mail->IsSMTP(); 

	$mail->SMTPAuth = true; 

	$mail->SMTPSecure = 'tls'; 

	$mail->Host = "smtp.gmail.com";

	$mail->Port = 587; 

	$mail->IsHTML(true);

	$mail->CharSet = 'UTF-8';

	$mail->Username = "projectcsms10@gmail.com";

	// $mail->Password = "Harshshah20";
	$mail->Password = "tohnfzuqtrzijzte";

	$mail->SetFrom("projectcsms10@gmail.com","Rolex Engineering");

	$mail->Subject = $subject;

	$mail->Body =$msg;

	$mail->AddAddress($to);

	$mail->SMTPOptions=array('ssl'=>array(

		'verify_peer'=>false,

		'verify_peer_name'=>false,

		'allow_self_signed'=>false

	));

	if(!$mail->Send()){

		//echo $mail->ErrorInfo;

	}else{
        if($GLOBALS['purpose']==reg_verification){
        session_start();
        $_SESSION["otp"] = $GLOBALS['otp'];
        $_SESSION["purpose"] = $GLOBALS['purpose'];
        header('location:../verifyotp.php');
        }
        elseif($GLOBALS['purpose']==f_verification){
            session_start();
            $_SESSION["otp"] = $GLOBALS['otp'];
            $_SESSION["purpose"] = $GLOBALS['purpose'];
            header('location:../verifyotp.php');
        }
        elseif($GLOBALS['purpose']==book){
            header('location:../products.php');
        }    
	}

}

?>