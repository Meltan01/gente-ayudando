<?php
require('phpmailer/class.phpmailer.php');

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "Your SMTP UserName";
$mail->name = "Your SMTP name";
$mail->Host     = "Your SMTP Host";
$mail->Mailer   = "smtp";
$mail->SetFrom($_POST["email"], $_POST["userName"]);
$mail->AddReplyTo($_POST["email"], $_POST["userName"]);
$mail->AddAddress("recipient address");	
$mail->Subject = $_POST["subject"];
$mail->WordWrap   = 80;
$mail->MsgHTML($_POST["content"]);

$mail->IsHTML(true);

if(!$mail->Send()) {
	echo "<p class='error'>Problem in Sending Mail.</p>";
} else {
	echo "<p class='success'>Contact Mail Sent.</p>";
}	
?>