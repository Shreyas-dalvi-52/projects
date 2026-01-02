<?php
session_start();
include "connection.php";
$email=$_SESSION['email'];
$pass=$_SESSION['pass'];
$query="select * from DONOR where EMAIL='$email' and PASSWORD='$pass'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$id=$row['ID'];
$mail=$row['EMAIL'];
if($row>0)
{
    
}
else
{
    echo "<script>alert('Invalid Email or password');window.location.href='user_login.php'</script>";
}
require("user_dash.html");
$id=$_GET['id'];
require('connection.php');
$query="select *from DONOR where id=$id";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($res);
if($row['STATUS']!="APPROVED")
{
    echo "<script>document.getElementById('navbar').style.display='none';</script>";
}

error_reporting(0);
// include("user_dash.php");
?>

<html>
<head>
<style>
body {
   
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
<script>
    function disable(sel)
    {
        sel.options[0].disabled=true
    }
    function enable_btn()
    {
        document.getElementById('btn1').disabled=false
        document.getElementById('btn1').style.background="red"

    }
    function test()
    {
        alert("submit")
    }
    </script>
</head>
    <body>
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
            <span class="font-weight-bold"><?php echo $row['NAME']?></span>
            <span class="text-black-50"><?php echo $row['EMAIL']?></span><span> </span></div>
        </div>
        <div class="col-md-8 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form method="POST" name="f1" id="f1" action="update_user.php?<?php echo 'id='.$id?>" enctype="multipart/form-data">
                <div class="row mt-2">
                    
                    <div class="col-md-6"><label class="labels">First Name</label><input type="text" value="<?php echo explode(' ',$row['NAME'])[0]?>" name="fname" id="fname"class="form-control"onchange="enable_btn()" placeholder="First name" value=""></div>
                    <div class="col-md-6"><label class="labels">Last name</label><input type="text" value="<?php echo explode(' ',$row['NAME'])[1]?>"name="lname" id="lname"class="form-control" onchange="enable_btn()" value="" placeholder="Last name"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="number" value="<?php echo $row['MOB']?>"name="mob" id="mob"class="form-control"onchange="enable_btn()" placeholder="Enter Mobile no." value=""></div>
                    <div class="col-md-12"><label class="labels">Aadhar Number</label><input type="number" value="<?php echo $row['AADHAR']?>"name="aadhar" id="aadhar"class="form-control"onchange="enable_btn()" placeholder="Enter Aadhar no." value=""></div>
                    <div class="col-md-12"><label class="labels">Blood Group</label><select class="form-control" selected="<?php echo $row['BGROUP']?>" id="bgroup" onchange="enable_btn()" name="bgroup" onclick="disable(this)">
                        <option >select blood group</option>
                        <option value="A+" <?php if($row['BGROUP'] == "A+") echo "selected"; ?>>A+</option>
                        <option value="O+" <?php if($row['BGROUP'] == "O+") echo "selected"; ?>>O+</option>
                        <option value="B+" <?php if($row['BGROUP'] == "B+") echo "selected"; ?>>B+</option>
                        <option value="AB+" <?php if($row['BGROUP'] == "AB+") echo "selected"; ?>>AB+</option>
                        <option value="A-" <?php if($row['BGROUP'] == "A-") echo "selected"; ?>>A-</option>
                        <option value="O-" <?php if($row['BGROUP'] == "O-") echo "selected"; ?>>O-</option>
                        <option value="B-" <?php if($row['BGROUP'] == "B-") echo "selected"; ?>>B-</option>
                        <option value="AB-" <?php if($row['BGROUP'] == "AB-") echo "selected"; ?>>AB-</option>
                        </select>
    
     
        <label class="labels" >Gender :</label><br>
        <input type="radio"  onclick="enable_btn()"name="gender" id="Male" value="Male" required  >
        <label for="gender" >Male</label>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" onclick="enable_btn()"name="gender" id="Female" value="Female" required >
        <label for="gender" >Female</label>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio"onclick="enable_btn()" name="gender" id="other" value="other" required >
        <label for="gender">Other</label>
        <?php
        $gender=$row['GENDER'];
         if($gender=='Male'){
          echo"<script>document.getElementById( 'Male' ).checked = true;</script>";
         }
        elseif($gender=='Female'){
            echo"<script>document.getElementById( 'Female' ).checked = true;</script>";}
        elseif($gender=='other'){
                echo"<script>document.getElementById( 'other' ).checked = true;</script>";}
        ?>
      
      <?php
        $districts = array("Ahmednagar", "Akola", "Amravati", "Aurangabad", "Beed", "Bhandara", "Buldhana", "Chandrapur", "Dhule", "Gadchiroli", "Gondia", "Hingoli", "Jalgaon", "Jalna", "Kolhapur", "Latur", "Mumbai", "Nagpur", "Nanded", "Nandurbar", "Nashik", "Osmanabad", "Palghar", "Parbhani", "Pune", "Raigad", "Ratnagiri", "Sangli", "Satara", "Sindhudurg", "Solapur", "Thane", "Wardha", "Washim", "Yavatmal");

        echo "<select class='form-control' id='district' name='district' required>";
        echo "<option value='' disabled selected hidden>Select District</option>";

        foreach ($districts as $district) {
            echo "<option value='$district' " . ($row['DISTRICT'] == $district ? "selected" : "") . ">$district</option>";
        }

        echo "</select>";
        ?>      </div>   
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="email"  id="email"READONLY class="form-control"  onchange="enable_btn()" placeholder="Enter Email" value="<?php echo $row['EMAIL']?>"></div>
                    <div class="col-md-12"><label class="labels">Date of Birth</label><input type="date" id="dob" value="<?php echo $row['DOB']?>"class="form-control" name="dob" value=""onchange="enable_btn()"></div>
                    <div class="col-md-12"><label class="labels">Upload aadhar card</label><input type="file" class="form-control" src="<?php echo $row['AADHAR_PIC']?>"accept="image"name="file" id="file" onchange="enable_btn()"></div>
                    
                </div>
                <!-- <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div> -->
                <div class="mt-5 text-center"><input type="submit" id="btn1" class="btn btn-primary profile-button" name='submit' value='Save profile'/></div>
                </form>
            </div>
        </div>
        <!-- <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div> -->
    </div>
</div>
</div>
</div>
<script>
    var ele=document.getElementsByClassName('form-control')
    for(let i=0;i<ele.length;i++)
    {
        ele[i].required=true
    }
    // selectedRadio = document.querySelector('input[name="gender"]:checked');
    // alert(selectedRadio.value)
    form=document.getElementById('f1');
    form.addEventListener('submit', function(event) { 
        fname=document.getElementById("fname").value;
        lname=document.getElementById("lname").value;
        email=document.getElementById("email").value;
        mob=document.getElementById("mob").value;
        aadhar=document.getElementById("aadhar").value;
        dob=new Date(document.getElementById("dob").value);
        fname_pat=/^[a-zA-Z]{2,}$/;
        lname_pat=/^[a-zA-Z]{2,}$/;
        mob_pat=/^[6-9][0-9]{9}$/;
        aadhar_pat=/^[0-9]{12}$/;
        var today=new Date();
        // alert(today)
        if(fname_pat.test(fname)){}
        else{alert("Enter valid first name");event.preventDefault();}

        if(lname_pat.test(lname)){}
        else{alert("Enter valid last name");event.preventDefault();}

        if(mob_pat.test(mob)){}
        else{alert("Enter valid mob no.");event.preventDefault();}

        if(dob<today){}
        else{alert("Enter valid date of Birth");event.preventDefault();}

        if(aadhar_pat.test(aadhar)){}
        else{alert("Enter valid Aadhar no");event.preventDefault();}
     });
    // function validate() {
        // fname=document.getElementById("fname").value;
        // lname=document.getElementById("lname").value;
        // email=document.getElementById("email").value;
        // mob=document.getElementById("mob").value;
        // aadhar=document.getElementById("aadhar").value;
    //     f1=document.getElementById("f1");
    //     f1.submit();
    // }
</script>

</body>
</html>