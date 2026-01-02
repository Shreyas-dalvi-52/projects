
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Camp Organization Form </title> 
    
	
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
	

    <h1 style="color:white; font-style: bold;"> Camp Organization Form </h1>          
	   		<div>
     <div class="input-box">
        <input  type="text" style="color:black"name="org" id="org" placeholder="Enter Camp Organizing Organization" required>
      </div>
	  	  <div class="input-box">
          <input type="text" id="c_place"style="color:black" name="c_place" placeholder="Enter Camp Venue" required>
      </div>
        <div class="input-box">
          <input type="text" name="org_name" style="color:black"id="org_name" placeholder="Enter Camp Organizer's Name" required>   
      </div>
        <div class="input-box">
          <input type="text" name="org_address" style="color:black"id="org_address" placeholder="Enter Camp Organizer's Address" required>   
      </div>
       <div class="input-box">
        <input type="number" id="mobno"style="color:black" name="mobno" placeholder="Enter Camp Organizer's Mobile No" required >
      </div>
      <div class="input-box">
        <input type="email" id="email" style="color:black"name="email" placeholder="Enter Camp Organizer's Email " required >
      </div>
      <div class="inputbutton">
        <input type="submit" style="color:white;" value="Next" id="submit" name="submit">
      
        <input type="button" style="color:white" value="Back" id="home" name="home" onclick="window.location.href='index.php'">
      </div>
      <input type="hidden" id="flag" name="flag">
      
    </form>
  </div>
  <?php
  // if(isset($_POST['home']))
  // {
  //   $sql="delete from camp where id=$id";
  //   $res=mysqli_query($conn,$sql);
  //   if($res)
  //   echo "<script>window.location='camp_org_final.php';</script>";
  //   else
  //   die("Error in deleting".mysqli_error);
  // }
  if(isset($_POST['submit']) && $_POST['flag']==0)
  {
    $a=$_POST["org"];
    $b=$_POST["c_place"];
    $c=$_POST["org_name"];
    $d=$_POST["org_address"];
    $e=$_POST["mobno"];
    $f=$_POST["email"];
    $conn=mysqli_connect("localhost","root","","CPE");
      
      $sql="insert into camp(org,c_place,org_name,org_address,mobno,email) values('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."')";
      
      $res=mysqli_query($conn,$sql);
      $id = mysqli_insert_id($conn);
      if($res)
{    echo "<script>alert('form submitted');window.location='camp_org_final2.php?id=$id';</script>";
} 
else{
  $sql="delete from camp where id=$id";
  $res=mysqli_query($conn,$sql);
}
}
  ?>
  <script>
    form=document.getElementById('f1');
    form.addEventListener('submit', function(event) { 
        org=document.getElementById("org").value;
        org_name=document.getElementById("org_name").value;
        c_place=document.getElementById("c_place").value;
        org_address=document.getElementById("org_address").value;
        mobno=document.getElementById("mobno").value;
        email=document.getElementById("email").value;
        var flag=0;

        org_patt=/^([a-zA-Z]{2,}\s)*([a-zA-Z]{2,})$/;
        org_name_patt=/^([a-zA-Z]{2,}\s)+([a-zA-Z]{2,})$/;
        // c_place_patt=/^[a-zA-Z]{2,}$/;
        mob_pat=/^[6-9][0-9]{9}$/;
        email_patt=/^[a-zA-Z0-9#&*_]{1,}@[a-zA-Z]{1,}\.[a-z]{1,}$/;

        if(org_patt.test(org)){}
        else{flag=1;alert("Enter valid organization name");event.preventDefault();}

        if(org_name_patt.test(org_name)){}
        else{flag=1;alert("Enter valid organizers name");event.preventDefault();}

        if(mob_pat.test(mobno)){}
        else{flag=1;alert("Enter valid mob no.");event.preventDefault();}

        if(email_patt.test(email)){}
        else{flag=1;alert("Enter valid email");event.preventDefault();}

        document.getElementById('flag').value=flag;
        // if(c_place_patt.test(c_place)){}
        // else{alert("Enter valid venue");event.preventDefault();}

        // if(c_place_patt.test(org_address)){}
        // else{alert("Enter valid organization address");event.preventDefault();}
     });

 </script>
  
  </body >
</html>
  