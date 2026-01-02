<?php
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","LS");
$q="update DONATE_BLOOD set STATUS='APPROVED' where ID='$id'";
$res=mysqli_query($conn,$q);
$to_email=$_GET['tomail'];

include('smtp/PHPMailerAutoload.php');
$msg="Your blood donation request is approved .Please come to 'Life Saviour blood donation center' and donate blood.\n \n THANK YOU!!!";
echo smtp_mailer($to_email,'Blood donation',$msg);
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 
	$mail->Username = "dhamanechinmay@gmail.com";
	$mail->Password = "ijfvscgpmwphkzqc";
	$mail->SetFrom("dhamanechinmay@gmail.com");
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
	}
	else{
		echo"<script>alert('request is approved');
		window.location.href='donation_request_admin1.php'</script>";
	}
}

?>