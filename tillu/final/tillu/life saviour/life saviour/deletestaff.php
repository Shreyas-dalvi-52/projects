<?php
     $conn= mysqli_connect("localhost", "root", "", "LS");
     $id=$_GET['id'];
     $q="delete from addstaff where ID='".$id."'";
     mysqli_query($conn,$q);
      echo" <script> alert('record deleted successfully...') </script>";
     echo "<script> window.location.href='manage_staff1.php'</script>";
 ?>