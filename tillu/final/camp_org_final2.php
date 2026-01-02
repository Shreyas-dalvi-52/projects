<html>
<head>
  <title>Camp Organization</title>
  </head>
  <style>
body
{
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
label{ margin-left: 10px; }
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
    input[type=radio]
    {

          height: 15px;
         
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
        input[type=date],input[type=time] {

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
        <h1><center>Camp Organization Form</h1>
        Please complete the form below to apply for a camp organise</center>
      </div>
    <br>
    <br>

        &nbsp;&nbsp;<label><b>Camp Date</b><font color="red">*</font></label>
        <input type="date" id="c_date" name="c_date" style="height:40px;" required/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <label><b>Time</b><font color="red">*</font></label>
        <input type="time" id="c_time" name="c_time" required/>
        <br><br>

        <label><b>Is the area where the camp is organized clean, ventilated and with adequate &nbsp;&nbsp;lighting?</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type='radio' id='y1' name='c_yn' value='yes'/><label for ='y1'>Yes</label>
        <input type='radio' id='n1' name='c_yn' value='no'/><label for ='n1'>No</label>
        <br>
<label><b>Is there drinking water system?</b><font color="red">*</font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type='radio' id='y2' name='c_yn1' value='yes'/><label for ='y2'>Yes</label>
        <input type='radio' id='n2' name='c_yn1' value='no'/><label for ='n2'>No</label>
        <br><br>        
       
<label><b>Is there facility of full time power supply?</b><font color="red">*</font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type='radio' id='y3' name='c_yn2' value='yes'/><label for ='y3'>Yes</label>
        <input type='radio' id='n3' name='c_yn2' value='no'/><label for ='n3'>No</label>
        <br><br>      
  
<label><b>Is there a communication system between the camp site and blood bank?</b><font color="red">*</font></label><br>
        <input type='radio' id='y4' name='c_yn3' value='yes'/><label for ='y4'>Yes</label>
        <input type='radio' id='n4' name='c_yn3' value='no'/><label for ='n4'>No</label>
        <br><br>      

     <label><b>Is there adequate arrangement for health screening of blood donors?</b><font color="red">*</font></label><br>
        <input type='radio' id='y5' name='c_yn4' value='yes'/><label for ='y5'>Yes</label>
        <input type='radio' id='n5' name='c_yn4' value='no'/><label for ='n5'>No</label>
        <br><br>      
 <label><b>Is there a waste disposal system?</b><font color="red">*</font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type='radio' id='y6' name='c_yn5' value='yes'/><label for ='y6'>Yes</label>
        <input type='radio' id='n6' name='c_yn5' value='no'/><label for ='n6'>No</label>
        <br><br>  
         <label><b>Is there a hand washing facility for blood bank staff?</b><font color="red">*</font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type='radio' id='y7' name='c_yn6' value='yes'/><label for ='y7'>Yes</label>
        <input type='radio' id='n7' name='c_yn6' value='no'/><label for ='n7'>No</label>
        <br><br>  

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
     window.location.href="camp_org_final.php";
    }
  // function vali_name()
  // {
  //   var regex= new RegExp(/^[a-zA-Z]+ [a-zA-Z]+$/);
  //    var name=document.getElementById('org').value;
  //   if(regex.test(name)==true)
  //   {
  //     return true;
  //   }
  //   else
  //   {
  //     alert('Name is not valid');
  //     return false;
  //   }
  // }
 
  
  //   let regex1=new RegExp(/(0|91)?[6-9][0-9]{9}/);
  //   var mob=document.getElementById('mobno').value;
  //   if(regex1.test(mob)==true)
  //   {
  //     return true;
  //   }
  //   else
  //   {
  //     alert('Phone number is not valid');
  //     return false;
  //   }
</script>
<?php
  if(isset($_POST['back']))
{
    echo"<script>window.location.href='camp_org_final.php'</script>";
}
if(isset($_POST['submit']))
    {
      $a=$_POST["org"];
      $b=$_POST["c_place"];
      $c=$_POST["org_name"];
      $d=$_POST["org_address"];
      $e=$_POST["mobno"];
      $f=$_POST["c_date"];
      $g=$_POST["c_time"];
      $h=$_POST["c_yn"];
      $i=$_POST["c_yn1"];
      $j=$_POST["c_yn2"];
      $k=$_POST["c_yn3"];
      $l=$_POST["c_yn4"];
      $m=$_POST["c_yn5"];
      $n=$_POST["c_yn6"];

      $conn=mysqli_connect("localhost","root","","CPE");
      
      $sql="insert into camp(org,c_place,org_name,org_address,mobno,c_date,c_time,c_yn,c_yn1,c_yn2,c_yn3,c_yn4,c_yn5,c_yn6) values('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."')";
      
          mysqli_query($conn,$sql);

    } 
?>
  </body>
</html>