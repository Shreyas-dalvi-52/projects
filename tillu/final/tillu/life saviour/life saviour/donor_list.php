<!DOCTYPE html>
<html>
<head>
	<title>LIFE SAVIOUR</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />

	<style>
		div.image{
			width:85%;
      height:570px;
			
      float: right;
}
table{
					margin-top: 100px;
			}
 				th{
                background-color:  #ee343f;
                color:white;
               }
             td{
                width: 120px;
               }
            tr{
                background-color: #FFB6C1;
                height: 30px;
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
            <li><a style="text-decoration:none;" href="https://drive.google.com/file/d/1aQvOLtQK7IpWlNZWq-eqg1aVENWedIOm/view?usp=drivesdk"><i class="fa-solid fa-download"></i>&nbsp;Requisition form</a></li>
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
	<div class="image" style="overflow: scroll;">
 		<center>
           <table border 1px >
<TH>SR NO.</TH>
<TH>NAME</TH>
<TH>DOB</TH>
<TH>GENDER</TH>
<TH>BLOOD G</TH>
<TH>MOB NO.</TH>

 
 <?php
    $conn= mysqli_connect("localhost", "root", "", "LS");
  $q="select * from DONATE_BLOOD where DONATION_STATUS='COMPLETED'";
  $res=mysqli_query($conn,$q);//res is array
  
  $sr=1;
while($row=mysqli_fetch_assoc($res))
 {
     
?>
<tr>
<td  style="width: 60px;text-align: center"><?php echo $sr++;?></td>
<td><?php echo $row["NAME"];?></td>
<td><?php echo $row["DOB"];?></td>
<td><?php echo $row["GENDER"];?></td>
<td><?php echo $row["BLOOD_GROUP"];?></td>
<td><?php echo $row["MOB_NO"];?></td>
</tr>

<?php
}
?>
 
 
</table>
        </center>
 	</div>
	
		<div class="slogan">
    <p style="color:white; font-family: Verdana; text-align: center;">
		Donate blood and be the reason for someone's existence</p>
	</div>
	</form>
</body>
</html>