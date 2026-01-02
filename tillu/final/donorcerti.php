<?php
$name=$_GET['name'];
$mob=$_GET['mob'];
$conn=mysqli_connect("localhost","root","","LS");
$query= "update DONATE_BLOOD set DONATION_STATUS='COMPLETED' where NAME='$name' and MOB_NO='$mob'";
$q=mysqli_query($conn,$query);
echo "<script>window.location.href='init_donations.php'</script>";
?>