


<!DOCTYPE html>
<html>
<head>
 <title>DONOR LOGIN</title>
<!-- <link rel="stylesheet" href="style1.css"> -->
 <style type="text/css">
  	
  	*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background-image: url('bloodadminlogin.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}
.container{
  position: absolute;
  top: 50%;
  left: 65%;
  transform: translate(-50%,-50%);
  max-width: 430px;
  width: 100%;
  background: #fff;
  border-radius: 7px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.3);
  display: grid;
  justify-items: center;
  align-items: center;
  height: 450px;
}
.registration{
	width: 366px;
	
}

.registration header{
  font-size: 2rem;
  font-weight: 500;
  text-align: center;
  margin-bottom: 1.5rem;
}
 .registration input,select{
   height: 60px;
   width: 100%;
   padding: 0 15px;
   font-size: 17px;
   margin-bottom: 1.3rem;
   border: 1px solid #ddd;
   border-radius: 6px;
   outline: none;
 }
 
 .registration input:focus{
   box-shadow: 0 1px 0 rgba(0,0,0,0.2);
 }

.registration input.button{
  color: #bdb8d7;
  background: #343a40;
  font-size: 1.2rem;
  font-weight: 500;
  letter-spacing: 1px;
  margin-top: 1.7rem;
  cursor: pointer;
  transition: 0.4s;
}
.registration input.button:hover{
  background: #594f8d;
  color: #fff;
}
.registration lable{
	font-size: 14;
}


  </style> 
</head>
<body>
  <form method="post" enctype="multipart/form-data">
  <div class="container">
    
    <div class="registration">
      <header>Change Password</header>
        
        
        <input type="password" placeholder="Enter new password"name="pass" id="pass"required>
        <input type="password" placeholder="Re-enter password"name="pass_con" id="pass_con"required>
  		<!-- <input type="file" accept="image/*" name="img" id="img_id"> -->
        <input type="submit" class="button" value="Change password"name="submit" >
      
 
</div>
  </div>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$conn=mysqli_connect("localhost","root","","LS");
	$A=$_POST['pass'];
	$B=$_POST['pass_con'];
  if($A==$B)
  {
	$query="update DONOR set DPASS='$A' where ID='$id'";
  $q=mysqli_query($conn,$query);
  echo"<script>window.location.href='donor_reset_password.php';</script>";

  }
  else{
    echo"<script>alert('Enter passwords correctly');</script>";
    return false;
  }
}

?>