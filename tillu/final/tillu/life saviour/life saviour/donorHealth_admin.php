<!DOCTYPE html>
<html>
<head>
	<title>LIFE SAVIOUR</title>
	<style>
		div.image{
      width:85%;
      overflow: auto;
      height:570px;
      float: right;
     margin-left: 15%;
     margin-top: 100px;
			}
				table{
					margin-top: 100px;
			}
 						th{
                background-color:  #ee343f;
                color:white;
                width:30px;
            }
            td{
            	width:30px;
            }
            tr{
                background-color: #FFB6C1;
            }
div.title{
      background-color: #ee343f;
      width:100%;
      height:50px;
      text-align: left;
      position: fixed;
    }
    .slogan{
      background-color: grey;
      position: relative;
      width: 85%;
      height:86px;
      float: right;
    }
    div.slogan p{
      margin-top: 35px;
    }
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  width: 15%;
  height:885px;
   float:left;
   position: fixed;
   margin-top: 50px;
}

.wrapper .sidebar{
  width: 100%;
  height: 100%;
  background:   #343a40;
  padding: 30px 0px;
  float: left;
}


.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}


.wrapper .sidebar ul li:hover{
  background-color: #594f8d;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
.head1
{
    background:url("donorlogo.png") no-repeat right top;
    background-size: 15%;
    margin-right: 20px;
    background-color: transparent; 
    color: firebrick;
    border-radius: 12px;
    height: 80px;
    border-bottom-style: solid;
}
.field1
{
  padding-top: 15px;
  border-radius: 12px;
    font-size: 20px;
    
}
.container{
    display:flex;
    justify-content:space-between ;}
.div1
{
    display: grid;
    justify-items: start;
    width:50%;
}
.div2{
    text-align: left;
    width:50%;
}
form input[type="text"],input[type="number"]{
    width:150px;
}


	</style>
  <script>
     function a(){
            document.getElementById('history').style.display="block";
        }
  </script>
</head>
<body>
	<form method="post">
		<div class="title">
        	<span style="margin-top: 10px;"><font size="6" style="color:white">LIFE SAVIOUR</font></span>
        		<p align="right" style="float:right; margin-top:15px"><a style="color:white;" href="admin_logout.php">&nbsp;<font size="4">Logout</font>&nbsp;&nbsp;&nbsp;&nbsp;</a>	
        		
			</div>
		

<div class="wrapper">
    <div class="sidebar">
        
        <ul>
        	<li><a style="text-decoration:none;" href="admin_dash_f.php">Home</a></li>
 <li><a style="text-decoration:none;" href="hospital_request_admin.php">Blood Requests    (Hospital)</a></li>
             <li><a style="text-decoration:none;" href="disaster_request_admin.php">Blood Requests    (Disaster)</a></li>
            <li><a style="text-decoration:none;" href="donation_request_admin.php">Donation Requests</a></li>
            <li><a style="text-decoration:none;" href="addStaff.php">Add staff</a></li>
            <li><a style="text-decoration:none;" href="manage_staff.php">Manage staff </a></li>
            <li><a style="text-decoration:none;" href="/admin-request-history">Camp Requests</a></li>
            <li><a style="text-decoration:none;" href="/admin-request-history">Stock</a></li>
            <li><a style="text-decoration:none;" href="/admin-request-history">Report</a></li>
        </ul> 
	</div>
</div>
	<div class="image">
		<div style="background-color: firebrick;"><h1 style="text-align: center; color: white;">Donor Health Checkup</h1></div>

   <form method="post" class="f1">
      <div class="head1">

      <h3>HEALTH CHECKUP</h3> 
      
      <p style="font-style: italic; font-size: 12px;">Donating blood is an act of solidarity. Join the effort and save lives.</p>

    </div>

       <br>
      <fieldset class="field1">
            <div class="container">
        <div class="div1">
        <label for="Mono">Mobile No<font color="red">*</font></label>                     
        <input type="number" name="Mono" id="Mono"  required /><br>

        <label for="UBloodg">Blood Group<font color="red">*</font></label>
            <select name="UBloodg" id="UBloodg" required style="height: 25px; width: 75px;">
                <option value="A+"> A+ </option>
                <option value="A-"> A- </option>
                <option value="B+"> B+ </option>
                <option value="B-"> B- </option>
                <option value="O+"> O+ </option>
                <option value="O-"> O- </option>
                <option value="AB+"> AB+ </option>
                <option value="AB-"> AB- </option>
            </select><br>
                 
            <div>
            <label for="disease">If any disease<font color="red">*</font></label><br>
             <input type='radio' id='Yes' name='disease' value='Yes' onclick="a()">
            <label for='Yes'>Yes</label>     
            <input type='radio' id='No' name='disease' value='No'>
            <label for='No'>No</label>
        </div>
         </div>


        <div class="div2">  
            <label for="weight">Weight<font color="red">*</font></label> <br>        
            <input type="number" name="weight" id="weight" required />
            <br><br>
            

            <label for="HB">HB(percenrage)<font color="red">*</font></label>
            <input type="number" name="HB" id="HB"/> 
            <br><br>
              
              
            <label for="Pdate">Last Blood Donation Date</label>
            <input type="date" name="Pdate" id="Pdate" style="height: 25px; width: 100px;"/>
            <br>
        </div>       
 </div>
           <br><br><br>
           <center><textarea cols="25" rows="3" id="history" name="history" placeholder="Enter the Previous history (if any)" style="display: none;"></textarea><br><br>
           <input type="submit" name="submit" id="submit" style="font-style:courier; font-size:17px; background-color:coral;" value="Submit" /></center>
   </form>
</fieldset>

    </div>
	</form>
</body>
</html>