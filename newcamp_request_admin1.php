<?php
session_start();
include "connection.php";
$email=$_SESSION['email'];
$pass=$_SESSION['pass'];
$otp=$_SESSION['otp'];

$query="select * from ADMIN where EMAIL='$email' and PASSWORD='$pass' and OTP='$otp'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
if($row>0)
{
   //echo "welcome";
}
else
{
    // echo "<script>alert('Invalid OTP');window.location.href='admin_login.php'</script>";
}
require("admin_dash.html");
$query_ = "select * from hospitalemergency where STATUS='UNSEEN'";
$res_ = mysqli_query($conn, $query_);
$request0 = mysqli_num_rows($res_);
$query_ = "select * from CAMP where STATUS='UNSEEN'";
$res_ = mysqli_query($conn, $query_);
$request1 = mysqli_num_rows($res_);

$query_ = "select * from DONATE_BLOOD where STATUS='UNSEEN'";
$res_ = mysqli_query($conn, $query_);
$donation0 = mysqli_num_rows($res_);
$query_ = "select * from DONATE_BLOOD where DONATION_STATUS='UNSEEN' and STATUS='APPROVED'";
$res_ = mysqli_query($conn, $query_);
$donation1 = mysqli_num_rows($res_);
$query_ = "select * from DONATE_BLOOD where DONATION_STATUS='INITIATED'";
$res_ = mysqli_query($conn, $query_);
$donation2 = mysqli_num_rows($res_);

$query_ = "select * from DONOR where STATUS='COMPLETED'";
$res_ = mysqli_query($conn, $query_);
$donor0 = mysqli_num_rows($res_);
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
    	 <style type="text/css">
        /* Style for the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid black; /* Add border for consistency */
        }

        /* Style for table header and cells */
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #fff; /* White border */
        }

        /* Style for table header */
        th {
            background-color: #ff5454; /* Red background for header */
            color: #fff; /* White text color */
        }

        /* Style for alternating row colors */
        tr:nth-child(even) {
            background-color: #ffeaea; /* Light red background for even rows */
        }

        /* Style for alternating row colors */
        tr:nth-child(odd) {
            background-color: #fff; /* White background for odd rows */
        }

        /* Style for the search input */
        #tableSearch {
            margin-bottom: 20px;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        /* Style for the "VIEW," "APPROVE," and "REJECT" links in the last column */
        td:last-child a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
    		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot-min.css">

   <script type="text/javascript " src="js/boostrap.bundle.js"></script>
   <script type="text/javascript " src="js/bootstrap.bundle.min.js"></script>
   <script type="text/javascript " src="js/boostrap.js"></script>
   <script type="text/javascript " src="js/boostrap.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
	</script>
	<script>// Filter table

$(document).ready(function(){
  $("#tableSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
 });
});
});</script>
<script>
        var request0=<?php echo $request0;?>;
        var request1=<?php echo $request1; ?>;
        var  donation0=<?php echo $donation0; ?>;
        var  donation1=<?php echo $donation1; ?>;
        var   donation2=<?php echo $donation2; ?>;
        var donor0= <?php echo $donor0; ?>;
        if(request0>0 || request1>0)
        {
            document.getElementById("requesti").style.color="red";
            document.getElementById("requesti").style.display="inline-block";

        }
        if(donation0>0 || donation1>0 || donation2>0)
        {
            document.getElementById("donationi").style.color="red";
            document.getElementById("donationi").style.display="inline-block";

        }
        if(donor0>0)
        {
            document.getElementById("donori").style.color="red";
            document.getElementById("donori").style.display="inline-block";

        }
    </script>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>Life Saviour</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<link rel="stylesheet" href="css/icofont1.css">
		<link rel="stylesheet" href="css/icofont3.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
		
    </head>
    <body>

 <div class="container">
        <input class="form-control mb-4" id="tableSearch" type="text" placeholder="Search list items">
        <table style="border: 1px solid black;"class="table table-bordered table-striped">
            <thead>
            	<tr>
            <th>SR NO.</th>
            <th >ORGANIZER</th>
            <th>VENUE</th>
            <th>FROM_DATE</th>
            <th>TO_DATE</th>
          <th>MOB_NO</th>
          <th>ARRANGEMENT</th>
          <th>APPROVE</th>
          <th>REJECT</th></tr>
             </thead>
            <tbody id="myTable">
            <?php
                // $conn= mysqli_connect("localhost", "root", "", "LS");
                $q= "select * from CAMP where STATUS='UNSEEN'";
                $res= mysqli_query($conn, $q);
                $sr=1;
                while( $row= mysqli_fetch_assoc($res) ) //associative array
                {
                ?>
                    <tr>
                        <td  style="width: 60px;text-align: center"><?php echo $sr++;?></td>
                        <td><?php echo $row['org']?></td>   <!-- for printing a element in table -->
                        <td><?php echo $row['c_place']?></td> 
                         <td><?php echo $row['c_date']?></td> 
                          <td><?php echo $row['c_date1']?></td> 
                           <td><?php echo $row['mobno']?></td> 
                           <td>Clean area:<?php echo $row['c_yn']?><br>
                           water supply:<?php echo $row['c_yn1']?><br>
                           Power supply:<?php echo $row['c_yn2']?><br>
                           Communication system:<?php echo $row['c_yn3']?><br>
                           Health screening:<?php echo $row['c_yn4']?><br>
                           Waste disposal:<?php echo $row['c_yn5']?><br>
                           Hand washing:<?php echo $row['c_yn6']?><br></td> 
                        <td><a href="approve_camp_request.php?id=<?php echo $row['id'] ?>&email=<?php echo $row['email'] ?>" style="text-decoration: none;">APPROVE</a></td> 
                        <td><a href="reject_camp_request.php?id=<?php echo $row['id'] ?>&email=<?php echo $row['email'] ?>"style="text-decoration: none;">REJECT</a></td> 
                    </tr>
                
            <?php 
                } 
            ?>
        </tbody>
        </table>
    </div>
 

 


    <script>
        $(document).ready(function () {
            $("#tableSearch").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <!-- Your existing scripts -->

        
            </div>
		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
    </body>
</html>