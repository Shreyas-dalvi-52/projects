<?php
$conn=mysqli_connect("localhost","root","","LS");
$query1="update camp set STATUS='OVER' WHERE TO_DATE<CURRENT_DATE()";
$q1=mysqli_query($conn,$query1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>LIFE SAVIOUR</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />

	<style>
		div.image{
			width:85%;
      height:500px;
			
      float: right;
      background-image: url(bloodhome1.jpg);
      background-size: 100% 100%;
}
div.process{
			width:85%;
      height:500px;
			margin-top: 50px;
      float: right;
        margin-bottom: 50px;
}
div.process_img{
	width:80%;
	margin-left: 10%;
	margin-top: 50px;
      height:400px;
	 background-image: url(process.png);
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
	.info1{
		margin-left: 15%;
		float: right;
			margin-top: 50px;
			display: flex;
			justify-content: space-evenly;
	}
  .info1_img{
	width:40%;
      height:250px;
			
      float: left;
      background-image: url(info1.jpg);
      background-size: 100% 100%;
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
      margin-top: 50px;
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
  height:2000px;
   float:left;
   position: fixed;
   margin-top: 50px;
}

.wrapper .sidebar{
  width: 100%;
  height: 100%;
  background: 	#343a40;
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
 .info1_txt{
 	width:40% ;
 	 height:250px;
   float: left;
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
        		
			</div>

<div class="wrapper">
    <div class="sidebar">
        
        <ul>
        	  <li  ><a style="text-decoration:none;" id="home" href="home.php"><i class="fa-solid fa-house"></i>&nbsp;Home</a></li>
            <li><a style="text-decoration:none;" id="admin_login" href="admin_login.php"><i class="fa-solid fa-right-to-bracket">&nbsp;</i>Admin Login</a></li>
            <li><a style="text-decoration:none;" id="donor" href="donor.php"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;Donor Login</a></li>
            <li><a style="text-decoration:none;" id="hospital" href="hospital.php"><i class="fa-solid fa-hand-holding-medical"></i>Blood Requisition</a></li>
            <li><a style="text-decoration:none;" href="https://drive.google.com/file/d/1bP9SuazG2-VGyFMR4jv0qQEiHJ8NBuEk/view?usp=drivesdk"><i class="fa-solid fa-download"></i>&nbsp;Requisition form</a></li>
			<li><a style="text-decoration:none;" id="aboutpage"href="running_camps.php"><i class="fa-solid fa-house-medical"></i>&nbsp;Running camps</a></li>
			<li><a style="text-decoration:none;" id="aboutpage"href="cam.php"><i class="fa-solid fa-truck-medical"></i>&nbsp;Organize camps</a></li>
            <li><a style="text-decoration:none;" id="guidlines"href="guidlines.php"><i class="fa-solid fa-circle-question"></i>&nbsp;Guidlines</a></li>
            <li><a style="text-decoration:none;" id="donor_list"href="donor_list.php"><i class="fa-solid fa-list"></i>&nbsp;Donor List</a></li>
            <li><a style="text-decoration:none;" id="aboutpage"href="aboutpage.php"><i class="fa-solid fa-circle-info"></i>&nbsp;About</a></li>
        </ul> 
	</div>
</div>
<!-- <div class="mar">
<marquee scrollamount="15" onmouseover="this.stop()" onmouseout="this.start()"><a href=""><p style="margin-top: 10px; font-size: 30px;">WELCOME</p></a></marquee>
</div> -->
	<div class="image">
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<a href="donor.php">DONATE NOW</a>
	</div>
	<br><br><br><br>
	<div class="info1">
		<div class="info1_img">
			
		</div>
		<div class="info1_txt"><center>
			<b><p style="color:#ee343f;font-family: cursive;font-size: 19px;">Your company can <br>Make a Difference</p></b>
				<br><p style="font-family: cursive;font-size: 14px;">If you donate blood, it will be given to someone who needs it through a transfusion. Transfusions help replace blood that is lost due to surgery or injury. Transfusions also help people with disorders that prevent them from making blood correctly.<br>Safe blood saves lives. Blood is needed by women with complications during pregnancy and childbirth, children with severe anaemia, often resulting from malaria or malnutrition, accident victims and surgical and cancer patients.
			</p>
		</center>
		</div>
	</div>

	<div class="process">
		<h1 style="color:#343a40">DONATION PROCESS</h1><br>
		<div class="process_img"></div>
	</div>
		<div class="slogan">
    <p style="color:white; font-family: Verdana; text-align: center;">
		Donate blood and be the reason for someone's existence</p>
	</div>
	</form>
</body>
</html>