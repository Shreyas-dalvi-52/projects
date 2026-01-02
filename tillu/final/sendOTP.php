<?php
session_start();
include "connection.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$email=$_SESSION['email'];
$pass=$_SESSION['pass'];

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
        $mail->Password   = 'oneencamujcanrnz';                               //SMTP password
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
         //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        Return false;
    }
}

$query="select * from ADMIN where EMAIL='$email' and PASSWORD='$pass'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
if($row>0)
{
    $id=$row['ID'];
    $otp=rand(000000,999999);
    $otp=($otp);
    $date=gmdate('Y-m-d',time());
    //echo "$otp";
    if(sendOTP($email,$otp))
    {   date_default_timezone_set('Asia/Kolkata');
        $query="update ADMIN set OTP='$otp' where ID='$id'";
        mysqli_query($conn,$query);
        $query="update ADMIN set TIME=now() where ID='$id'";
        mysqli_query($conn,$query);
        $_SESSION['otp']="sent";
        echo "<script>window.location.href='admin_login.php'</script>";
        // $_SESSION['otp']="sent";
    }
    else{
        
        echo "not sent";
    }
}
else
{
    session_destroy();
    echo "<script>alert('Invalid email or password');window.location.href='admin_login.php'</script>";
}
//echo "$email";
// $otp=random_bytes(6);
// $otp=bin2hex($otp);

?>