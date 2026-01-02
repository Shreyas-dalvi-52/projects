<?php

session_start();
$A=$_SESSION['username'];
$B=$_SESSION['password'];
$conn=mysqli_connect("localhost","root","","LS");

$query="select * from  ADMIN where UNAME='$A' and PASS='$B'";
$res=mysqli_query($conn,$query);

$cnt=mysqli_num_rows($res);
if($cnt==0)
{
     echo"<script>alert('login failed')
    window.location.href='admin_login.php'</script>";
    
}
else
{
   echo"<script>alert('login successful')</script>";
}

include "admin_dashboard.php";

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<style>
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
 	</style>
 </head>
 <body>
<div class="image" style="background-image: url('bloodhome1.jpg');background-size: 100% 100%;">
 
    </div>
        <div class="slogan">
    <p style="color:white; font-family: Verdana; text-align: center;">
        Donate blood and be the reason for someone's existence</p>
    </div>
 </body>
 </html>