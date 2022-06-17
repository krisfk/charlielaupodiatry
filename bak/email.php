<?php
require_once('phpmailer/class.phpmailer.php');
include("phpmailer/class.smtp.php");

$message = "名稱:".$_POST["your-name"]."<br/>電話:".$_POST["your-telephone"]."<br/>電郵:".$_POST["your-email"]."<br/>留言:".$_POST["your-message"];

$mail = new PHPMailer();
$mail->CharSet = 'utf-8';


/*
$mail->IsSMTP();
$mail->Host       = "mail.turbocredithk.com"; // SMTP server
$mail->SMTPDebug = false;                   // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "sampublicmailer@gmail.com";  // GMAIL username
$mail->Password   = "P@ssw0rd!123";            // GMAIL password

$mail->SetFrom("no_reply@turbocredithk.com", $_POST["name_cn"]);
$mail->AddReplyTo("no_reply@turbocredithk.com", $_POST["name_cn"]);
$mail->AddAddress("bowaifinance2014@yahoo.com","bowaifinance2014@yahoo.com");
$mail->Subject = "Enquiry from the website";
$mail->MsgHTML($message);
*/

$mail->isMail(); // telling the class to use SendMail transport
$mail->SetFrom("no_reply@charlielaupodiatry.com", 'webmaster');
$mail->AddReplyTo("no_reply@charlielaupodiatry.com", 'webmaster');
$mail->AddAddress("charlielausiuki@gmail.com","charlielausiuki@gmail.com");
$mail->Subject = "Enquiry from the website";
$mail->MsgHTML($message);


$mail->IsHTML(true);

if(!$mail->Send()) {
	echo "<span style='color: red !important; font-weight: bolder; display:inline !important;'>發生錯誤，請聯絡網頁管理員。</span>";
} else {
	echo "<span style='color: green !important; font-weight: bolder; display:inline !important;'>你的訊息經已成功送出！</span>";
}	
?>