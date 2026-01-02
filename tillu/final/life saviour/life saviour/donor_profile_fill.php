<!DOCTYPE html>
<html>
<head>
 <title>DONOR LOGIN</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <style type="text/css">
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
  overflow: hidden;
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
  height: 700px;
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
   height: 50px;
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
.registration label{
	font-size: 14;
}


  </style>
</head>
<body>
  <form method="post" enctype="multipart/form-data">
  <div class="container">
    
    <div class="registration">
      <header>Complete Profile</header>
        
      <label for="signup_demail_id">Enter Email</label>
        <input type="email" placeholder="eg-abc@xyz.com"name="signup_demail" id="signup_demail_id"required>
        <label for="dob_id">Enter DOB</label>
        <input type="date" placeholder="Create a password"name="dob" id="dob_id" required>
        <label for="DBloodg">Blood Group</label><br>
             <select name="DBloodg" id="DBloodg_id" required>
                <option value="A+"> A+ </option>
                <option value="A-"> A- </option>
                <option value="B+"> B+ </option>
                <option value="B-"> B- </option>
                <option value="O+"> O+ </option>
                <option value="O-"> O- </option>
                <option value="AB+"> AB+ </option>
                <option value="AB-"> AB- </option>
            </select>
            <br><br>
            <LABEL for="img">Upload Profile Picture</label>
  		<input type="file" accept="image/*" name="img" id="img_id">
  		 <LABEL for="img">Upload Aadhar card</label>
  		<input type="file" accept="image/*" name="img1" id="img1_id" required>

        <input type="submit" class="button" value="Submit"name="submit" >
      
 
</div>
  </div>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
  require("connection.php");
	// $conn=mysqli_connect("localhost","root","","LS");
	$aadhar=$_GET['aadhar'];
	$A=$_POST['signup_demail'];
	$B=$_POST['dob'];
	$C=$_POST['DBloodg'];
	$email = filter_var($A, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
	$query= "update DONOR set EMAIL='$A',DOB='$B',BLOOD_GROUP='$C',STATUS='NOT VERIFIED' where AADHAR='$aadhar'";
        $q=mysqli_query($conn,$query);


        if($q){
          echo"<script>alert('Thank you,Admin will verify your account in some time');
          window.location.href='donor.php'</script>";
        }
        else{
        echo"<script>alert('Invalid details');
          window.location.href='donor.php';</script>";
       }
} else {
  echo "<script>alert('email is not a valid email address')</script>;";
    return false;

}
	if(isset($_FILES['img']))
	{
		$image=$_FILES['img']['name'];
		
			$query= "update DONOR set PROFILE_PIC='$image' where AADHAR='$aadhar'";
       		 $q=mysqli_query($conn,$query);
       		 IF($q){
       		 move_uploaded_file($_FILES['img']['tmp_name'],"$image");
       		}
		
	}
	if(isset($_FILES['img1']))
	{
		$image=$_FILES['img1']['name'];
		print_r($image);
			$query= "update DONOR set AADHAR_PIC='$image' where AADHAR='$aadhar'";
       		 $q=mysqli_query($conn,$query);
       		 IF($q){
       		 move_uploaded_file($_FILES['img1']['tmp_name'],"$image");
       		}
		
	}
	
}

?>