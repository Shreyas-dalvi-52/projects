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
<div class="image" style="overflow: scroll;">
<?php
$ID=$_GET['id'];
$EMAIL=$_GET['email'];
 $conn= mysqli_connect("localhost", "root", "", "LS");
   $q= "select * from hospitalemergency where ID='$ID'";
   $res= mysqli_query($conn, $q);
   $row= mysqli_fetch_assoc($res);
   ?>
   <IMG SRC="<?php echo $row['Requisition']?>" style="height: 500px; width: 70%;margin-left: 15%;margin-top: 50px;"><br><br>
   <input type="submit" id="back" name="back" value="BACK" style="height: 45px;"onclick="backfun()">
    <input type="button" id="approve" name="approve" value="APPROVE" style="height: 45px;"onclick="app()">
   <input type="button" id="reject" name="reject" value="REJECT" style="height: 45px;"onclick="rej()">

 </div>
 <div class="slogan">
    <p style="color:white; font-family: Verdana; text-align: center;">
        Donate blood and be the reason for someone's existence</p>
    </div>
  <script>
   function backfun()
   {
    window.location.href="hospital_request_admin1.php";
   }
    function app()
   {
    window.location.href="approve_hospital_request.php?id=<?php echo $ID ?>&email=<?php echo $EMAIL ?>";
   }
   function rej()
   {
    window.location.href="reject_hospital_request.php?id=<?php echo $ID ?>&email=<?php echo $EMAIL ?>";
   }
 </script>
</body>
</html>
