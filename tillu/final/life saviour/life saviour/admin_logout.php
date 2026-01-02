<?php
error_reporting(0);
session_start();
$conn=mysqli_connect("localhost","root","","LS");
$A=$_SESSION['username'];
$B=$_SESSION['password'];
$query="select ID from  ADMIN where UNAME='$A' and PASS='$B'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($res);
$_SESSION['s_id']=$row['ID'];
$C=$_SESSION['s_id'];

$query= "update ADMIN set LOGOUT_TIME=now(),STATUS='OFFLINE' where ID='$C'";
$q=mysqli_query($conn,$query);
session_destroy();
echo"
    <script>
    alert('You have been logged out');
    window.location.href='admin_login.php';
    </script>
    ";

?>