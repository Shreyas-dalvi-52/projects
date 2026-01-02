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

require("connection.php");
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
    	<style type="text/css">
        /* Add this CSS in your existing stylesheet or create a new CSS file */

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
<script src="https://unpkg.com/xlsx@0.15.3/dist/xlsx.full.min.js"></script>
	</script>
	</head>
<?php require("admin_dash.html");?>
<div class="container">
        <!-- Your existing body content -->

        <input class="form-control mb-4" id="tableSearch" type="text" placeholder="Search list items">
        <table id="myTable"class="table table-bordered table-striped">
    	  <thead><tr>
            <th >ID</th>
            <th>NAME</th>
            <th>MOB_NO</th>
            <th>   DOB   </th>
            <th>JOIN_DATE</th>
            <th>DESIGNATION</th>
            <th>SHIFT</th>
            <th>SALARY</th>
            <th>EDIT</th>
            <th>DELETE</th></tr></thead>
            <tbody id="myTable">
            <?php
                
                $q= "select * from STAFF_MAN;";
                $res= mysqli_query($conn, $q);
                while( $row= mysqli_fetch_assoc($res) ) //associative array
                {
                         
                
                ?>
                    <tr>
                        <td><?php echo $row['id']?></td>   <!-- for printing a element in table -->
                        <td><?php echo $row['fname']?></td>
                        <td><?php echo $row['mobileno']?></td> 
                        <td><?php echo $row['dob']?></td>
                        <td><?php echo $row['jd']?></td>
                        <td><?php echo $row['designation']?></td>
                        <td><?php echo $row['shift']?></td>
                        <td><?php echo $row['salary']?></td> 
                        <td><a href="staff_man.php?id=<?php echo $row['id'] ?>" style="text-decoration: none;">EDIT</a></td> 
                        <td><a href="deletestaff.php?id=<?php echo $row['id'] ?>" style="text-decoration: none;">DELETE</a></td>
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