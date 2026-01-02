<html>
<head>
	<title>Staff Adding</title>
	</head>
	<style>
body{
  
 
  background-image: url('emergency1.jpg');
  background-repeat: no-repeat;
  background-size: 100% 100%;
  font-size: 15px;
}
.header{
	background-color:firebrick;
	color:white;
  width: 100%;
}
.container{
  position:absolute;
  top: 55%;
  left: 50%;
  padding-top: 20px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 20px;
  transform: translate(-50%,-50%);
  max-width: 650px;
  width: 100%;
  background:transparent;
  border-radius: 7px;
  text-align:left;
  font-size: 10px;
}
		input[type=text] {
					height:20px;
			  width:30%;
				height:40px;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid black;
			  box-sizing: border-box;
			  font-size: 15px;
			  background-color:whitesmoke;
			}
				input[type=date] {
					
					height:20px;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid black;
			  box-sizing: border-box;
			  font-size: 15px;
			  background-color:whitesmoke;
			}
			input[type=number],input[type=tel] {
				width:30%;
			  	height:20px;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid black;
			  box-sizing: border-box;
			  font-size: 15px;
			  background-color:whitesmoke;
			}
			input[type=email] {
				width:30%;
			  	height:20px;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid black;
			  box-sizing: border-box;
			  font-size: 15px;
			  background-color:whitesmoke;
			}
			input[type=submit] {
			  width:15%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid black;
			  box-sizing: border-box;
			  font-size: 15px;
			  background-color: green;
			  color:white;
			}
			}
body input[type="text"],input[type="number"],input[type="date"],input[type="tel"],select:focus{
   outline: none;
}
body input[type="submit"]{
   background-color:  #343a40;
  color: #bdb8d7;
border-radius: 12px;
}
    
 form input[type="submit"]:hover {
  color: #fff;
background-color: #594f8d;
}
	</style>
	<body>
		<form method="POST">
			<div class="header">

				<center>
				<h1><center>New Staff Information</h1>
				Please complete the form below to apply for a position with us .</center>
			</div>
		<br>
		<br>

			<div class="container" style="font-size: 17px;">

				&nbsp;&nbsp;<label>Full Name<font color="red">*</font></label>
				<input type="text" id="name" name="name" style="height:20px;" pattern="^(\w\w+)\s(\w+)$" required/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				<label>Mobile No<font color="red">*</font></label>
				<input type="tel" id="mobileno" name="mobileno" pattern="[0-9]{10}" required/>
				<br><br>

				&nbsp;&nbsp;<label>Email<font color="red">*</font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="email" id="email" name="email" required/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label>Date Of Birth<font color="red">*</font></label>
				<input type="date" id="dob" name="dob" required/>
				<br><br>				
			 
			 &nbsp;&nbsp;<label>Designation<font color="red">*</font></label>
				<select style="width: 20%; height:40px; border: 1px solid black; background-color:whitesmoke" name="designation" id="designation">
				
				<option value ='helper'>Helper</option>
				<option value ='Volunteer'>Volunteer</option></li>
			  </select>
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;


				<label>Joining Date<font color="red">*</font></label>
				<input type="date" id="jd" name="jd" required/><br><br>

			&nbsp;&nbsp;<label>Shift Schedule</label><font color="red">*</font><br><br>
				<input type='radio' id='shift1' name='shift' value='day'/><label for ='shift1'>Day Shift(8:00am-8:00pm)</label><br>
				<input type='radio' id='shift2' name='shift' value='night'/><label for ='shift2'>Night Shift(8:00pm-8:00am)</label>

			

				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;

				&nbsp;&nbsp;&nbsp;&nbsp;<label>Salary<font color="red">*</font></label>
				<input type="number" id="salary" name="salary"  pattern="[0-9]"required/><br><br>

			
				<center>
		    <input type="submit" id="submit" name="submit" value="SUBMIT">
		    <input type="submit" name="back" id="back" class="btn"  value="BACK"  onclick="a()" /></center>
				</center>

			</div>
		</center>
		</form>
		<script>
    function a()
    {
      document.getElementById('name').removeAttribute("required");  
      document.getElementById('mobileno').removeAttribute("required");  
      document.getElementById('jd').removeAttribute("required");  
      document.getElementById('dob').removeAttribute("required");  
      document.getElementById('salary').removeAttribute("required");  
       document.getElementById('email').removeAttribute("required");  

    }
</script>
	</body>
	<?php
	if(isset($_POST['back']))
{
    echo"<script>window.location.href='admin_dash_f1.php'</script>";
}
	  if(isset($_POST['submit']))
	  {
	  	$a=$_POST["name"];
	  	$b=$_POST["mobileno"];
	  	$c=$_POST["email"];
	  	$d=$_POST["dob"];
	  	$f=$_POST["jd"];
	  	$g=$_POST["designation"];
	  	$h=$_POST["salary"];
	  	$i=$_POST["shift"];
	  	$email = filter_var($c, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
	if (filter_var($h, FILTER_VALIDATE_INT)!== false) {

	$conn=mysqli_connect("localhost","root","","LS");

	  	 $query= "select *from addstaff where name='$a'";
 			 $q=mysqli_query($conn,$query);
  		$cnt=mysqli_num_rows($q);
    if($cnt==0){
	  	
	  	$sql="insert into addstaff(NAME,MOB_NO,EMAIL,DOB,JOINDATE,DESIGNATION,SHIFT,SALARY) values('".$a."','".$b."','".$c."','".$d."','".$f."','".$g."','".$i."','".$h."')";
      
       $q=mysqli_query($conn,$sql);
   	if($q)
	  	{
	  		echo"<script>alert('Staff added successfully');
	  		window.location.href='admin_dash_f1.php'</script>";
	  	}
	  	else{
	  		echo"<script>alert('Staff not added successfully');
	  		window.location.href='addStaff.php'</script>";
	  	}
	  } 
	  else{
	  	echo"<script>alert('Staff already added');
	  		window.location.href='admin_dash_f1.php'</script>";
	  }
 }
 else {
    echo"<script>alert('Salary is not Integer')</script>";
} 
} 
else {
  echo "<script>alert('email is not a valid email address')</script>;";
    return false;

}
	  		  	
	}
	?>
</html>