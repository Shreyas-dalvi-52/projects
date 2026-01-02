<html>
<head>
	<title>camp Organization</title>
	</head>
	<style>
body{
  min-height: 100vh;
  width: 90%;
background-image: url('backCamp.jpg');
  background-repeat: no-repeat;
  background-size: 100% 100%;
  font-size: 15px;
}
.header{
		background-color:firebrick;
	color:white;
  width: 1500px;
  padding-bottom: 5px;
}
.container{
  position:absolute;
  top: 50%;
  left: 55%;
  padding-top: 20px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 20px;
  transform: translate(-50%,-50%);
  max-width: 650px;
  width: 90%;
  background: #fff;
  border-radius: 7px;
  text-align:left;
  font-size: 10px;
}
		input[type=text] {
					height:20px;
			  width:25%;
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
			input[type=number] {
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
				width:25%;
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
	</style>
	<body>
		<form method="POST">
			<div class="header">

				<center>

				<h1><center><img src="bloodDonationCamp.webp" height="30" width="30" style="padding-top: 7px;">&nbsp;&nbsp;Camp Organization Form</h1>
				Please complete the form below to apply for Camp Organization Service.
			</center>
			</div>
			<br><br><br>

			
		<br>
		<br>

			<div class="container" style="font-size: 17px;">

				<label>Name<font color="red">*</font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" id="name" name="name" style="height:20px;" required/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				<label>Mobile No<font color="red">*</font></label>
				<input type="number" id="mobileno" name="mobileno" required/>
				<br><br>

				<label>Email<font color="red">*</font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="email" id="email" name="email" required/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				<label>Reason</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" id="reason" name="reason" style="height:20px;" required/>
				<br><br>

				<label>Place<font color="red">*</font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" id="place" name="place" style="height:20px;" required/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				<label>Needed Blood Group<font color="red">*</font></label>
				<select style="width: 20%; height:40px; border: 1px solid black; background-color:whitesmoke" name="bd" id="bd">
				<option value ='bloodgroup'>Blood group</option>
				<option value ='A+'>A+</option>
				<option value ='A-'>A-</option>
				<option value ='B+'>B+</option>
				<option value ='B-'>B-</option>
				<option value ='AB+'>AB+</option>
				<option value ='AB-'>AB-</option>
				<option value ='O+'>O+</option>
				<option value ='O-'>O-</option>
				<option value ='All'>All</option>
			  </select>
				<br><br>

				<label>Quantity<font color="red">*</font></label>
				<input type="number" id="quantity" name="quantity" style="height:20px;" required/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				<label> Date</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="date" id="date" name="date" />
				<br><br>
				<br>

				<center>
		    <input type="submit" id="submit" name="submit" value="SUBMIT">
				</center>

			</center>
			</div>
		</center>
		</form>
	</body>
	<?php
	  if(isset($_POST['submit']))
	  {
	  	$a=$_POST["name"];
	  	$b=$_POST["mobileno"];
	  	$c=$_POST["email"];
	  	$d=$_POST["reason"];
	  	$e=$_POST["place"];
	  	$f=$_POST["bd"];
	  	$g=$_POST["quantity"];
	  	$h=$_POST["date"];

	  	$conn=mysqli_connect("localhost","root","","life_saviour");
	  	if($conn)
	  	{
	  		echo"successful";
	  	}
	  	else{
	  		echo"unsuccessful";
	  	}
	  	$sql="insert into camporg(name,mobileno,email,reason,place,bloodgroup,quantity,date) values('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."')";
      
          mysqli_query($conn,$sql);

	  } 
	?>
</html>


