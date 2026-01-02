<?php
session_start();
$name=$_SESSION['username'];
$conn=mysqli_connect("localhost","root","","LS");
$query="select timestampdiff(year,DOB,CURDATE()) AS age from DONOR WHERE DNAME='$name'";
$q=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($q);
//echo $row['age'];
$query1="select timestampdiff(day,DATE,CURDATE()) AS period from DONATE_BLOOD WHERE NAME='$name'";
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
           window.location.href='donor_dash.php'
        </script>";
    }
}
}
else
{
    echo"<script>alert('Your age must between 18 to 60 years for donation');
    window.location.href='donor_dash.php';</script>";
}


$query1="select * from DONOR WHERE DNAME='$name'";
$q1=mysqli_query($conn,$query1);
$row1=mysqli_fetch_assoc($q1);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Donation Form</title>
</head>
<style>
	 body 
{
  font-family:sans-serif; 
  background: white;
  background-image: url('blood_donation_campagin.gif');
}
.container
{
    display: flex;
    justify-content: space-around;
}
form{
    width:35rem;
    margin: auto;
    background-color: white;
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
    padding: 20px 25px;

}
.container input[type="text"],input[type="number"],input[type="date"],input[type="email"],select,textarea{
    width:150px;
}
.head1
{
    background:url("Rakt5.png") no-repeat right top;
    margin-right: 20px;
    background-color: white; 
    color: firebrick;
    border-radius: 12px;
    height: 80px;
    border-bottom-style: solid;
}
.field1
{
	padding-top: 15px;
	border-radius: 12px;
}
form .submit1:hover{
  background: #594f8d;
  color: #fff;
}
</style>
<body>

   <div style="background-color: firebrick;"><h1 style="text-align: center; color: white;">Donate Blood</h1></div>

   <form method="post">
   	  <div class="head1">

   	  <h3>Donate Blood</h3> 
   	  
   	  <p style="font-style: italic; font-size: 12px;">Donating blood is an act of solidarity. Join the effort and save lives.</p>

   	</div>
       <br>
   		<fieldset class="field1">
            <div class="container">
            <div class="div1">
   			<label for="UName">Name<font color="red">*</font></label><br>
            <input type="text" name="UName" id="UName" required pattern="[A-Za-z]"placeholder="eg-Chinmay Dhamane" readonly/>
<br><br>
            <label for="UDob">DOB<font color="red">*</font></label><br>
            <input type="date" name="UDob" id="UDob"  required readonly/><br><br>
   			
            <label for="UBloodg">Blood Group<font color="red">*</font></label><br>
            <INPUT TYPE="text" id="UBloodg" name="UBloodg"readonly>
             <!-- <select name="UBloodg" id="UBloodg" required>
                <option value="A+"> A+ </option>
                <option value="A-"> A- </option>
                <option value="B+"> B+ </option>
                <option value="B-"> B- </option>
                <option value="O+"> O+ </option>
                <option value="O-"> O- </option>
                <option value="AB+"> AB+ </option>
                <option value="AB-"> AB- </option>
            </select> -->
<br><br>
  
           <label for="UGender">Gender<font color="red">*</font></label>
            <br>
            <input type="radio" name="UGender" id="UGender_male" value="Male" required style="margin: 0px;" /><lable for="UGender_male">Male</lable>
             <input type="radio" name="UGender" id="UGender_female" value="Female" required /><lable for="UGender_female">Female</lable>

   </div>


