
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Blood Requisition Form </title> 
    
	
<style>
*{
  
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{

  align-items: center;
  justify-content: center;
 margin-top: 40px;
 color: white;
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
form .input-box select{
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
/*.input-box.button input{
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
}*/
.inputbutton input{
  color: #bdb8d7;
  letter-spacing: 1px;
  border: none;
  background: #353a40;
  cursor: pointer;
  margin:10px 0 ;
  width: 35%;
  height: 40px;
  outline: none;
  font-size: 17px;
  font-weight: 400;
  border-radius: 12px;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;

}
.inputbutton input:hover{
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
 	<form method="POST" name="f1"id="f1" enctype="multipart/form-data">
	

    <h1 style="color:white; font-style: bold;"> Blood Requisition Form </h1>          
	
     <div class="input-box">
        <input  type="text" name="patient" id="patient" placeholder="Enter name of patient" required>
      </div>
	  	  <div class="input-box">
          <input type="text" id="hospital" name="hospital" placeholder="Enter name of hospital" required>
      </div>
      
  <div class="input-box">
    <select name="bgroup" required>
      <option value="">Select Blood Group</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
    </select>
  </div>
  <div class="input-box">
  <input type="text" id="reason" name="reason" placeholder="Enter reason" required >
  </div>

        <div class="input-box">
            Upload Requisition form:
          <input type="file" name="file" id="file" placeholder="" accept="image"required>   
      </div>
       <div class="input-box">
        <input type="number" id="quan" name="quan" placeholder="Enter Quantity" required >
      </div>
      <div class="input-box">
        <input type="email" id="email" name="email" placeholder="Enter Email " required >
      </div>
      <div class="inputbutton">
        <input type="submit" style="color:white;" value="Next" id="submit" name="submit" onclick="next1()">
      
        <input type="Submit" style="color:white" value="Back" id="home" name="home" onclick="window.location.href='user_dash.php'" >
      </div>
      
    </form>
  </div>
  <?php
require("connection.php");

// error_reporting(0);
if (isset($_POST['submit'])) 
{
    $pat=$_POST['patient'];
    $bg=$_POST['bgroup'];
    $hosp=$_POST['hospital'];
    $rh=$_POST['reason'];
    $email=$_POST['email'];
    $quan=$_POST['quan'];
    // Get file details
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];

    // Check if file is image
    $allowed_ext = array("jpeg", "jpg", "png");
    $file_ext = strtolower(end(explode(".", $file_name)));
    if (!in_array($file_ext, $allowed_ext)) 
    {
        echo "<script>alert('Only JPEG, JPG, and PNG files are allowed.');window.history.back()</script>";
        exit();
    }
    // Move the uploaded file to the target directory
    $target_dir = "images_aadhar/";
    $target_file = $target_dir . basename($file_name);
    if (move_uploaded_file($file_tmp, $target_file)) {
        // echo "Image uploaded successfully.";
    } else {
        // echo "Error uploading image.";
    }
    $q="insert into hospitalemergency (Patientname,Hospitalname,Bloodgroup,Bloodquantity,Date,Reason,Email,Requisition) values('$pat','$hosp','$bg','$quan',now(),'$rh','$email','$file_name')";
    $res=mysqli_query($conn,$q);
    echo "<script>window.location.href='user_dash.php'</script>";
}

?>
  <script>
    function next1()
    {
      
    var regex= new RegExp(/^[a-zA-Z]+ [a-zA-Z]+$/);
    var name=document.getElementById('patient').value;
    if(regex.test(name)==true)
    {
      
    }
    else
    {
      alert('Name is not valid');
      return false;
    }

    let regex2 = new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/);
    var email = document.getElementById('email').value;
    if (regex2.test(email) == true) {
      // document.getElementById('f1').submit();
    } else {
      alert('Email is not valid');
      return false;
    }
  
   // window.location.href="camp_org_final2.php";
  }
 </script>
  
  </body >
</html>
  