<?php
// error_reporting(0);
// echo "hello";
session_start();
$id=$_GET['id'];
$mail=$_GET['mail'];
include "connection.php";
$query1="select * from DONOR WHERE ID='$id'";
$q1=mysqli_query($conn,$query1);
$row1=mysqli_fetch_assoc($q1);
if(isset($_POST['next1']))
{
  $a=$row1['NAME'];
  $b=$row1['BGROUP'];
  $c=$row1['GENDER'];
  $d=$row1['DOB'];
 
  $e=$_POST["mobno"];
  $f=$_POST["add"];
  $g=$_POST["email"];
  $h=$_POST["history"];
   
  $sql="insert into DONATE_BLOOD(NAME,BLOOD_GROUP,GENDER,DOB,MOB_NO,DISTRICT,EMAIL,HISTORY) values('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."')";
    
  $res= mysqli_query($conn,$sql);
  echo "<script>alert('Form submitted');window.location='user_dash.php'</script>";
 
} 

?>

<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Blood Request </title> 
    
	
<style>
*{
  
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body{

  align-items: center;
  justify-content: center;
  margin-top: 40px;
			background-size:100% 120%;
			}

.wrapper{
  position: relative;
  max-width: 500px;
  width: 100%;
  background: #D30000;
  padding: 20px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 40px;
  border-radius: 12px;
  background: #4070f4;
}
.wrapper form{
  margin-top: 5px;
  
}
.wrapper form .input-box{
  height: 50px;
  margin: 25px 30px;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}

.form header{
font-size:2rem;
font-weight:500;
text-align:center;
margin-bottom:1.5rem;
}

form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #bdb8d7;
  letter-spacing: 1px;
  border: none;
  background: #353a40;
  cursor: pointer;
  margin:25px 0 ;
}
.input-box.button input:hover{
  background: #594f8d;
  color:#fff;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}

form .text h3 a{
  color: #4070f4;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
label
{
  color:white;
}
</style>

   </head>

   <body>

 <center> 
  <div class="wrapper">
  <form method="POST" id="f2">

    <h1 style="color:white; font-style: bold;">DONATE BLOOD</h1> 
    <div class="input-box">
    <label for="mobno">Donor Mobile</label><br>
        <input type="number" maxlength="10" id="mobno" value="<?php echo $row1['MOB']?>" name="mobno" placeholder="Enter Mobile no..." readonly required >
      </div>
      <div class="input-box">
      <label for="email">Donor Email</label><br>
        <input type="email" id="email" name="email" value="<?php echo $mail?>" placeholder="Enter Email..."readonly required >
      </div>         
        <div class="input-box">
          <label for="add">District</label><br>
        <input type="text" id="add" name="add" value="<?php echo $row1['DISTRICT']?>" placeholder="Enter District..."readonly required >
      </div>

      
      <div class="input-box">
      <label for="history">Medical history if any</label><br>
        <input style="height:60px;" type="text"  name="history" id="history" placeholder="Previous Medical History...">

      </div>
       
       <div class="input-box button">
        <input type="submit" style="color:white" value="Submit" id="next1" name="next1" ><br><br>
      </div>
       <div class="input-box button">
        <input type="Button" style="color:white" value="Back" id="back" name="back" onclick="a()">
      </div> 
      
    </form>
  </div>
</center> 
    <script>
    function a()
    {
      window.location.href='donor_requestation.php'
    }

    </script>
  </body>
  </html>
  
  