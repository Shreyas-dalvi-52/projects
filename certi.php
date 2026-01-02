<?php
$id=$_GET['id'];

 $conn= mysqli_connect("localhost", "root", "", "CPE");
 $q= "update DONATE_BLOOD set DONATION_STATUS='COMPLETED',DATE=now() where ID='$id'";
  $res= mysqli_query($conn, $q);
  $q= "select * from DONATE_BLOOD where DONATION_STATUS='COMPLETED' and ID='$id'";
  $res= mysqli_query($conn, $q);
  $row= mysqli_fetch_assoc($res);
  $bg=$row['BLOOD_GROUP'];
   $query= "update STOCK set `$bg`=`$bg`+1";
    $q=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.container{
			background-image:url('certificate.png');
			background-size: 100% 100%;
			background-repeat: no-repeat;
			width:100%;
			height:800px;
		} 
		input[type="text"]{
			border-top: none;
			border-left: none;
			border-right: none;
		}
		#name{
			margin-top:25%;
			font-size: 50px;
			text-align: center;
		}
		#date{
			margin-top:120px;
			margin-left:50%;
			font-size: 20px;
			text-align: center;
		}
		#bg{
			margin-top:17px;
			margin-left:37%;
			font-size: 20px;
			width: 50px;
			text-align: center;
		}
		@media print {
#a1
{
	display:none;
}
      /* Show the .container div */
      .container {
        display: block;
      }
    }
	</style>
</head>
<body>
    <div class="container">
	<center>
<input type="text" id="name" name="name" readonly value="<?php echo $row['NAME']?>"></center>
<input type="text" id="date" name="date" readonly value="<?php echo $row['DATE']?>"><br>
<input type="text" id="bg" name="bg" readonly value="<?php echo $row['BLOOD_GROUP']?>">
	</div>
	<center><a class="btn"  id='a1'href="admin_dash.php"><input type="button" value="Back" ></a> </center>
</body>
</html>