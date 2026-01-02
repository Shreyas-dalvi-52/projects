<!DOCTYPE html>
<html lang="en">
<head>
  <title>DONOR LOGIN</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <form method="post">
  <div class="container">
    <input type="radio" id="radio_signup" class="radio_signup"name="radio" style="display: none;">
    <input type="radio" id="radio_login" class="radio_login" name="radio" style="display: none;">
    <input type="radio" id="radio_reset" class="radio_reset" name="radio" style="display: none;">

    <div class="login form">
      <header>Login</header>
        <input type="text" placeholder="Enter your username"name="login_dname" id="login_dname_id" pattern="^(\w\w+)\s(\w+)$"required>
        <input type="password" placeholder="Enter your password" name="login_dpass" id="login_dpass_id" required>
        <div class="signup" style="margin-top: 0px ;">
        <span class="signup" style="float:left">
         <label for="radio_reset">Forget password?</label><br><br>
        </span>
      </div>
        <input type="submit" class="button" value="Login" name="login" onclick="show_login()">
        
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="radio_signup">Signup</label><br><br>
                  <a href="home.php"style="float: right;">Cancel</a>

        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Signup</header>
        <input type="text" placeholder="Enter your username"name="signup_dname" id="signup_dname_id" pattern="^(\w\w+)\s(\w+)$"required>
        <input type="tel" placeholder="Enter 10 digit mob. no."name="signup_mob" id="signup_mob_id" pattern="[0-9]{10}" required>
        <input type="password" placeholder="Create a password"name="signup_dpass" id="signup_dpass_id"required>
        <input type="password" placeholder="Confirm your password"name="signup_dconpass" id="signup_dconpass_id"required pattern="[^\s]{8}">
        <input type="submit" class="button" value="Signup"name="signup" onclick="show_signup();vali_num();vali_name()">
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="radio_login">Login</label><br><br>
         <a href="home.php"style="float: right;">Cancel</a>
        </span>
      </div>
    </div>
    <div class="reset form">
      <header>Reset Password</header>
        <input type="text" placeholder="Enter your username"name="reset_dname" id="reset_dname_id" pattern="^(\w\w+)\s(\w+)$"required>
        <input type="email" placeholder="Enter your Email" name="reset_email" id="reset_email_id" required>
        <input type="submit" class="button" value="Change password" name="change_password" onclick="show_reset()">
        
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="radio_signup">Signup</label><br><br>
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
    document.getElementById('reset_dname_id').removeAttribute("required");  
    document.getElementById('reset_email_id').removeAttribute("required");  
  
  }
  function show_login()
  {
     document.getElementById('signup_dname_id').removeAttribute("required");  
    document.getElementById('signup_mob_id').removeAttribute("required");  
     document.getElementById('signup_dpass_id').removeAttribute("required");  
    document.getElementById('signup_dconpass_id').removeAttribute("required");  
     document.getElementById('reset_dname_id').removeAttribute("required");  
    document.getElementById('reset_email_id').removeAttribute("required");  

  }
  function show_reset()
  {
     document.getElementById('login_dname_id').removeAttribute("required");  
    document.getElementById('login_dpass_id').removeAttribute("required");  
     document.getElementById('signup_dname_id').removeAttribute("required");  
    document.getElementById('signup_mob_id').removeAttribute("required");  
     document.getElementById('signup_dpass_id').removeAttribute("required");  
    document.getElementById('signup_dconpass_id').removeAttribute("required");  

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
 
  $query= "select *from DONOR where DNAME='$A' OR D_MOB='$B' OR DPASS='$C'";
  $q=mysqli_query($conn,$query);
  $cnt=mysqli_num_rows($q);
   if($cnt==0)
   {
    if($C==$D)
    {

        $query= "insert into DONOR (DNAME,D_MOB,DPASS) VALUES('$A','$B','$C')";
        $q=mysqli_query($conn,$query);
        if($q){
          echo"<script>alert('Donor registered');
          window.location.href='donor_profile_fill.php?name=$A'</script>";
        }
        else{
        echo"<script>alert('Invalid details');
          window.location.href='donor_reset_password.php';</script>";
       }
    }
  }
  else
  {
     echo"<script>alert('Invalid details');
          window.location.href='donor_reset_password.php';</script>";
  }
}

if(isset($_POST['change_password']))
{

  $A=$_POST['reset_dname'];
  $B=$_POST['reset_email'];
    $conn=mysqli_connect("localhost","root","","LS");

   $query= "select *from DONOR where DNAME='$A' and EMAIL='$B'";
  $q=mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($q);
  $cnt=mysqli_num_rows($q);
  if($cnt==0)
  {
     echo"<script>alert('Invalid Username or Email');
          window.location.href='donor_reset_password.php';</script>";
  }
  else{
  $to_email=$B;

include('smtp/PHPMailerAutoload.php');
$msg1=rand(0000,9999);
$msg=$msg1;
  function smtp_mailer($to,$subject,$msg){
   $mail = new PHPMailer(); 
    $mail->IsSMTP(); 
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; 
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    //$mail->SMTPDebug = 2; 
    $mail->Username = "dhamanechinmay@gmail.com";
    $mail->Password = "ijfvscgpmwphkzqc";
    $mail->SetFrom("dhamanechinmay@gmail.com");
    $mail->Subject = $subject;
    $mail->Body =$msg;
    $mail->AddAddress($to);
    $mail->SMTPOptions=array('ssl'=>array(
     'verify_peer'=>false,
     'verify_peer_name'=>false,
     'allow_self_signed'=>false
     ));
    if(!$mail->Send()){
        echo $mail->ErrorInfo;
    }
  }
  echo smtp_mailer($to_email,'LIFE SAVIOUR',$msg);
  echo"<script>var OTP=prompt('Enter OTP')</script>";
    $OTP1="<script> document.write(OTP)</script>";
  //echo $OTP1;
 // echo $msg1;
   $id= $row['ID'];
   echo $id;
  if($msg1==$OTP1)
 {
    echo "<script>window.location.href='change_password.php?id=$id';</script>";
 }
  //else
 // {
    //echo "ygweuchciuewhyewgdji";
  //}
}
}
?>
