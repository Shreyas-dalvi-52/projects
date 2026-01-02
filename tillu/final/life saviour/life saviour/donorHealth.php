<?php
$name=$_GET['name'];
$mob=$_GET['mob'];
$conn=mysqli_connect("localhost","root","","LS");

$query1="select *from DONATE_BLOOD WHERE NAME='$name'";
$q1=mysqli_query($conn,$query1);
$row1=mysqli_fetch_assoc($q1);
?>

<html>
<head>
	<title>Donor Health Checkup</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />

<style>
	 body 
{
  font-family:sans-serif; 
  background: white;
  background-image: url('bg1.png');
  background-size: 100% 100%;
  background-repeat: no-repeat;
/*  overflow: hidden;*/
}

form{
    width:35rem;
    margin: 30px;
    background-color: transparent;
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
    padding: 20px 25px; 
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
body input[type="text"],input[type="number"],input[type="date"],input[type="tel"],select{
    width:150px;
    border-top: none;
    border-left: none;
    border-right: none;
    background-color: transparent;
    border-bottom: 1 px solid grey;
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
</head>
<body>
    <script>
        function a(){
            document.getElementById('history').style.display="block";
        }
         function b(){
            document.getElementById('history').style.display="none";
        }
    </script>
   <div style="background-color: firebrick;">    
   <!-- <a href='admin_dash_f.php' style="float:left;height: 37px;width: 15px;"><i class="fa-solid fa-backward" style="float:left;height: 37px;width: 15px;"></i>HOME</a>     -->
    <!-- <input type="submit" name="home" id="home" value="Home" style="float:left;height: 37px;width: 70px;" class="btn"> -->
<h1 style="text-align: center; color: white;">Donor Health Checkup</h1></div>

   <form method="post">
   	  <div class="head1">

   	  <h3>HEALTH CHECKUP</h3> 
   	  <p style="font-style: italic; font-size: 12px;">Donating blood is an act of solidarity. Join the effort and save lives.</p>

   	</div>

       <br>
   		<fieldset class="field1">
            <div class="container">
        <div class="div1">
            <label for="name">Name<font color="red">*</font></label>                     
            <input type="text" name="name" id="name"  required readonly  value="<?php echo $name;?>" /><br>


   			<label for="UBloodg">Blood Group<font color="red">*</font></label>
            <input type="text" name="UBloodg" id="UBloodg"  readonly >
           <!--  <select name="UBloodg" id="UBloodg" readonly style="height: 25px; width: 75px;" >
                <option value="A+" id="A+"> A+ </option>
                <option value="A-"id="A-"> A- </option>
                <option value="B+"id="B+"> B+ </option>
                <option value="B-"id="B-"> B- </option>
                <option value="O+"id="O+"> O+ </option>
                <option value="O-"id="O-"> O- </option>
                <option value="AB+"id="AB+"> AB+ </option>
                <option value="AB-"id="AB-"> AB- </option>
            </select> --><br>
   			         
            <div>
            <label for="disease">If any disease<font color="red">*</font></label><br>
             <input type='radio' id='Yes' name='disease' value='Yes'onclick="a()" required>
            <label for='Yes' style=" font-size: 17px;">Yes</label>     
            <input type='radio' id='No' name='disease' value='No' onclick="b()">
            <label for='No' style=" font-size: 17px;">No</label>
        </div>
         </div>


        <div class="div2">  
            <label for="weight">Weight(Kg)<font color="red">*</font></label> <br>        
            <input type="number" name="weight" id="weight" required/>
            <br><br>
            

            <label for="HB">HB(g/dL)<font color="red">*</font></label><br>
            <input type="number" name="HB" step="0.1" id="HB"  required /> 
            <br><br>
              
              
            <label for="Mono">Mobile No<font color="red">*</font></label> <br>                    
            <input type="tel" name="Mono" id="Mono"  pattern="[0-9]{10}"required readonly value="<?php echo $mob;?>" /><br>
        </div>       
 </div>
           <br><br><br>
           <center><textarea cols="25" rows="3" id="history" name="history" placeholder="Enter the Previous history (if any)" style="display: none;"></textarea><br><br>
           <input type="submit" name="submit" id="submit" class="btn"  value="Submit" style="height:30px;width: 60px;" onclick="check_hb();check_w()" />
                  <input type="submit" name="back" id="back" class="btn"  value="Back" style="height:30px;width: 60px;" onclick="c()" /></center>
</center>
           </fieldset>
   </form>

<script>
        var blood="<?php echo $row1['BLOOD_GROUP']?>"
        document.getElementById('UBloodg').value=blood;

    function c()
    {
      document.getElementById('name').removeAttribute("required");  
      document.getElementById('UBloodg').removeAttribute("required");  
      document.getElementById('Mono').removeAttribute("required");  
      document.getElementById('weight').removeAttribute("required");  
      document.getElementById('HB').removeAttribute("required");  
      document.getElementById('Yes').removeAttribute("required");  

    }
    function check_w()
    {
        var w=document.getElementById('weight').value;
        if(w<=50)
        {
            alert('weight must be greater than 50 kg');
            window.location.href="donor_health_table1.php";
            return false;
        }
    }
    function check_hb()
    {
        var w=document.getElementById('HB').value;
        if(w<=13)
        {
            alert('HB must be greater than 13.0 g/dL');
            window.location.href="donor_health_table1.php";
            return false;
        }
    }
</script>
</body>
</html>

<?php
if(isset($_POST['back']))
{
    echo"<script>window.location.href='donor_health_table1.php'</script>";
}
if(isset($_POST['submit']))
{

        $a=$_POST["name"];
        $b=$_POST["UBloodg"];
        $c=$_POST["weight"];
        $d=$_POST["HB"];
        $f=$_POST["history"];
        $g=$_POST["Mono"];
    if($c>=50 && $d>=13){
      $conn=mysqli_connect("localhost","root","","LS");
       $query= "update DONATE_BLOOD set DONATION_STATUS='INITIATED' where name='$a'";
       $q=mysqli_query($conn,$query);
    
    $query= "insert into DONOR_HEALTH(NAME,BLOOD_GROUP,WEIGHT,HB,HISTORY,MOB_NO) values('$a','$b','$c','$d','$f','$g')";
     $q=mysqli_query($conn,$query);
      
        if($q)
        {
            echo"<script>alert('data inserted successfully');
            window.location.href='donor_health_table1.php'</script>";
        }
        else{
            echo"<script>alert('data not inserted successfully');
            window.location.href='donor_health_table1.php'</script>";
        }
    }
   
}
?>