<?php
     $conn= mysqli_connect("localhost", "root","", "LS");
     $id=$_GET['id'];
     $q="select * from addstaff where ID='".$id."'";
     $res=mysqli_query($conn,$q);
     while( $row= mysqli_fetch_assoc($res) ) //associative array
       {
          ?>

<html>
<head>
    <title> Edit Staff Adding</title>
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
            input[type="tel"] {
                width:28%;
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
                <h1><center>Edit Staff Information</h1>
                Please complete the form below to apply for a position with us .</center>
            </div>
        <br>
        <br>

            <div class="container" style="font-size: 17px;">

               &nbsp;&nbsp; &nbsp;&nbsp;<label>Full Name<font color="red">*</font></label>
                <input type="text" id="name" name="name" style="height:20px;" value="<?php echo $row['NAME']?>"required/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <label>Mobile No<font color="red">*</font></label>
                <input type="tel" id="mobileno" name="mobileno" value="<?php echo $row['MOB_NO']?>"PATTERN="[0-9]{10}"required/>
                <br><br>

               &nbsp;&nbsp; &nbsp;&nbsp;<label>Email<font color="red">*</font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="email" id="email" name="email" value="<?php echo $row['EMAIL']?>"required/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label>Date Of Birth<font color="red">*</font></label>
                <input type="date" id="dob" name="dob" value="<?php echo $row['DOB']?>"required/>
                <br><br>                
             
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Designation<font color="red">*</font></label>
                <select style="width: 20%; height:40px; border: 1px solid black; background-color:whitesmoke" name="designation" id="designation"  required>
                
                <option value ='helper'>Helper</option>
                <option value ='Volunteer'>Volunteer</option></li>
              </select>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;


                <label>Joining Date<font color="red">*</font></label>
                <input type="date" id="jd" name="jd"value="<?php echo $row['JOINDATE']?>" required/><br><br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Shift Schedule</label><font color="red">*</font><br><br>
                &nbsp;&nbsp;<input type='radio' id='shift1' name='shift' value='day' required /><label for ='shift1'>Day Shift(8:00am-8:00pm)</label><br>
                &nbsp;&nbsp;<input type='radio' id='shift2' name='shift' value='night'/><label for ='shift2'>Night Shift(8:00pm-8:00am)</label>

            

                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Salary<font color="red">*</font></label>
                <input type="number" id="salary" name="salary" value="<?php echo $row['SALARY']?>"required/><br><br>

            
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
document.getElementById('shift1').removeAttribute("required");  

    }
</script>
    </body>
<?php
if(isset($_POST['back']))
{
    echo"<script>window.location.href='manage_staff1.php'</script>";
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

        $conn=mysqli_connect("localhost","root","","LS");
        
        $sql="update addstaff SET NAME='".$a."',MOB_NO='".$b."',EMAIL='".$c."',DOB='".$d."',JOINDATE='".$f."',DESIGNATION='".$g."',SHIFT='".$i."',SALARY='".$h."' where ID=$id";
      
       $q=mysqli_query($conn,$sql);
        if($q)
        {
            echo"<script>alert('Staff data updated successfully');
            window.location.href='admin_dash_f.php'</script>";
        }
        else{
            echo"<script>alert('Staff data not updated successfully');
            window.location.href='addStaff.php'</script>";
        }
      } 
    ?>
</html>
<?php 
 }
?>

