<?php
session_start();
include "connection.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// echo "<script>var email=prompt('Enter Email')</script>";
// $email="<script>document.write(email);</script>";
// echo $email;

// $query="select * from DONOR where EMAIL='$email'";
// echo $query;
$email=$_POST['email'];
$query="select * from DONOR where EMAIL='$email'";
$result=mysqli_query($conn,$query);
// var_dump($result);
$row=mysqli_fetch_assoc($result);
// var_dump($row);
if($row>0)
{
    $id=$row['ID'];
    $otp=rand(000000,999999);
    $otp=($otp);
    if(sendOTP($email,$otp))
    {
        $query="update DONOR set PASSWORD='$otp' where ID='$id'";
		$result=mysqli_query($conn,$query);
        echo"<script>alert('New password sent to registered Email');
        window.location.href='user_login.php';</script>";	
    }
    else
    {
        echo"<script>alert('Server down');
          window.location.href='user_login.php';</script>";	
    }
}
else
{
    echo"<script>alert('Email not registered');
          </script>";
}

function sendOTP($email,$otp)
{
    require ("PHPMailer\Exception.php");
    require ("PHPMailer\SMTP.php");
    require ("PHPMailer\PHPMailer.php");
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {                    
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'dhamanechinmay@gmail.com';                     //SMTP username
        $mail->Password   = 'ijfvscgpmwphkzqc';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('dhamanechinmay@gmail.com', 'Life saviour');
        $mail->addAddress($email);               //Name is optional
       
    
        //Attachments
       // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Life Saviour OTP';
        $mail->Body    = 'Your OTP :<b>'.$otp.'</b>';

        $mail->send();
        // echo "sent";
        Return true;
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        Return false;
    }
}
?>
