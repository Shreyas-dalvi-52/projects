<!DOCTYPE html>
<html lang="en">
<head>
  <title>DONOR LOGIN</title>
  <link rel="stylesheet" href="style1.css">
  <style>
     .form input{
   height: 50px;
   width: 100%;
   padding: 0 15px;
   font-size: 17px;
   margin-bottom: 1.3rem;
   border: 1px solid #ddd;
   border-radius: 6px;
   outline: none;
 }
  </style>
</head>
<body>
  <form method="post">
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
        <input type="text" placeholder="Enter your username"name="login_dname" id="login_dname_id" pattern="^(\w\w+)\s(\w+)$"required>
        <input type="password" placeholder="Enter your password" name="login_dpass" id="login_dpass_id" required>
        <input type="submit" class="button" value="Login" name="login" onclick="show_login()"><br>
       
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label><br><br>
         <a href="home.php"style="float: right;">Cancel</a>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Signup</header>
        <input type="text" placeholder="Enter your username"name="signup_dname" id="signup_dname_id" pattern="^(\w\w+)\s(\w+)$"required>
        <input type="number" placeholder="Enter 10 digit mob. no."name="signup_mob" id="signup_mob_id" min="7000000000" max="9999999999" required>
        <input type="number" placeholder="Enter Aadhar card no."name="signup_aadhar" id="signup_aadhar_id" min="000000000000"
        max="999999999999" required>

        <input type="password" placeholder="Create a password"name="signup_dpass" id="signup_dpass_id"required>
        <input type="password" placeholder="Confirm your password"name="signup_dconpass" id="signup_dconpass_id"required onchange ="vali_num();vali_name()">
        <input type="submit" class="button" value="Signup"name="signup" onclick="show_signup()">
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label><br><br>
         <a href="home.php"style="float: right;">Cancel</a>
        </span>
      </div>
    </div>
  </div>
</form>

<script>
  function vali_name()
  {
    var regex= new RegExp(/^[a-zA-Z]+ [a-zA-Z]+$/);
     var name=document.getElementById('signup_dname_id').value;
    if(regex.test(name)==true)
    {
      return true;
    }
    else
    {
      alert('Name is not valid');
      return false;
    }
  }
  function vali_num()
  {
    let regex=new RegExp(/(0|91)?[6-9][0-9]{9}/);
    var mob=document.getElementById('signup_mob_id').value;
    if(regex.test(mob)==true)
    {
      return true;
    }
    else
    {
      alert('Phone number is not valid');
      return false;
    }
  }
  function show_signup()
  {
    document.getElementById('login_dname_id').removeAttribute("required");  
    document.getElementById('login_dpass_id').removeAttribute("required");  
  }
  function show_login()
  {
     document.getElementById('signup_dname_id').removeAttribute("required");  
    document.getElementById('signup_mob_id').removeAttribute("required");  
     document.getElementById('signup_dpass_id').removeAttribute("required");  
    document.getElementById('signup_dconpass_id').removeAttribute("required");  
        document.getElementById('signup_aadhar_id').removeAttribute("required");  

  }
 
  </script>
</body>
</html>


<?php

if(isset($_POST['login']))
{
  session_start();
    $_SESSION['username']=$_POST['login_dname'];
    $_SESSION['password']=$_POST['login_dpass'];
     echo"<script>
          window.location.href='donor_dash.php';</script>";
}

if(isset($_POST['signup']))
{
   $A=$_POST['signup_dname'];
   $B=$_POST['signup_mob'];
   $C=$_POST['signup_dpass'];
   $D=$_POST['signup_dconpass'];
   $E=$_POST['signup_aadhar'];
  //  var regex = /^[789]\d{9}$/;

  // // Remove any whitespace characters from the input
  // var sanitizedNumber = $.replace(/\s/g, '');

  // // Check if the number matches the regex pattern
  // if (regex.test(sanitizedNumber)) {
  //   return true; // Valid mobile number
  // } else {
  //   return false; // Invalid mobile number
  // }
  $conn=mysqli_connect("localhost","root","","LS");

 
  $query= "select *from DONOR where AADHAR='$E' and STATUS='VERIFIED'";
  $q=mysqli_query($conn,$query);
  $cnt=mysqli_num_rows($q);
   if($cnt==0)
   {
    if($C==$D)
    {

        $query= "insert into DONOR (DNAME,D_MOB,DPASS,AADHAR) VALUES('$A','$B','$C','$E')";
        $q=mysqli_query($conn,$query);
        if($q){
          echo"<script>alert('Donor registered');
          window.location.href='donor_profile_fill.php?aadhar=$E'</script>";
        }
        else{
        echo"<script>alert('Invalid details');
          window.location.href='donor.php';</script>";
       }
    }
    else
    {
       echo"<script>alert('Invalid details');
          window.location.href='donor.php';</script>";
    }
  }
  else
  {
     echo"<script>alert('Already registered');
          window.location.href='donor.php';</script>";
  }
}
?>
