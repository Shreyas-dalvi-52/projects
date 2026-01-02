<?php
$aad=$_GET['aadhar'];
 $conn= mysqli_connect("localhost", "root", "", "LS");
   $q= "update DONOR set STATUS='VERIFIED' where AADHAR='$aad'";
   $res= mysqli_query($conn, $q);

   $to_email=$_GET['email'];

include('smtp/PHPMailerAutoload.php');
$msg="Your account is verified by admin ,you can login now";
echo smtp_mailer($to_email,'Blood donation',$msg);
function smtp_mailer($to,$subject,$msg){
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
    ECHO"<SCRIPT> window.location.href='not_verified_donor.php'</SCRIPT>";
  }
}

?>