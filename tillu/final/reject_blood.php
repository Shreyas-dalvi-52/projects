<?php
$id=$_GET['id'];
$bg=$_GET['bg'];
$bg=str_replace("p",'+',$bg);
$bg=str_replace("n",'-',$bg);
$bq=$_GET['bq'];
$conn=mysqli_connect("localhost","root","","LS");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$email=$_GET['email'];
send_mail();
function send_mail()
{
    global $conn,$email,$id;
    $msg="Your blood request is rejected by admin";
    $q="update hospitalemergency set STATUS='REJECTED' where ID='$id'";
    $res=mysqli_query($conn,$q);

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
        $mail->Subject = 'Blood requisition';
        $mail->Body    = ''.$msg.'</b>';

        $mail->send();
        echo "<script>window.location.href='newblood_reqistion.php'</script>";
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        
    }

}


?>