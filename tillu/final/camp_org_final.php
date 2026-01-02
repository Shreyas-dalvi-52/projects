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
form .input-box input,textarea{
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
 	<form method="POST" name="f1" id="f1"action="camp_org_final2.php" enctype="multipart/form-data">
	

    <h1 style="color:white; font-style: bold;"> Camp Organization Form </h1>          
	   		<div>
     <div class="input-box">
        <input  type="text" name="org" id="org" placeholder="Enter Name of Organization" required>
      </div>
	  	  <div class="input-box">
          <input type="text" id="c_place" name="c_place" placeholder="Enter Camp Venue" required>
      </div>
        <div class="input-box">
          <input type="text" name="org_name" id="org_name" placeholder="Enter Camp Organizer's Name" required>   
      </div>
        <div class="input-box">
          <!-- <input type="text" name="org_address" id="org_address" placeholder="Enter Camp Organizer's Address" required> 
           -->
           <textarea name="org_address" id="org_address" placeholder="Enter Camp Organizer's Address"rows=3 required></textarea>
      </div>
       <div class="input-box">
        <input type="number" maxlength="10" minlength="10" id="mobno" name="mobno" placeholder="Enter Camp Organizer's Mobile No" required >
      </div>
      <div class="inputbutton">
        <input type="button" style="color:white;" value="Next" id="next" name="next" onclick="next1()">
      
        <input type="Button" style="color:white" value="Back" id="home" name="home" onclick="a()">
      </div>
      
    </form>
  </div>
  <script>
    function next1()
    {
      if(vali_mob()&&vali_name())
      {
        return true;
    }
  else
    return false;
  }
    function vali_name()
  {
    var regex= /^([a-zA-Z]{2,}\s)+([a-zA-Z]{2,})/;
     var name=document.getElementById('org_name').value;
    if(regex.test(name))
    {
      return true;
    }
    else
    {
      alert('Name is not valid');
      return false;
    }
  }
 
  function vali_mob()
  {
    let regex1=new RegExp(/(0|91)?[6-9][0-9]{9}/);
    var mob=document.getElementById('mobno').value;
    if(regex1.test(mob)==true)
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
  
  </body >
</html>
  