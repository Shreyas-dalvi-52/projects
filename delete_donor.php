<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$id=$_GET['id'];
include "connection.php";
$q="delete from DONOR where ID='$id'";
$res=mysqli_query($conn,$q);
$email=$_GET['email'];
$msg="Your account is <b>Deleted</b> by admin,please fill all the details correctly";
send_mail();
function send_mail()
{
    global $conn,$email,$id,$msg,$bg,$bq,$pre_quan;
    // $q="update stock set '$bg'='$pre_quan' where ID='1'";
    // $res=mysqli_query($conn,$q);

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
        $mail->Password   = 'ofsqopvvptollivo';                               //SMTP password
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
        $mail->Subject = 'Account verification';
        $mail->Body    = ''.$msg.'</b>';

        $mail->send();
        echo "<script>window.location.href='newnot_verified_donor.php'</script>";
        
    } catch (Exception $e) {
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        
    }

}


?>