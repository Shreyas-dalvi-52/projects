<?php
$name=$_GET['name'];
$mob=$_GET['mob'];

 $conn= mysqli_connect("localhost", "root", "", "LS");
 $q= "update DONATE_BLOOD set DONATION_STATUS='COMPLETED',DATE=now() where NAME='$name' and MOB_NO='$mob'";
  $res= mysqli_query($conn, $q);
  $q= "select * from DONATE_BLOOD where DONATION_STATUS='COMPLETED' and NAME='$name' and MOB_NO='$mob'";
  $res= mysqli_query($conn, $q);
  $row= mysqli_fetch_assoc($res);
  $bg=$row['BLOOD_GROUP'];
   $query= "update STOCK set `$bg`=`$bg`+1";
    $q=mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Certificate</title>
	<style type="text/css">
		body{
			
			background-image: url("https://i.pinimg.com/564x/b4/35/96/b435961299a2f2f23ead45742ca985e0.jpg");
			background-repeat: no-repeat;			
			background-position: center;
			background-attachment: fixed; 
			background-size:contain;
			
		}
		h1{
			margin:0px 0px 50px 630px;
			color: darkred;
			font-size: 60px;
			
		}
		
		
		
		h2{color:navy;
			font-size:30px;
            font-family: Cambria;
			margin-left: 370px;
			
		}
		
		
		h3{
			margin:30px 0px 50px 0px;
			color: Gold;
			font-family:Monotype Corsiva;
			font-size: 40px;
			
		
		}
		p{   
/*			margin: 20px 0px 30px 480px;*/
			color: navy;
			font-family: monotype corsiva;
			font-weight: bold;
			font-size: 27px;
			line-height: 33px;
			margin-left: 330px;
		}
		.box{
			margin-left: 375px;
			margin-top: 0px;
			
		}
		form input{
			border-top: none;
			border-left: none;
			border-right: none;
			border-bottom: 1px solid navy;
			font-family: monotype corsiva;
			font-weight: bold;
			font-size: 27px;
		}
	

		.sign{
			margin-left: 400px;
/*			margin-top: 450px;*/
			height: 100px;
			width: 130px;
		}
		
	</style>
</head>
<body>
	<form method="post">
	<div class="container">
          <h1>Life Saviour </h1>
		
	     <h2>Thank you for<br>donating Blood... </h2>
		
		  
		<center>
		 <h3>Certificate of Donation</h3>
		</center>
		
	    <p>This certificate has been awarded to Mr./Mrs./Miss<br>  <input type="text" name="name" value="<?php echo $row['NAME']?>" style="width: 340px;" readonly ><br> for his/her valantry Blood Donation to our blood centre<br>on   <input type="date" name="date" readonly value="<?php echo $row['DATE']?>" style="width: 340px;"><br>Blood Group   <input type="TEXT" name="bg" readonly value="<?php echo $row['BLOOD_GROUP']?>" style="width: 340px;"><br>you contribution to the noble cause is highly appreciate </p>
		
		<img src="https://png.pngitem.com/pimgs/s/518-5182834_blue-signature-hd-png-download.png" class="sign">
		<div class="box">
		
			<div class="b2">
			         
				    <h4 style="color: navy; font-size: 20px; margin:  90px 0px 0px;"> Authorized Signature</h4>
					<h4 style="color: navy; font-size: 20px; margin: 0px 0px 0px 0px;">Head Of,Life Saviour</h4>
					<h4 style="color: navy; font-size: 20px; margin: 0px 0px 0px 0px;">Ahmednagar-414001</h4>
				
			</div>
			
		</div>
	</div>
</form>
</body>
</html>