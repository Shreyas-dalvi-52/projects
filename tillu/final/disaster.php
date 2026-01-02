<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Blood Request </title> 
    
	
<style>
*{
  margin: 0px;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{

  align-items: center;
  justify-content: center;
 background-image:url("req4.png");
			background-size:100% 120%;
			}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
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
  width: 28px;
  border-radius: 12px;
  background: #4070f4;
}
.wrapper form{
  margin-top: 5px;
}
.wrapper form .input-box{
  height: 50px;
  margin: 25px 0;
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
label{
color: #bdb8d7;
		          
                 letter-spacing: 1px;
                 border: solid;
				 border-radius:4px;
                 background: #353a40;
                 cursor: pointer; 
                 color:#fff; padding:3px;
}

label:hover{

background-color:#594f8d;
}
</style>



   </head>
<body>

 <center> <div class="wrapper">
 	<form method="POST">
    <h1>Emergency Request</h1>

	<div  style="padding:5px">

    

      <div class="input-box">
		<input  type="text" placeholder="Enter Disaster..."  name="disaster"  id="disaster_id"  required>


      </div>

      <div class="input-box">
	    <input  type="text" name="place" id="place" placeholder="Enter Disater Place..." required >

      </div>
	  	  <div class="input-box">
        <select name="blood" id="blood" style="height: 100%;
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
		<option>A+</option>
		<option>A-</option>
		<option>B+</option>
		<option>B-</option>
		<option>O+</option>
		<option>O-</option>
		<option>AB+</option>
		<option>AB-</option>
		</select>
      </div>
	  <div class="input-box">
        <input type="text" id="quantity" name="quantity" placeholder="Enter Quantity of Blood..." required >
      </div>
      <div class="input-box">
        <input type="email" id="email" name="email" placeholder="Enter Email..." required >
      </div>

      
	    <div class="input-box">
        <input style="height:60px;" type="text"  name="reason" id="reason" placeholder="Enter Reason..." required>

      </div>
      
      <div class="input-box button">
        <input type="Submit" value="Request Now" id="request" name="request">
      </div>
       <div class="input-box button">
        <input type="Submit" value="Home" id="home" name="home" onclick="a()">
      </div>
      
    </form>
  </div></center>
  
 <script>
   function a()
   {
        document.getElementById('disaster_id').removeAttribute('required');
        document.getElementById('place').removeAttribute('required');
        document.getElementById('blood').removeAttribute('required');
        document.getElementById('quantity').removeAttribute('required');
        document.getElementById('reason').removeAttribute('required');
                document.getElementById('email').removeAttribute('required');

   }
 </script>
  </body>
</html>

  <?php
   if(isset($_POST['home'])){

    echo"<script>
    window.location.href='home.php'</script>";
   }

  if(isset($_POST['request']))
	  
	{	 
		
		 $con=mysqli_connect("localhost","root","","LS");
   $a=$_POST["disaster"];
   $b=$_POST["place"];
   $c=$_POST["blood"];
   $d=$_POST["quantity"];
   $e=$_POST["reason"];
   $f=$_POST["email"];
    
	
$q="insert into Disasteremergency (Disaster_name,Disaster_place,Blood_group,Blood_quantity,Date,Reason,Email) values('$a','$b','$c','$d',NOW(),'$e','$f')";
		mysqli_query($con,$q);
}
		
	 ?>
  
  
  
