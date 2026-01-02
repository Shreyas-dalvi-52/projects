<?php
$id=$_GET['ID'];
include("connection.php");  
$query="select * from DONATE_BLOOD where ID=$id";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($res); 
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Donor Health </title> 
    
	
<style>
*{
  
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{

  align-items: center;
  justify-content: ce1ter;
  margin-top: 10px;
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
  overflow-x: hidden;
  overflow-y: auto;
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
  margin:10px 0 ;
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
  <div class="wrapper" style="overflow: auto;">
 	<form method="POST">
	

    <h1 style="color:white; font-style: bold;">DONOR HEALTH CHECKUP</h1>          
	   		<div>
     <div class="input-box">
        <input  type="text" readonly name="donor"value="<?php echo $row['NAME']?>" id="donor" placeholder="Enter Donor Name..." required>
      </div>

	  	  <div class="input-box">
        <select name="blood" id="blood" readonly style="height: 100%;
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
		<option value="A+" <?php if($row['BLOOD_GROUP'] == 'A+') {echo 'selected';} ?>>A+</option>
    <option value="A-" <?php if($row['BLOOD_GROUP'] == 'A-') {echo 'selected';} ?>>A-</option>
    <option value="B+" <?php if($row['BLOOD_GROUP'] == 'B+') {echo 'selected';} ?>>B+</option>
    <option value="B-" <?php if($row['BLOOD_GROUP'] == 'B-') {echo 'selected';} ?>>B-</option>
    <option value="O+" <?php if($row['BLOOD_GROUP'] == 'O+') {echo 'selected';} ?>>O+</option>
    <option value="O-" <?php if($row['BLOOD_GROUP'] == 'O-') {echo 'selected';} ?>>O-</option>
    <option value="AB+" <?php if($row['BLOOD_GROUP'] == 'AB+') {echo 'selected';} ?>>AB+</option>
    <option value="AB-" <?php if($row['BLOOD_GROUP'] == 'AB-') {echo 'selected';} ?>>AB-</option>

		</select>
      </div>


            <div>
            <label style="color:white; font-size:20px;">Gender :</label>
    <input type="radio" name="gender" id="gender" value="Male" style="color:white;<?php if($row['GENDER'] != 'Male') {echo 'display:none';} ?>; font-size:20px"
        <?php if($row['GENDER'] == 'Male') {echo 'checked';} ?>>
    <label for="gender" style="color:white;<?php if($row['GENDER'] != 'Male') {echo 'display:none';} ?>; font-size:20px;">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="gender" id="gender1" value="Female" style="color:white;<?php if($row['GENDER'] != 'Female') {echo 'display:none';} ?>; font-size:20px"
        <?php if($row['GENDER'] == 'Female') {echo 'checked';} ?>>
    <label for="gender" style="color:white;<?php if($row['GENDER'] != 'Female') {echo 'display:none';} ?>; font-size:20px;">Female</label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="gender" id="gender2" value="other" style="color:white;<?php if($row['GENDER'] != 'other') {echo 'display:none';} ?>"
        <?php if($row['GENDER'] == 'other') {echo 'checked';} ?>>
    <label for="gender" style="color:white;<?php if($row['GENDER'] != 'other') {echo 'display:none';} ?>; font-size:20px;">Other</label>&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
      <br>

        <div style="color:white; font-size:20px;">
         <label for="disease">If any disease<font color="red"></label>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            <input type='radio' id='Yes' name='disease' value='Yes'>
                <label for='Yes' style=" font-size: 20px; color:white">Yes</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;     
                <input type='radio' id='No' name='disease' value='No'>
                <label for='No' style=" font-size: 20px; color:white;">No</label>
         </div>

              <div class="input-box">
        <input  type="number" name="weight" id="weight" placeholder="Enter Donor Weight..." required>
      </div>

           <div class="input-box">
        <input  type="float" name="hb" id="hb" placeholder="Enter Donor HB..." required>
      </div>

     <div class="input-box">
        <input  type="number" name="mobno" id="mobno" placeholder="Enter Donor Mobile No..." required>
      </div>

           <div class="input-box">
        <input  type="history" name="history" id="history" placeholder="Enter Donor history..." required>
      </div>

      <div class="input-box button">
        <input type="Submit" style="color:white" value="Submit" id="next" name="next"><br><br>
      </div>
       <div class="input-box button">
        <input type="Button" onclick="window.location.href='newdonor_health_table1.php'" style="color:white" value="Back" id="home" name="home">
      </div>
      
    </form>
  </div>
  </body >
  <?php
  //  if(isset($_POST['home']))
  //  {
  //    echo"<script> window.location.href='newdonor_health_table1.php'</script>";  
  //  }

   if(isset($_POST['next']))
     {
        $a=$_POST["donor"];
        $b=$_POST["blood"];
        $c=$_POST["gender"];
        $d=$_POST["disease"];
        $e=$_POST["weight"];
        $f=$_POST["hb"];
        $g=$_POST["mobno"];
        $h=$_POST["history"];
    /*$server="localhost";
    $username="root";
    $password="";
    $db="ams";*/
    if($e>=50 && $f>=13){
       $query= "update DONATE_BLOOD set DONATION_STATUS='INITIATED' where ID='$id'";
       $q=mysqli_query($conn,$query);
    
       $sql="insert into donor_health(NAME,BLOODGROUP,GENDER,DISEASE,WEIGHT,HB,MOBNO,HISTORY) values ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."')";
       // $sql1=" update tables set status='booked' where name='".$a."';";

    $res=mysqli_query($conn,$sql);
      
        if($res)
        {
            echo"<script>alert('data inserted successfully');
            window.location.href='newdonor_health_table1.php'</script>";
        }
        else{
            echo"<script>alert('data not inserted successfully');
            window.location.href='newdonor_health_table1.php'</script>";
        }
    }
    else
    {
      echo"<script>alert('Weight must be greter than 50 and HB must be greater than 13')</script>";
    }
   
   // mysqli_query($conn,$sql1);
   
  }
?>
</html>
  