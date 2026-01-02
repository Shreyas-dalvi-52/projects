<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","LS");
$q="update hospitalemergency set STATUS='APPROVED' where ID='$id'";
$res=mysqli_query($conn,$q);
$to_email=$_GET['email'];
include('smtp/PHPMailerAutoload.php');

$q="select * from hospitalemergency where ID='$id'";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_assoc($res);
$req_bg=$row['Bloodgroup'];
$quan=$row['BloodQuantity'];

$q1="select * from STOCK";
$res1=mysqli_query($conn,$q1);
$row1=mysqli_fetch_assoc($res1);
echo $req_bg."<br>";
echo $row1['A+'];
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
$result=mysqli_query($conn,$query);
$res=mysqli_query($conn,$q);
$cnt=mysqli_num_rows($res);
if($cnt==1){
	$msg="Your requested blood is available. Please come to life saviour blood donation center and collect blood.";
}
}
else
{
	echo "<script>alert('Blood not available')</script>";
	$msg="Your requested blood is not available";

}

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
		echo"<script>
		window.location.href='hospital_request_admin1.php'</script>";
	}
}
echo smtp_mailer($to_email,'Blood donation',$msg);

?>