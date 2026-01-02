<?php
error_reporting(0);
require("connection.php");
$id=$_GET['id'];
$sql="delete FROM STAFF_MAN where ID='$id'";
$res=mysqli_query($conn,$sql);
// $row=mysqli_fetch_assoc($res);
echo "<script>alert('Staff deleted');window.location.href='newmange_staff1.php'</script> ";
?>