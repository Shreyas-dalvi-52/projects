<html>
<head>
	<title>Staff Adding</title>
	</head>
	<style>
body{
  margin-top: 30px;
			background-size:100% 120%;
  background-repeat: no-repeat;
  font-size: 15px;
  color: white;
}
.header{
	color:white;
  width: fit-content;
  margin-left: 20%;
}
.container{
  position:absolute;
  top: 50%;
  left: 50%;
  padding-top: 20px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 20px;
  transform: translate(-50%,-50%);
  max-width: 650px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
  background: #D30000;

  border-radius: 7px;
  text-align:left;
  font-size: 10px;
}
.container form .input-box{
  height: 50px;
  margin: 25px 30px;
}
		input[type=text] 
		{

			    height: 40px;
				  width: 33%;
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
		.s1
		{

			    height: 40px;
				  width: 30%;
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
				input[type=date] {

			  height: 40px;
				  width: 28%;
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
			input[type=number],input[type=tel] {

			  height: 40px;
				  width: 30%;
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
			input[type=email] {

			  height: 40px;
				  width: 33%;
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

			<div class="container" style="font-size: 17px;">
			<div class="header">
				<center>
				<h1><center>New Staff Information</h1>
				Please complete the form below to apply for a position with us .</center>
			</div>
		<br>
		<br>

				&nbsp;&nbsp;<label><b>Full Name</b><font color="red">*</font></label>
				<input type="text" id="fname" name="fname" style="height:40px;" pattern="^(\w\w+)\s(\w+)$" required/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				<label><b>Mobile No</b><font color="red">*</font></label>
				<input type="tel" id="mobileno" name="mobileno" pattern="[0-9]{10}" required/>
				<br><br>

				&nbsp;&nbsp;<label><b>Email</b><font color="red">*</font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="email" id="s_email" name="s_email" required/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label><b>Date Of Birth<b><font color="red">*</font></label>
				<input type="date" id="dob" name="dob" required/>
				<br><br>				
			 
			 &nbsp;<label><b>Designation</b><font color="red">*</font></label>
				<select class="s1" name="designation" id="designation">
				
				<option value ='helper'>Helper</option>
				<option value ='Volunteer'>Volunteer</option></li>
			  </select>
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				<label><b>Joining Date</b><font color="red">*</font></label>&nbsp;
				<input type="date" id="jd" name="jd" required/><br><br><br>

			&nbsp;&nbsp;<label><b>Shift Schedule</b></label><font color="red">*</font><br><br>
				<input type='radio' id='shift1' name='shift' value='day'/><label for ='shift1'>Day Shift(8:00am-8:00pm)</label><br>
				<input type='radio' id='shift2' name='shift' value='night'/><label for ='shift2'>Night Shift(8:00pm-8:00am)</label>

				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;<label><b>Salary</b><font color="red">*</font></label>&nbsp;&nbsp;
				&nbsp;&nbsp;
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
<?php
if(isset($_POST['submit']))
    {
      $a=$_POST["fname"];
      $b=$_POST["mobileno"];
      $c=$_POST["s_email"];
      $d=$_POST["dob"];
      $e=$_POST["designation"];
      $f=$_POST["jd"];
      $g=$_POST["shift"];
      $h=$_POST["salary"];


      $conn=mysqli_connect("localhost","root","","dbs");
      if($conn)
      {
        echo"successful";
      }
      else{
        echo"unsuccessful";
      }
      $sql="insert into staff_man(fname,mobileno,s_email,dob,designation,jd,shift,salary) values('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."')";
      
          mysqli_query($conn,$sql);

    } 
?>
	</body>
</html>