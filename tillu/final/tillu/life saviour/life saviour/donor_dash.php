<?php
session_start();

$conn=mysqli_connect("localhost","root","","LS");
$A=$_SESSION['username'];
$B=$_SESSION['password'];
$query="select ID from  DONOR where DNAME='$A' and DPASS='$B'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($res);
$_SESSION['s_id']=$row['ID'];
$C=$_SESSION['s_id'];

$ip=$_SERVER['REMOTE_ADDR'];
$query="select *from DONOR where DNAME='$A' and DPASS='$B' and STATUS='VERIFIED'";
$res=mysqli_query($conn,$query);
$cnt=mysqli_num_rows($res);
if($cnt==1){
    $query= "update DONOR set LOGIN_TIME=now(),STATUS_ONOFF='ONLINE',IP='$ip' where ID='$C'";
    $q=mysqli_query($conn,$query);
 }
 else{
   echo"<script>alert('Invalid details');
          window.location.href='donor.php';</script>";
 }



?>

<!DOCTYPE html>
<html>
<head>
   <title>DONOR</title>
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
  height:100%;
   float:left;
   position: fixed;
   margin-top: 50px;
}

.wrapper .sidebar{
  width: 100%;
  height: 100%;
  background:  #343a40;
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
            <p align="right" style="float:right; margin-top:15px"><a style="color:white;" href="donor_logout.php">&nbsp;<font size="4">Logout</font>&nbsp;&nbsp;&nbsp;&nbsp;</a> 
            <!--  <img src="logout.jpg"style="height: 20px; width: 20px;"></img></p>-->
         </div>
      

<div class="wrapper">
    <div class="sidebar">
         <?php
            // $conn=mysqli_connect("localhost","root","","LS");
            // $query="select *from DONOR";
            // $q=mysqli_query($conn,$query);
        ?> 
        <ul>
         <li><a style="text-decoration:none;" id="donor_dash"href="donor_dash.php">Home</a></li>
            <li><a style="text-decoration:none;" href="donor_profile1.php?name=<?php echo $A;?>">Profile</a></li>
            <li><a style="text-decoration:none;" href="userRegister.php">Donate blood</a></li>
            <li><a style="text-decoration:none;" id="donation_history" href="donation_history.php">Donation History</a></li>
        </ul> 

   </div>
</div>
   <div class="image">
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <a href="userRegister.php">DONATE NOW</a>
   </div>
   <div class="slogan"><p>
      <center><font size="3px" style="color:white; font-family: Verdana;">Donate blood and be the reason for someone's existence<center></p>
   </div>

   </form>
</body>
</html>

