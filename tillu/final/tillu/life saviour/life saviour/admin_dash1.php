 <?php
session_start();
$conn=mysqli_connect("localhost","root","","LS");
$A=$_SESSION['username'];
$B=$_SESSION['password'];

$query="select ID from  ADMIN where UNAME='$A' and PASS='$B'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($res);
$_SESSION['s_id']=$row['ID'];
$C=$_SESSION['s_id'];
$ip=$_SERVER['REMOTE_ADDR'];


$query="select *from ADMIN where uname='$A' and pass='$B'";
$res=mysqli_query($conn,$query);
$cnt=mysqli_num_rows($res);
if($cnt==1){
   echo"<script>alert('Welcome')</script>";
    $query= "update ADMIN set LOGIN_TIME=now(),STATUS='ONLINE',IP='$ip' where ID='$C'";
    $q=mysqli_query($conn,$query);
 }
 else{
 	echo"<script>alert('Incorrect username OR password');
          window.location.href='admin_login.php';</script>";
 }

?>



<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<style>
		div.image{
			width:85%;
      height:500px;
			
      float: left;
      background-image: url(bloodhome.jpg);
      background-size: 100% 100%;
}
		div.title{
			background-color: red;
			width:100%;
			height:50px;
			text-align: left;
		}
		.slogan{
			background-color: grey;
			position: relative;
			width: 85%;
			height:86px;
      float: left;
		}
		div.slogan p{
			margin-top: 35px;
		}
		*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  width: 15%;
  height:700px;
   float:left;
}

.wrapper .sidebar{
  width: 100%;
  height: 100%;
  background: 	#343a40;
  padding: 30px 0px;
  float: left;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}


.wrapper .sidebar ul li:hover{
  background-color: #594f8d;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 .mar
 {
  height: 50px;
  width: 85%;
  background-color: white;
  color: red;
  float: left;
 }


	</style>
</head>
<body>
	<form method="post">
		<div class="title">
        		<span style="margin-top: 10px;"><font size="6" style="color:white">LIFE SAVIOUR</font></span>
        		<p align="right" style="float:right; margin-top:15px"><a style="color:white;" href="admin_logout.php">&nbsp;<font size="4">Logout</font>&nbsp;&nbsp;&nbsp;&nbsp;</a>	
			</div>

	
<div class="wrapper">
    <div class="sidebar">
        
        <ul>
        	<li><a style="text-decoration:none;" href="admin_dash.php">Home</a></li>
            <li><a style="text-decoration:none;" href="/admin-donor">Blood Requests</a></li>
            <li><a style="text-decoration:none;" href="/admin-patient">Donor Requests</a></li>
            <li><a style="text-decoration:none;" href="/admin-request">Staff Management</a></li>
            <li><a style="text-decoration:none;" href="/admin-request-history">Camp Requests</a></li>
            <li><a style="text-decoration:none;" href="/admin-request-history">Stock</a></li>
            <li><a style="text-decoration:none;" href="/admin-request-history">Report</a></li>
        </ul> 
	</div>
</div>
<div class="mar">
<marquee scrollamount="15" onmouseover="this.stop()" onmouseout="this.start()"><a href=""><p style="margin-top: 10px; font-size: 30px;">AEwrrdftreasdfgyjtsdfytr</p></a></marquee></div>
	<div class="image">
		</div>

	<div class="slogan">
    <p style="color:white; font-family: Verdana; text-align: center;">
		Donate blood and be the reason for someone's existence</p>
	</div>
	</form>
</body>
</html>