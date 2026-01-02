<?php
     $conn= mysqli_connect("localhost", "root", "", "life_saviour");
     $id=$_GET['id'];
     $q="delete from addstaff where empid='".$id."'";
     mysqli_query($conn,$q);
      echo" <script> alert('record deleted successfully...') </script>";
     echo "<script> window.location.href='addStafftable.php'</script>";
 ?>