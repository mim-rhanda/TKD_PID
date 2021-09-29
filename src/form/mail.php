<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";
mb_language("japanese"); 
mb_internal_encoding("UTF-8"); 

$mail = new PHPMailer(true);
// echo $data;
//Enable SMTP debugging.
// $mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "email-smtp.ap-northeast-1.amazonaws.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "AKIAU2FE7JWN3Z7URD6N";                 
$mail->Password = "BPPwO5u/aSqYgW53g7jpHaNGjoR0srb7Yt+FPcRcmHj3";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;    

$mail->CharSet='UTF-8';
$mail->Encoding='base64';
$mail->isHTML(true);

$mail->From = "no-reply@3hpguardian.com";
$mail->FromName = "メール送信テスト";

$mail->addAddress($_POST['parent_email'], "保護者様");
if (isset($_POST["email"])) {
    $mail->addAddress($_POST['email'], "謝礼用メールアドレス");   
} 

// if($_POST['email'] != " "){
// $mail->addAddress($_POST['email'], "謝礼用メールアドレス");
// }

$mail->Subject = "申し込みありがとうございます。";
$mail->Body = "<i>このたびは、。。。。。をご利用いただき、誠にありがとうございます。</i>";
// $mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    // echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}

require_once "saveinfos.php";