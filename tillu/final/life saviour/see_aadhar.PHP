<?php
include "admin_dashboard.php";
?>

<!DOCTYPE html>
<html>
<head>
  <style>
    div.image input
    {
      width: 8%;
      margin-left: 200px;
      background:   #343a40;
      color: #bdb8d7;
    }
   div.image input:hover
    {
     
        background-color: #594f8d;
        color: #fff;
    }
  </style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div class="image"style="overflow: scroll;">
<?php
$aad=$_GET['aadhar'];
$EMAIL=$_GET['email'];

 $conn= mysqli_connect("localhost", "root", "", "LS");
   $q= "select * from DONOR where AADHAR='$aad'";
   $res= mysqli_query($conn, $q);
   $row= mysqli_fetch_assoc($res);
   ?>
   <IMG SRC="<?php echo $row['AADHAR_PIC']?>" style="height: 500px; width: 70%;margin-left: 15%;"><br><br>
   <input type="button" id="back" name="back" value="BACK" style="height: 45px;"onclick="backfun()">
    <input type="button" id="approve" name="approve" value="VERIFY" style="height: 45px;"onclick="app()">
   <input type="button" id="reject" name="reject" value="DELETE" style="height: 45px;"onclick="rej()">

 </div>
 <div class="slogan">
    <p style="color:white; font-family: Verdana; text-align: center;">
        Donate blood and be the reason for someone's existence</p>
    </div>
 <script>
   function backfun()
   {
    window.location.href="not_verified_donor.php";
   }
     function app()
   {
    window.location.href="verify_donor.php?aadhar=<?php echo $aad ?>&email=<?php echo $EMAIL ?>";
   }
   function rej()
   {
    window.location.href="delete_donor.php?aadhar=<?php echo $aad ?>&email=<?php echo $EMAIL ?>";
   }
 </script>
</body>
</html>
