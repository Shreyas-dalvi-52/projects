<?php
session_start();
$id=$_GET['id'];
$mail=$_GET['mail'];
$conn=mysqli_connect("localhost","root","","CPE");
$query="select timestampdiff(year,DOB,CURDATE()) AS age from DONOR WHERE ID='$id'";
$q=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($q);
//echo $row['age'];
$query1="select timestampdiff(day,DATE,CURDATE()) AS period from DONATE_BLOOD WHERE EMAIL='$mail'";
$q1=mysqli_query($conn,$query1);
$cnt=mysqli_num_rows($q1);
$row1=mysqli_fetch_assoc($q1);

if($row['age']>=18 && $row['age']<60)
{
    if($cnt==1){
    if($row1['period']>56)
    {

    }
    else
    {
        $rem=56-$row1['period'];
              echo"<script>
           alert(' you can donate after $rem days');
           window.location.href='user_dash.php'
        </script>";
    }
}
}
else
{
    echo"<script>alert('Your age must between 18 to 60 years for donation');
    window.location.href='user_dash.php';</script>";
}


$query1="select * from DONOR WHERE ID='$id'";
$q1=mysqli_query($conn,$query1);
$row1=mysqli_fetch_assoc($q1);
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Blood Request </title> 
    
	
<style>
  label
  {
    color:white;
  }
*{
  
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{

  align-items: center;
  justify-content: center;
  margin-top: 70px;
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

</style>

   </head>
<body>

 <center> 
  <div class="wrapper">
 	<form method="POST" id="f1"action="donor_requistition2.php?id=<?php echo $id?>&mail=<?php echo $mail?>">
	
    
    <h1 style="color:white; font-style: bold;:">DONATE BLOOD</h1>          
	   		<div>
     <div class="input-box">
      <label for="donor">Donor Name</label><br>
        <input  type="text" name="donor" id="donor" value="<?php echo $row1['NAME']?>"placeholder="Enter Donor Name..." Readonly required>
      </div>
       <div class="input-box">
       <label for="DOB">Donor DOB</label><br>
        <input type="text" id="DOB" name="DOB" value="<?php echo $row1['DOB']?>" placeholder="Enter Date of birth..." Readonly required >
      </div>
	  	  <div class="input-box">
        <label for="blood">Donor Blood grp</label><br>
        <input type="text" id="blood" value="<?php echo $row1['BGROUP']?>" name="blood" Readonly required >

        <!-- <select name="blood" id="blood" style="height: 100%;
                 width: 100%;
                 outline: none;
                 padding: 0 15px;
                 font-size: 17px;
                 font-weight: 400;
                 color: #333;
                 border: 1.5px solid #C7BEBE;
                 border-bottom-width: 2.5px;
                 border-radius: 6px;
                 transition: all 0.3s ease;">
		<option value="A+">A+</option>
		<option value="A-">A-</option>
		<option value="B+">B+</option>
		<option value="B-">B-</option>
		<option value="O+">O+</option>
		<option value="O-">O-</option>
		<option value="AB+">AB+</option>
		<option value="AB-">AB-</option>
		</select> -->
      </div>
      <div>
         <?php
        $gender=$row1['GENDER'];
         ?>
         <div class="input-box">
        <label >Gender </label>
        <input type="text" readonly  id="gender" name="gender" value="<?php echo $gender?>" />
      </div>
  
      <div class="input-box button">
        <input type="submit" style="color:white" value="Next" id="next" name="next" onclick="next1()"><br><br>
      </div>
       <div class="input-box button">
        <input type="Button" style="color:white" value="Back" id="home" name="home" onclick="a()">
      </div>
      
    </form>
  </div>
  <script>
    

   // window.location.href="camp_org_final2.php";
  
    function a()
    {
      window.location.href="user_dash.php"
  }

 </script>
  
  </body >
</html>
  