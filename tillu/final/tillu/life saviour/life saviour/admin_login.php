<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN LOGIN</title>
  <link rel="stylesheet" href="style1.css" >
</head>
<body>
  <form method="post" >
  <div class="container">
   
    <div class="login form">
      <header>Login</header>
        <input type="text" placeholder="Enter your username"name="login_uname" id="login_uname_id" pattern="^(\w\w+)\s(\w+)$"required>
        <input type="password" placeholder="Enter your password" name="login_pass" id="login_pass_id"required>
        <input type="submit" class="button" value="Login" name="login">
        <!-- <input type="submit" class="button" value="Cancel" name="cancel"  onclick="show_login()" style="margin: 0px;"> -->

      <div class="signup">
        <br>
         <a href="home.php"style="float: right;">Cancel</a>
        </span>
      </div>
    </div>
    
  </div>
</form>
<script>
  function show_signup()
  {
    document.getElementById('login_uname_id').removeAttribute("required");  
    document.getElementById('login_pass_id').removeAttribute("required");  
  }
  function show_login()
  {
     document.getElementById('signup_uname_id').removeAttribute("required");  
    document.getElementById('signup_mob_id').removeAttribute("required");  
     document.getElementById('signup_pass_id').removeAttribute("required");  
    document.getElementById('signup_conpass_id').removeAttribute("required");  
  }
  </script>
</body>
</html>


<?php
$conn=mysqli_connect("localhost","root","","LS");
if(isset($_POST['login']))
{
  session_start();
    $_SESSION['username']=$_POST['login_uname'];
    $_SESSION['password']=$_POST['login_pass'];
     echo"<script>
          window.location.href='admin_dash_f1.php';</script>";
}

if(isset($_POST['signup1']))
{

  $A=$_POST['signup_uname'];
  $B=$_POST['signup_mob'];
  $C=$_POST['signup_pass'];
  $D=$_POST['signup_conpass'];
  $query= "select *from ADMIN where UNAME='$A' OR MOB='$B' OR PASS='$C'";
  $q=mysqli_query($conn,$query);
  $cnt=mysqli_num_rows($q);
    if($cnt==0)
    {
       if($C==$D)
        {
         $query= "insert into ADMIN (UNAME,MOB,PASS) VALUES('$A','$B','$C')";
          $q=mysqli_query($conn,$query);
          echo"<script>alert('Admin registered');
               window.location.href='admin_login.php';</script>";
        }
    }
    else
    {
     echo"<script>alert('Invalid details');
          window.location.href='admin_login.php';</script>";
    }
 }
?>
