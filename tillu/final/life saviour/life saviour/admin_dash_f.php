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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />

	<style>
div.image{
      width:85%;
      height:570px;
      
      float: right;
      background-image: url(bloodhome1.jpg);
      background-size: 100% 100%;
}
  div.image a
  {
    margin-top: 350px;
    height: 75px;
    width: 150px;
    color: #ee343f;
    font-size: 30px;
    text-shadow: -1px 1px 8px #ee343f,1px -1px 8px #ee343f;
  }
div.title{
      background-color: #ee343f;
      width:100%;
      height:50px;
      text-align: left;
      position: fixed;
    }
    .slogan{
      background-color: grey;
      position: relative;
      width: 85%;
      height:86px;
      float: right;
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
  height:885px;
   float:left;
   position: fixed;
   margin-top: 50px;
}

.wrapper .sidebar{
  width: 100%;
  height: 100%;
  background:   #343a40;
  padding: 30px 0px;
  float: left;
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
/* .mar
 {
  height: 50px;
  width: 85%;
  background-color: white;
  color: #ee343f;
  float: right;
  margin-left: 15%;
 }*/
.fa-sharp{
  display: none;
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
        	<li><a style="text-decoration:none;" href="admin_dash_f.php">Home</a></li>
            <li><a style="text-decoration:none;" href="hospital_request_admin.php">Blood Requests    (Hospital)<i class="fa-sharp fa-solid fa-bell" style="float:right;color: #ee343f;" id="blood_request_hos_noti"></i></a></li>
             <li><a style="text-decoration:none;" href="disaster_request_admin.php">Blood Requests    (Disaster)<i class="fa-sharp fa-solid fa-bell" style="float:right;color: #ee343f;" id="blood_request_dis_noti"></i></a></li>

            <li><a style="text-decoration:none;" href="donation_request_admin.php">Donation Requests<i class="fa-sharp fa-solid fa-bell" style="float:right;color: #ee343f;"id="donation_request_noti"></i></a></li>

            <li><a style="text-decoration:none;" href="donor_health_table.php">Health checkup<i class="fa-sharp fa-solid fa-bell" style="float:right;color: #ee343f;"id="HEALTH_CHECKUP_noti"></i></a></li>

            <li><a style="text-decoration:none;" href="addStaff.php">Add staff</a></li>
            <li><a style="text-decoration:none;" href="manage_staff.php">Manage staff </a></li>
           

            <li><a style="text-decoration:none;" href="/admin-request-history">Stock<i class="fa-sharp fa-solid fa-bell" style="float:right;color: #ee343f;"id="stock_noti"></i></a></li>

            <li><a style="text-decoration:none;" href="/admin-request-history">Report</a></li>
        </ul> 
	</div>
</div>
<!-- <div class="mar">
<marquee scrollamount="15" onmouseover="this.stop()" onmouseout="this.start()"><a href=""><p style="margin-top: 10px; font-size: 30px;">Welcome</p></a></marquee></div> -->
	<div class="image">
		</div>

  <div class="info1">
    
  </div>
	<div class="slogan">
    <p style="color:white; font-family: Verdana; text-align: center;">
		Donate blood and be the reason for someone's existence</p>
	</div>
	</form>

</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","LS");

 $query= "select *from DONATE_BLOOD where STATUS='UNSEEN'";
  $q=mysqli_query($conn,$query);
  $cnt=mysqli_num_rows($q);
  if($cnt>0)
  {
    echo"<script>document.getElementById('donation_request_noti').style.display='block'</script>";
  }

   $query= "select *from hospitalemergency where status='UNSEEN'";
  $q=mysqli_query($conn,$query);
  $cnt=mysqli_num_rows($q);
  if($cnt>0)
  {
    echo"<script>document.getElementById('blood_request_hos_noti').style.display='block'</script>";
  }


    $query= "select *from disasteremergency where status='UNSEEN'";
  $q=mysqli_query($conn,$query);
  $cnt=mysqli_num_rows($q);
  if($cnt>0)
  {
    echo"<script>document.getElementById('blood_request_dis_noti').style.display='block'</script>";
  }
  $q= "select * from DONATE_BLOOD where DONATION_STATUS='UNSEEN'";
  $res= mysqli_query($conn, $q);
  $cnt=mysqli_num_rows($res);
  if($cnt>0)
  {
    echo"<script>document.getElementById('HEALTH_CHECKUP_noti').style.display='block'</script>";
  }
?>