<div class="div2">
   
             <label for="UDistrict">District<font color="red">*</font></label><br>
            <select name="UDistrict" id="UDistrict" >
            <option value="Ahmednagar">Ahmednagar</option>
            <option value="Akola">Akola</option>
            <option value="Pune">Pune</option>
            <option value="Sangli">Sangli</option>
            <option value="Solapur">Solapur</option>
            <option value="Amravati">Amravati</option>
            <option value="Buldhana">Buldhana</option>
            <option value="Yavatmal">Yavatmal</option>
            <option value="Washim">Washim</option>
            <option value="Aurangabad">Aurangabad</option>
            <option value="Beed">Beed</option>
            <option value="Jalna">Jalna</option>
            <option value="Dharashiv">Dharashiv</option>
            <option value="Nanded">Nanded</option>
            <option value="Latur">Latur</option>
            <option value="Parbhani">Parbhani</option>
            <option value="Hingoli">Hingoli</option>
            <option value="Gondia">Gondia</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Wardha">Wardha</option>
            <option value="Dhule">Dhule</option>
            <option value="Jalgaon">Jalgaon</option>
            <option value="Nandurbar">Nandurbar</option>
            <option value="Nashik">Nashik</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Thane">Thane</option>
            <option value="Palghar">Palghar</option>
            <option value="Ratnagiri">Ratnagiri</option>
            <option value="Sindhudurg">Sindhudurg</option>
            <option value="Satara">Satara</option>
            <option value="Kolhapur">Kolhapur</option> 
        </select>
                  
<br><br>
            <label for="UMono">Mobile No<font color="red">*</font></label>
            <br>
            <input type="number" name="UMono" id="UMono"  pattern="[0-9]{10}" placeholder="eg-1234567890"required readonly/>
            <br><br>

            <label for="UAddress">Address<font color="red">*</font></label>
            <br>
            <textarea cols="20" rows="2" type="text" name="UAddress" id="UAddress"></textarea> 
            <br><br>
           
                     
                     
              
            <label for="UEmail">Email ID<font color="red">*</font> </label>
            <br>
       <input type="email" name="UEmail" id="UEmail" required  readonly />
       <br><br>

     
       
</div>
</div>
   <div class="history">
       <center><textarea cols="25" rows="3" id="history" name="history" placeholder="Enter the Previous history (if any)"></textarea><br><br>
      </center>


   </div>
    <center> <input type="submit" name="submit" id="submit"class="submit1" style="font-size:17px; background-color:#343a40;color:#bdb8d7" value="Submit" />
        <input type="button" name="back" id="back"class="submit1" style="font-size:17px; background-color:#343a40;color:#bdb8d7" value="Back" onclick="window.location.href='donor_dash.php'" /></center>
  
</fieldset>
 </form>
 <script>
    var name="<?php echo $name?>";
    var dob="<?php echo $row1['DOB']?>";
    var blood="<?php echo $row1['BLOOD_GROUP']?>";
     var mob="<?php echo $row1['D_MOB']?>";
    var email="<?php echo $row1['EMAIL']?>";
    document.getElementById('UName').value=name;
    document.getElementById('UDob').value=dob;
    document.getElementById('UBloodg').value=blood;
     document.getElementById('UMono').value=mob;
    document.getElementById('UEmail').value=email;
 </script>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","LS");
if(isset($_POST['submit']))
{
  $A=$_POST['UName'];
  $B=$_POST['UDob'];
  $C=$_POST['UBloodg'];
  $D=$_POST['UGender'];
  $E=$_POST['UDistrict'];
  $F=$_POST['UAddress'];
  $G=$_POST['UMono'];
  $H=$_POST['UEmail'];
  $K=$_POST['history'];
  $query= "select *from DONATE_BLOOD where NAME='$A' OR MOB_NO='$B'";
  $q=mysqli_query($conn,$query);
  $cnt=mysqli_num_rows($q);
    if($cnt==0)
    {
         $query= "insert into DONATE_BLOOD (NAME,DOB,BLOOD_GROUP,GENDER,DISTRICT,ADDRESS,MOB_NO,EMAIL,HISTORY) VALUES('$A','$B','$C','$D','$E','$F','$G','$H','$K')";
          $q=mysqli_query($conn,$query);
          echo"<script>alert('You have applied for blood donation');
               window.location.href='donor_dash.php';</script>";
    }
    else
    {
     echo"<script>alert('Invalid details');
          window.location.href='userRegister.php';</script>";
    }
 }
//}
?>
