<?php
require("connection.php");
$id=$_GET['id'];
// error_reporting(0);
if (isset($_POST['submit'])) 
{
    $name=$_POST['fname']."\n".$_POST['lname'];
    $bg=$_POST['bgroup'];
    $mob=$_POST['mob'];
    $aadhar=$_POST['aadhar'];
    $dob=$_POST['dob'];
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
    $query="update DONOR set NAME='$name',DOB='$dob',BGROUP='$bg',AADHAR='$aadhar',STATUS='COMPLETED',MOB='$mob',AADHAR_PIC='$file_name' where id='$id'";
    $res=mysqli_query($conn,$query);
    echo "<script>window.location.href='user_dash.php'</script>";
}

?>