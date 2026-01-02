<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","CPE");
$q="update hospitalemergency set STATUS='APPROVED' where ID='$id'";
$res=mysqli_query($conn,$q);
$email=$_GET['email'];

$req_bg=$_GET['bg'];
$req_bg=str_replace('p','+',$req_bg);
$req_bg=str_replace('n','-',$req_bg);
$quan=$_GET['bq'];

$q1="select * from STOCK";
$res1=mysqli_query($conn,$q1);
$row1=mysqli_fetch_assoc($res1);

switch($req_bg)
{
	case "A+":
	  if($row1['A+']>=$quan)
	  {
	  	$avail_bg="A+";
		$q="select * from `STOCK` where `A+`>='$quan'";
	    $query="update STOCK set `A+`=`A+`-$quan";
	  }
	  elseif($row1['A-']>=$quan)
	  {
	  	$avail_bg="A-";
		$q="select * from `STOCK` where `A-`>='$quan'";
		$query="update STOCK set `A-`=`A-`-$quan";
	  }
	   elseif($row1['O-']>=$quan)
	  {
	  	$avail_bg="O-";
		$q="select * from `STOCK` where `O-`>='$quan'";
		$query="update STOCK set `O-`=`O-`-$quan";
	  }
	   elseif($row1['O+']>=$quan)
	  {
	  	$avail_bg="O+";
		$q="select * from `STOCK` where `O+`>='$quan'";
		$query="update STOCK set `O+`=`O+`-$quan";
	  }
		break;
	case "A-":
	if($row1['A-']>=$quan)
	  {
	  	$avail_bg="A-";
		$q="select * from `STOCK` where `A-`>='$quan'";
		$query="update STOCK set `A-`=`A-`-$quan";
	  }
	  elseif($row1['O-']>=$quan)
	  {
	  	$avail_bg="O-";
		$q="select * from `STOCK` where `O-`>='$quan'";
		$query="update STOCK set `O-`=`O-`-$quan";
	  }
		break;


	case "B+":
      if($row1['B+']>=$quan)
	  {
	  	$avail_bg="B+";
		$q="select * from `STOCK` where `B+`>='$quan'";
		$query="update STOCK set `B+`=`B+`-$quan";
	  }
	  elseif($row1['B-']>=$quan)
	  {
	  	$avail_bg="B-";
		$q="select * from `STOCK` where `B-`>='$quan'";
		$query="update STOCK set `B-`=`B-`-$quan";
	  }
	   elseif($row1['O-']>=$quan)
	  {
	  	$avail_bg="O-";
		$q="select * from `STOCK` where `O-`>='$quan'";
		$query="update STOCK set `O-`=`O-`-$quan";
	  }
	   elseif($row1['O+']>=$quan)
	  {
	  	$avail_bg="O+";
		$q="select * from `STOCK` where `O+`>='$quan'";
		$query="update STOCK set `O+`=`O+`-$quan";
	  }		
	  break;


	case "B-":
	  if($row1['B-']>=$quan)
	  {
	  	$avail_bg="B-";
		$q="select * from `STOCK` where `B-`>='$quan'";
		$query="update STOCK set `B-`=`B-`-$quan";
	  }
	   elseif($row1['O-']>=$quan)
	  {
	  	$avail_bg="O-";
		$q="select * from `STOCK` where `O-`>='$quan'";
		$query="update STOCK set `O-`=`O-`-$quan";
	  }
		break;

	case "AB+":
       if($row1['O-']>=$quan)
	  {
	  	$avail_bg="O-";
		$q="select * from `STOCK` where `O-`>='$quan'";
		$query="update STOCK set `O-`=`O-`-$quan";
	  }
	   elseif($row1['O+']>=$quan)
	  {
	  	$avail_bg="O+";
		$q="select * from `STOCK` where `O+`>='$quan'";
		$query="update STOCK set `O+`=`O+`-$quan";
	  }	
	  elseif($row1['B+']>=$quan)
	  {
	  	$avail_bg="B+";
		$q="select * from `STOCK` where `B+`>='$quan'";
		$query="update STOCK set `B+`=`B+`-$quan";
	  }
	  elseif($row1['B-']>=$quan)
	  {
	  	$avail_bg="B-";
		$q="select * from `STOCK` where `B-`>='$quan'";
		$query="update STOCK set `B-`=`B-`-$quan";
	  }	
	  elseif($row1['A+']>=$quan)
	  {
	  	$avail_bg="A+";
		$q="select * from `STOCK` where `A+`>='$quan'";
	    $query="update STOCK set `A+`=`A+`-$quan";
	  }
	  elseif($row1['A-']>=$quan)
	  {
	  	$avail_bg="A-";
		$q="select * from `STOCK` where `A-`>='$quan'";
		$query="update STOCK set `A-`=`A-`-$quan";
	  }
	  if($row1['AB+']>=$quan)
	  {
	  	$avail_bg="AB+";
		$q="select * from `STOCK` where `AB+`>='$quan'";
	    $query="update STOCK set `AB+`=`AB+`-$quan";
	  }
	  elseif($row1['AB-']>=$quan)
	  {
	  	$avail_bg="AB-";
		$q="select * from `STOCK` where `AB-`>='$quan'";
		$query="update STOCK set `AB-`=`AB-`-$quan";
	  }
	  break;

	case "AB-":
	if($row1['B-']>=$quan)
	  {
	  	$avail_bg="B-";
		$q="select * from `STOCK` where `B-`>='$quan'";
		$query="update STOCK set `B-`=`B-`-$quan";
	  }
	   elseif($row1['O-']>=$quan)
	  {
	  	$avail_bg="O-";
		$q="select * from `STOCK` where `O-`>='$quan'";
		$query="update STOCK set `O-`=`O-`-$quan";
	  }
	   elseif($row1['AB-']>=$quan)
	  {
	  	$avail_bg="AB-";
		$q="select * from `STOCK` where `AB-`>='$quan'";
		$query="update STOCK set `AB-`=`AB-`-$quan";
	  }
	  elseif($row1['A-']>=$quan)
	  {
	  	$avail_bg="A-";
		$q="select * from `STOCK` where `A-`>='$quan'";
		$query="update STOCK set `A-`=`A-`-$quan";
	  }
		break;

	case "O+":
      if($row1['O-']>=$quan)
	  {
	  	$avail_bg="O-";
		$q="select * from `STOCK` where `O-`>='$quan'";
		$query="update STOCK set `O-`=`O-`-$quan";
	  }
	   elseif($row1['O+']>=$quan)
	  {
	  	$avail_bg="O+";
		$q="select * from `STOCK` where `O+`>='$quan'";
		$query="update STOCK set `O+`=`O+`-$quan";
	  }		
	  break;

	case "O-":
      if($row1['O-']>=$quan)
	  {
	  	$avail_bg="O-";
		$q="select * from `STOCK` where `O-`>='$quan'";
		$query="update STOCK set `O-`=`O-`-$quan";
	  }
	break;

}
if($query)
{

$res=mysqli_query($conn,$q);
$cnt=mysqli_num_rows($res);
if($cnt>0){
    $result=mysqli_query($conn,$query);
	$msg="Your requested blood is available. please collect blood from Blood donation center ";
    send_mail();
}
}
else
{
	// echo "<script>alert('Blood not available')</script>";
	$msg="Your requested blood is not available";
    send_mail();

}

function send_mail()
{
    global $conn,$email,$id,$msg,$bg,$bq,$pre_quan;
    $q="update hospitalemergency set STATUS='APPROVED' where ID='$id'";
    $res=mysqli_query($conn,$q);
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
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        
    }

}


?>