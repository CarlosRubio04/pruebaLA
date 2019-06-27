<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: text/html; charset=utf-8');

$email = $_POST['emailSend'];
$message = $_POST['mensaje'];

$account="senderemailer@gmail.com";
$password="charlie0516*";

$from= "contactolanding@acsendo.com";
$from_name= "Landing Competencias";
$subject= "Nuevo mensaje desde landing Competencias";
$msg="
    <p>Nuevo mensaje de: <b>$email</b></p>
    <p>$message</p>
"; // HTML message

/*End Config*/

include("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->isSendMail();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth= true;
$mail->Port = 587;
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'ssl';
$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress("fmorales@acsendo.com");
if(!$mail->send()){
 echo "Mailer Error: " . $mail->ErrorInfo;
}else{
 echo "Send";
}
?>