<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once "vendor/autoload.php";

$mail = new PHPMailer;
// $mail->SMTPDebug = 4; // set 2 for less info value from 1 to 4 Use it when mail is not sent.
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "";  
$mail->Password = "";   
$mail->Port = 587;  
$mail->SMTPSecure = 'tls';

$mail->setFrom("admin@saiworlempire.com", "<no-reply>");
$mail->addAddress("shreeradheoffice@gmail.com");
// $mail->addCC("someone@gmail.com", "Someone CC");

$mail->Subject = "Enquiry From Sai World Empire Website";

$mail->isHTML(true);

$mail->Body = "<h2> Name: ".$_POST["name"]."</h2><br><h2> Phone: ".$_POST["phone"]."</h2><br><h2> Email: ".$_POST["email"]."</h2>";

if($mail->send()){
    echo "Message sent successfully!";
    header("Location: index.php");
	exit();
}
else{
    echo "Message was not sent!<br>";
    echo "Mail Error : " .$mail->ErrorInfo;
}
?>
