<?php
include('smtp/PHPMailerAutoload.php');
$mass= 'mass';
$subj = 'sub';
$body='boddy';
echo smtp_mailer('contact@nayesochnayakadam.com',$body,$subj,$mass);
function smtp_mailer($to,$subject, $body,$msg){
 	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "mail.nayesochnayakadam.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "contact@nayesochnayakadam.com";
	$mail->Password = "SINTUsoni@72";
	$mail->SetFrom("contact@nayesochnayakadam.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
header("Location: https://nayesochnayakadam.com/");
 
}
}
?>