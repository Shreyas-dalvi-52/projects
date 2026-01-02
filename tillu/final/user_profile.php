<?php
$id=$_GET['id'];
require('connection.php');
$query="select *from DONOR where id=$id";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($res);
// error_reporting(0);
// include("user_dash.php");
?>

<html>
<head>
<style>
body {
    background: rgb(99, 39, 120)
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
<?php
require("user_dash.php");
?>
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
                <form method="POST" name="f1" action="update_user.php?<?php echo 'id='.$id?>" enctype="multipart/form-data">
                <div class="row mt-2">
                    
                    <div class="col-md-6"><label class="labels">First Name</label><input type="text" value="<?php echo explode(' ',$row['NAME'])[0]?>" name="fname" class="form-control"onchange="enable_btn()" placeholder="First name" value=""></div>
                    <div class="col-md-6"><label class="labels">Last name</label><input type="text" value="<?php echo explode(' ',$row['NAME'])[1]?>"name="lname" class="form-control" onchange="enable_btn()" value="" placeholder="Last name"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="number" value="<?php echo $row['MOB']?>"name="mob" class="form-control"onchange="enable_btn()" placeholder="Enter Mobile no." value=""></div>
                    <div class="col-md-12"><label class="labels">Aadhar Number</label><input type="number" value="<?php echo $row['AADHAR']?>"name="aadhar" class="form-control"onchange="enable_btn()" placeholder="Enter Aadhar no." value=""></div>
                    <div class="col-md-12"><label class="labels">Blood Group</label><select class="form-control" selected="<?php echo $row['BGROUP']?>" onchange="enable_btn()" name="bgroup" onclick="disable(this)">
                        <option >select blood group</option>
                        <option value="A+" <?php if($row['BGROUP'] == "A+") echo "selected"; ?>>A+</option>
    <option value="O+" <?php if($row['BGROUP'] == "O+") echo "selected"; ?>>O+</option>
    <option value="B+" <?php if($row['BGROUP'] == "B+") echo "selected"; ?>>B+</option>
    <option value="AB+" <?php if($row['BGROUP'] == "AB+") echo "selected"; ?>>AB+</option>
    <option value="A-" <?php if($row['BGROUP'] == "A-") echo "selected"; ?>>A-</option>
    <option value="O-" <?php if($row['BGROUP'] == "O-") echo "selected"; ?>>O-</option>
    <option value="B-" <?php if($row['BGROUP'] == "B-") echo "selected"; ?>>B-</option>
    <option value="AB-" <?php if($row['BGROUP'] == "AB-") echo "selected"; ?>>AB-</option>
                    </select></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="email" READONLY class="form-control"  onchange="enable_btn()" placeholder="Enter Email" value="<?php echo $row['EMAIL']?>"></div>
                    <div class="col-md-12"><label class="labels">Date of Birth</label><input type="date" value="<?php echo $row['DOB']?>"class="form-control" name="dob" value=""onchange="enable_btn()"></div>
                    <div class="col-md-12"><label class="labels">Upload aadhar card</label><input type="file" class="form-control" src="<?php echo $row['AADHAR_PIC']?>"accept="image"name="file" id="file" onchange="enable_btn()"></div>
                    <!-- <div class="col-md-12"><label class="labels">City</label><select class="form-control" onclick="disable(this)" onchange="enable_btn()">
                        <option >select City</option>
                        <option value="Ahmednagar">Ahmednagar</option>
                        <option value="Akola">Akola</option>
                        <option value="Amravati">Amravati</option>
                        <option value="Beed">Beed</option>
                        <option value="Bhandara">Bhandara</option>
                        <option value="Buldhana">Buldhana</option>
                        <option value="Chandrapur">Chandrapur</option>
                        <option value="Chatrapati Sambhajinagar">Chatrapati Sambhajinagar</option>
                        <option value="Dhule">Dhule</option>
                        <option value="Gadchiroli">Gadchiroli</option>
                        <option value="Gondia">Gondia</option>
                        <option value="Hingoli">Hingoli</option>
                        <option value="Jalgaon">Jalgaon</option>
                        <option value="Jalna">Jalna</option>
                        <option value="Kolhapur">Kolhapur</option>
                        <option value="Latur">Latur</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Nagpur">Nagpur</option>
                        <option value="Nanded">Nanded</option>
                        <option value="Nandurbar">Nandurbar</option>
                        <option value="Nashik">Nashik</option>
                        <option value="Osmanabad">Osmanabad</option>
                        <option value="Palghar">Palghar</option>
                        <option value="Parbhani">Parbhani</option>
                        <option value="Pune">Pune</option>
                        <option value="Raigad">Raigad</option>
                        <option value="Ratnagiri">Ratnagiri</option>
                        <option value="Sangli">Sangli</option>
                        <option value="Satara">Satara</option>
                        <option value="Sindhudurg">Sindhudurg</option>
                        <option value="Solapur">Solapur</option>
                        <option value="Thane">Thane</option>
                        <option value="Wardha">Wardha</option>
                        <option value="Washim">Washim</option>
                        <option value="Yavatmal">Yavatmal</option>
                        
                    </select></div> -->
                </div>

                <!-- <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div> -->
                <div class="mt-5 text-center"><input type="submit" class="btn btn-primary profile-button" name='submit' value='Save profile'/></div>
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
</script>

</body>
</html>