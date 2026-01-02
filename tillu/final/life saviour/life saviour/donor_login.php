<?php/*
if(isset($_COOKIE[$uname]))
{
	 echo"<script>alert('Welcome')</script>";
}
if(isset($_POST['login']))
{
	$uname=$_POST['username'];
	$pass=$_POST['password'];
	$conn=mysqli_connect("localhost","root","","LS");
    $query="select *from ADMIN where uname='$uname' and pass='$pass'";
	$res=mysqli_query($conn,$query);
	$cnt=mysqli_num_rows($res);
	if($cnt==1){
  		 echo"<script>alert('Welcome')</script>";
  		 setcookie($uname,$pass,time()+(86400*30),"/");
  		}
 	else{
 		echo"<script>alert('Login unsuccessful');
          window.location.href='donor_login.php';</script>";
		 }
}*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration Form</title>
</head>
<style>
	 body 
{
  font-family:sans-serif; 
  background: white;
  background-image: url('blood_donation_campagin.gif');
}

form{
    width:35rem;
    margin: auto;
    background-color: white;
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
    padding: 20px 25px;

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

</style>
<body>

   <div style="background-color: firebrick;"><h1 style="text-align: center; color: white;">Donor Registration</h1></div>

   <form >
   	  <div class="head1">

   	  <h3>Donor Registration</h3> 
   	  
   	  <p style="font-style: italic; font-size: 12px;">Donating blood is an act of solidarity. Join the effort and save lives.</p>

   	</div>
       <br>
   		<fieldset class="field1">
   			<label for="UName">Name<font color="red">*</font></label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
   			<label for="UGender">Gender<font color="red">*</font></label>
   			<br>
   			<input type="text" name="UName" id="UName" required />
   			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
   			<input type="text" name="UGender" id="UGender" required />
   			<br><br>
   			<label for="UDob">DOB<font color="red">*</font></label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
   			<label for="UMono">Mobile No<font color="red">*</font></label>
   			<br>
   			<input type="date" name="UDob" id="UDob" style="height: 25px; width: 31%;" required />
   			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
   			<input type="number" name="UMono" id="UMono" required />
   			<br><br>
   			<label for="UBloodg">Blood Group<font color="red">*</font></label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
   			<label for="UAddress">Address<font color="red">*</font></label>
   			<br>
   			
            <select name="UBloodg" id="UBloodg" required>
                <option value="A+"> A+ </option>
                <option value="A-"> A- </option>
                <option value="B+"> B+ </option>
                <option value="B-"> B- </option>
                <option value="O+"> O+ </option>
                <option value="O-"> O- </option>
                <option value="AB+"> AB+ </option>
                <option value="AB-"> AB- </option>
            </select>
   			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp;
   			<textarea cols="20" rows="2" type="text" name="UAddress" id="UAddress"></textarea> 
   			<br><br>
            <label for="UDistrict">District<font color="red">*</font></label>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp;
            <label for="UEmail">Email ID<font color="red">*</font> </label>
            <br>
   		    <select name="UDistrict" id="UDistrict" style="height:30px; width: 30%;">
            <option value="-1">Select district</option>
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
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
       <input type="email" name="UEmail" id="UEmail" required style="height:22px; width: 33%;" required />
       <br><br>
       <label for="Tdate">Date<font color="red">*</font></label>
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; 
       <label for="Pdate">Last Blood Donation Date</label>
       <br>
       <input type="date" name="Tdate" id="Tdate" style="height: 25px; width: 31%;"/>
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
       &nbsp; &nbsp; &nbsp;      
       <input type="date" name="Pdate" id="Pdate" style="height: 25px; width: 31%;"/>
       <br><br><br>
       <center><textarea cols="25" rows="3" id="history" name="history" placeholder="Enter the Previous history (if any)"></textarea><br><br>
       <input type="submit" name="login" id="submit" style="font-style:courier; font-size:17px; background-color:coral;" value="Submit" /></center>
   </form>
</fieldset>

</body>
</html>