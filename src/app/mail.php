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
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "testmailer49@gmail.com";                 
$mail->Password = "test49007";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;    

$mail->CharSet='UTF-8';
$mail->Encoding='base64';
$mail->isHTML(true);

$mail->From = "testmailer49@gmail.com";
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