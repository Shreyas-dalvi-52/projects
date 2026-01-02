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
			background-color: red;
			width:1111px;
			margin-left: 200px;
		}
		div.title{
			background-color: red;
			width:100%;
			height:50px;
			text-align: left;
		}
		div.slogan{
			background-color: grey;
			position: absolute;
			width: 100%;
			height:86px;
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
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background: 	#343a40;
  padding: 30px 0px;
  position: fixed;
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
 


	</style>
</head>
<body>
	<form method="post">
		<div class="title">
        		<span style="margin-top: 10px;"><font size="6" style="color:white">LIFE SAVIOUR</font></span>
        		<p align="right" style="float:right; margin-top:15px"><a style="color:white;" href="admin_logout.php">&nbsp;<font size="4">Logout</font>&nbsp;&nbsp;&nbsp;&nbsp;</a>	
        		<!--	<img src="logout.jpg"style="height: 20px; width: 20px;"></img></p>-->
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
	<div class="image">
		<img src="bloodhome.jpg" style="width: 100%; "></img>
	</div>
	<div class="slogan"><p>
		<center><font size="3px" style="color:white; font-family: Verdana;">Donate blood and be the reason for someone's existence<center></p>
	</div>
	</form>
</body>
</html>