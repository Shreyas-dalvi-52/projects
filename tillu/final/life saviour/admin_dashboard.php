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
  <script>
    function link(){
    var path = window.location.pathname;
var page = path.split("/").pop();
console.log( page );
var page1=page.split(".").shift();
console.log( page1 );
document.getElementById(page1).style.color="#ee343f";
}
  </script>
</head>
<body onload="link()">
	<form method="post">
		<div class="title">
        		<span style="margin-top: 10px;"><font size="6" style="color:white">LIFE SAVIOUR</font></span>
        		<p align="right" style="float:right; margin-top:15px"><a style="color:white;" href="admin_logout.php">&nbsp;<font size="4">Logout</font>&nbsp;&nbsp;&nbsp;&nbsp;</a>	
			</div>

	
<div class="wrapper">
    <div class="sidebar">
        
        <ul>
        	<li><a style="text-decoration:none;" id="admin_dash_f1" href="admin_dash_f1.php">Home</a></li>
            <li><a style="text-decoration:none;"id="hospital_request_admin1" href="hospital_request_admin1.php" >Blood Requisition<i class="fa-sharp fa-solid fa-bell" style="float:right;color: #ee343f;" id="blood_request_hos_noti"></i></a></li>

            <li><a style="text-decoration:none;" id="donation_request_admin1" href="donation_request_admin1.php" >Donation Requests<i class="fa-sharp fa-solid fa-bell" style="float:right;color: #ee343f;"id="donation_request_noti"></i></a></li>

            <li><a style="text-decoration:none;" id="donor_health_table1" href="donor_health_table1.php">Health checkup<i class="fa-sharp fa-solid fa-bell" style="float:right;color: #ee343f;"id="HEALTH_CHECKUP_noti"></i></a></li>
            <li><a style="text-decoration:none;" id="init_donations" href="init_donations.php">On-going Donations<i class="fa-sharp fa-solid fa-bell" style="float:right;color: #ee343f;"id="On_going_noti"></i></a></li>

            <li><a style="text-decoration:none;" id="addStaff" href="addStaff.php">Add staff</a></li>
            <li><a style="text-decoration:none;" id="manage_staff1" href="manage_staff1.php">Manage staff </a></li>
            <li><a style="text-decoration:none;" id="camp_request_admin1" href="camp_request_admin1.php">Camp Requests<i class="fa-sharp fa-solid fa-bell" style="float:right;color: #ee343f;"id="camp_request_noti"></i></a></li>

            <li><a style="text-decoration:none;" id="not_verified_donor" href="not_verified_donor.php">Not verified Donors<i class="fa-sharp fa-solid fa-bell" style="float:right;color: #ee343f;"id="not_verified_donor_noti"></i></a></li>

  <li><a style="text-decoration:none;" id="stock" href="stock.php">stock</a></li>
  <li><a style="text-decoration:none;"  id="report" href="report.php">Report</a></li>
            </ul> 
	</div>
</div>
<!-- <div class="mar">
<marquee scrollamount="15" onmouseover="this.stop()" onmouseout="this.start()"><a href=""><p style="margin-top: 10px; font-size: 30px;">Welcome</p></a></marquee></div> -->
	

	</form>

</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","LS");

 $query= "select *from DONATE_BLOOD where DONATION_STATUS='UNSEEN'";
  $q=mysqli_query($conn,$query);
  $cnt=mysqli_num_rows($q);
  if($cnt>0)
  {
    echo"<script>document.getElementById('donation_request_noti').style.display='block'</script>";
  }
  $query= "select *from CAMP where STATUS='UNSEEN'";
  $q=mysqli_query($conn,$query);
  $cnt=mysqli_num_rows($q);
  if($cnt>0)
  {
    echo"<script>document.getElementById('camp_request_noti').style.display='block'</script>";
  }


   $query= "select *from hospitalemergency where status='UNSEEN'";
  $q=mysqli_query($conn,$query);
  $cnt=mysqli_num_rows($q);
  if($cnt>0)
  {
    echo"<script>document.getElementById('blood_request_hos_noti').style.display='block'</script>";
  }

  $q= "select * from DONATE_BLOOD where DONATION_STATUS='UNSEEN'";
  $res= mysqli_query($conn, $q);
  $cnt=mysqli_num_rows($res);
  if($cnt>0)
  {
    echo"<script>document.getElementById('HEALTH_CHECKUP_noti').style.display='block'</script>";
  }
 
 // $q= "select * from CAMP where STATUS='UNSEEN'";
 //  $res= mysqli_query($conn, $q);
 //  $cnt=mysqli_num_rows($res);
 //  if($cnt>0)
 //  {
 //    echo"<script>document.getElementById('camp_request_noti').style.display='block'</script>";
 //  }
  $q= "select * from DONATE_BLOOD where DONATION_STATUS='INITIATED'";
  $res= mysqli_query($conn, $q);
  $cnt=mysqli_num_rows($res);
  if($cnt>0)
  {
    echo"<script>document.getElementById('On_going_noti').style.display='block'</script>";
  }

  $q= "select * from DONOR where STATUS='NOT VERIFIED'";
  $res= mysqli_query($conn, $q);
  $cnt=mysqli_num_rows($res);
  if($cnt>0)
  {
    echo"<script>document.getElementById('not_verified_donor_noti').style.display='block'</script>";
  }
?>
