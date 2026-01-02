<!DOCTYPE html>
<html >
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
<body onload="al()">

 <center> 
  <div class="wrapper">
 	<form method="POST" enctype="multipart/form-data">
	

    <h1>Emergency Request</h1>          
	   		<div>
     <div class="input-box">
        <input  type="text" name="patient" id="patient" placeholder="Enter Patient Name..." required>
      </div>

      <div class="input-box">
        <input type="text" name="hospital" id="hospital"placeholder="Enter Hospital Name..." name="hospital" required >

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
		<option value="A+">A+</option>
		<option value="A-">A-</option>
		<option value="B+">B+</option>
		<option value="B-">B-</option>
		<option value="O+">O+</option>
		<option value="O-">O-</option>
		<option value="AB+">AB+</option>
		<option value="AB-">AB-</option>
		</select>
      </div>
	  <div class="input-box">
        <input type="number" id="quantity" name="quantity" placeholder="Enter Quantity of Blood..."required >
      </div>
 <div class="input-box">
        <input type="email" id="email" name="email" placeholder="Enter Email..." required >
      </div>

      
	    <div class="input-box">
        <input style="height:60px;" type="text"  name="reason" id="reason" placeholder="Enter Reason..." required onchange="vali_name();">

      </div>
       <div class="input-box">
      <label for="img_id" style="font-size: 18px;text-align: left;">Requisition form</label>
       <input type="file" accept="image/*" name="img" id="img_id" required >
      </div>
      
      <div class="input-box button">
        <input type="Submit" value="Request Now" id="request" name="request"><br><br>
      </div>
       <div class="input-box button">
        <input type="Submit" value="Home" id="home" name="home" onclick="a()">
      </div>
      
    </form>
  </div>
  <script>
     function vali_name()
  {
    var regex= new RegExp(/^[a-zA-Z]+ [a-zA-Z]+$/);
     var name=document.getElementById('patient').value;
    if(regex.test(name)==true)
    {
      return true;
    }
    else
    {
      alert('Name is not valid');
      return false;
    }
  }
 function al()
 {
  alert("For filling this form ,you must download and fill requisition form");
}
   function a()
   {
        document.getElementById('patient').removeAttribute('required');
        document.getElementById('hospital').removeAttribute('required');
        document.getElementById('blood').removeAttribute('required');
        document.getElementById('quantity').removeAttribute('required');
        document.getElementById('reason').removeAttribute('required');
        document.getElementById('email').removeAttribute('required');
        document.getElementById('img_id').removeAttribute('required');

   }
 </script>
  
  </body >
</html>
  
  <?php
   if(isset($_POST['home'])){
    echo"<script>window.location.href='home.php'</script>";
   }

  if(isset($_POST['request'])){
	
   $con=mysqli_connect("localhost","root","","LS");
   $a=$_POST["patient"];
   $b=$_POST["hospital"];
   $c=$_POST["blood"];
   $d=$_POST["quantity"];
   $e=$_POST["reason"];
	   $f=$_POST["email"];
	$email = filter_var($f, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

  $q="insert into hospitalemergency (Patientname,Hospitalname,Bloodgroup,Bloodquantity,Date,Reason,Email) values('$a','$b','$c','$d',now(),'$e','$f')";
    mysqli_query($con,$q);
    
        
        if($q){
          echo"<script>
          window.location.href='home.php'</script>";
        }
        else{
        echo"<script>alert('Invalid details');
          window.location.href='home.php'.php';</script>";
       }

       if(isset($_FILES['img']))
  {
    $image=$_FILES['img']['name'];
    
      $query= "update hospitalemergency set Requisition='$image' where ID=(select MAX(ID) from hospitalemergency)";
           $q=mysqli_query($con,$query);
           IF($q){
           move_uploaded_file($_FILES['img']['tmp_name'],"$image");
          }
    
  }
  
} else {
  echo "<script>alert('email is not a valid email address')</script>;";
    return false;

}
	
	 }  ?>
  
  
  
