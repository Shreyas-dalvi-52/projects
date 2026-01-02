<html>
<head>
  <title>Camp Organization</title>
</head>
<style>
  * {
    margin: 2px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    padding: 1.5px;
  }

  .wrapper {
    position: relative;
    max-width: 900px;
    max-height: 5000px;
    width: 90%;
    height: 95%;
    background: #fff;
    border-radius: 6px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    margin: 0 auto;
    padding: 0px;
  }

  body {
    background-image: url("req4.png");
    background-image: url('backCamp.jpg');
    font-size: 15px;
  }

  .header {
    background-color: firebrick;
    margin-top: 2px;
  }

  .wrapper h2 {
    position: relative;
    font-size: 22px;
    font-weight: 600;
    color: #333;
  }

  .wrapper h2::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 28px;
    border-radius: 12px;
    background: #4070f4;
  }

  .wrapper form {
    margin-top: 2px;
    margin-left: 10px;
  }

  .wrapper form .input-box {
    height: 60px;
    margin: 15px ;
  }

  form .input-box input {
    outline: none;
    padding: 0 15px;
      height: 25px;
    color: #333;
    border: 1.5px solid #C7BEBE;
    border-bottom-width: 2.5px;
    border-radius: 3px;
    transition: all 0.3s ease;
  }

  .input-box input:focus,
  .input-box input:valid {
    border-color: #4070f4;
  }

  .form header {
    font-size: 2rem;
    font-weight: 500;
    text-align: center;
    margin-bottom: 1.5rem;
  }

  form h3 {
    color: #707070;
    font-size: 14px;
    font-weight: 500;
    margin-left: 10px;
  }

  .input-box.button input {
    color: #bdb8d7;
    letter-spacing: 1px;
    border: none;
    background: #353a40;
    cursor: pointer;

	padding:15px;
	padding-left:15px;
  }

  .input-box.button input:hover {
    background: #594f8d;
    color: #fff;
  }

  form .text h3 {
    color: #333;
    width: 100%;
    text-align: center;
  }

  form .text h3 a {
    color: #4070f4;
    text-decoration: none;
  }

  form .text h3 a:hover {
    text-decoration: underline;
  }

  label {
    color: #bdb8d7;
    letter-spacing: 1px;
    color: black;
    padding: 3px;
  }

  .lab {
    font-family: none;
  }
  form input
  {

    font-size: 14px;
  }
   form input::placeholder
  {
    font-size: 14px;
  }
</style>
<body>
  <div class="wrapper">
    <form method="POST" enctype="multipart/form-data">
      <div class="header">
        <center>
          <div>
            <h1><img src="bloodDonationCamp.webp" height="30" width="30" style="padding-top: 7px;">&nbsp;&nbsp;Camp Organization Form</h1>
            <h3>Please complete the form below to apply for Camp Organization Service.</h3>
          </div>
        </center>
      </div>
      <div style="display: flex; justify-content: space-between;">
        <div>
          <div class="input-box">
            <label>Name</label>
            <input type="text" id="name" name="name" placeholder="Name" required >
          </div>
          <div class="input-box">
            <label>Email</label>
            <input type="email" id="email" name="email" required placeholder="Email">
          </div>
          <div class="input-box">
            <label>City</label>&nbsp;&nbsp;&nbsp;
            <select style="width:150px" name="bd" id="bd">
              <option value="all">All</option>
            <option value="Ahmednagar" >Ahmednagar</option>
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
          </div>
          <div class="input-box">
            <label>Area</label>&nbsp;
            <input type="text" id="place" name="place"  placeholder="Area"  required>
          </div>
        </div>
        <div>
          <div class="input-box">
            <label>Mobile No</label>&nbsp;
            <input type="number" id="mobileno" name="mobileno" placeholder="Mobile No" required>
          </div>
          <div class="input-box">
            <label>Reason</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="reason" name="reason"  placeholder="Reason" >
          </div>
          <div class="input-box">
            <label>From Date</label>
            <input type="date" id="fromdate" name="fromdate" required>
          </div>
          <div class="input-box">
            <label>To Date</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="date" id="todate" name="todate" required>
          </div>
          
        </div>
		
      </div>
	
	  <div  class="tooltip"style="margin-left:27px;">

	       <label>Permission Letter</label>

         <input type="file"  id="F1"name="F1" required>
          </div>
	  
	 
      <div style="display:grid;justify-items: center;">
        <div class="input-box button">
          <input type="submit" id="submit" name="submit" value="SUBMIT" style="height: 45px;"onclick="vali_num()">
          <input type="button" id="back" name="back" value="BACK" style="height: 45px;"onclick="backfun()">
        </div>
      </div>
    </form>
    <script>
function backfun()
{
  window.location.href="home.php";
}

      function vali_name()
  {
    var regex= new RegExp(/^[a-zA-Z]+ [a-zA-Z]+$/);
     var name=document.getElementById('name').value;
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
  function vali_num()
  {
    let regex=new RegExp(/(0|91)?[6-9][0-9]{9}/);
    var mob=document.getElementById('mobileno').value;
    if(regex.test(mob)==true)
    {
      return true;
    }
    else
    {
      alert('Phone number is not valid');
      return false;
    }
  }
    </script>
  </div>
  <?php
  if(isset($_POST['submit'])) {
    $a=$_POST["name"];
    $b=$_POST["bd"];
    $c=$_POST["place"];
    $d=$_POST["fromdate"];
    $e=$_POST["todate"];
    $f=$_POST["mobileno"];
    $g=$_POST["email"];
    $h=$_POST["reason"];
	$i=$_FILES['F1']['name'];;
	

    $email = filter_var($g, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  
} else {
  echo "<script>alert('email is not a valid email address')</script>;";
    return false;

}
  if($e>$d)
  {
    $conn=mysqli_connect("localhost","root","","LS");
   
    $sql="insert into camp(NAME,CITY,AREA,FROM_DATE,TO_DATE,MOB_NO,EMAIL,REASON,PERMISSION) values('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."')";
   $res= mysqli_query($conn,$sql);
	if($res)
		{	
			move_uploaded_file( $_FILES['F1']['tmp_name'],"$i");
		}
  }
  else
  {
    echo"<script>alert('Enter valid date');</script>";
  }
}
  ?>
</body>
</html>