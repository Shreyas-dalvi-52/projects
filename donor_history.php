
<?php require('connection.php');
session_start();
error_reporting(0);
$id=$_GET['id'];
$query="select * from DONOR where id=$id";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$mail=$row['EMAIL'];
$mob=$row['MOB'];
$query="select * from DONATE_BLOOD where EMAIL='$mail' and MOB_NO='$mob' and DONATION_STATUS='COMPLETED'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
if($row>0)
{

$id1=$row['ID'];
}
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
    	<style type="text/css">/* Add this CSS in your existing stylesheet or create a new CSS file */
/* Add this CSS in your existing stylesheet or create a new CSS file */

/* Style for the table */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

/* Style for table header */
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

/* Style for the "COMPLETE" link in the last column */
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
        
		<?php
		require('user_dash.html');?>
    <!-- Your existing body content -->

    <div class="container">
        <input class="form-control mb-4" id="tableSearch" type="text" placeholder="Search list items">
        <table style="border: 1px solid black;" class="table table-bordered table-striped">
            <thead>
                <th>NAME</th>
                <th>BLOOD GRP</th>
                <th>MOB_NO</th>
                <th>DATE</th>
                <th>CERTIFICATE</th>
            </thead>
            <tbody id="myTable">
                <?php
                $q = "select * from DONATE_BLOOD where ID='$id1'";
                $res = mysqli_query($conn, $q);
                while ($row = mysqli_fetch_assoc($res)) {
                ?>
                    <tr>
                        <td><?php echo $row['NAME'] ?></td>
                        <td><?php echo $row['BLOOD_GROUP'] ?></td>
                        <td><?php echo $row['MOB_NO'] ?></td>
                        <td><?php echo $row['DATE'] ?></td>
                        <td><a href="certi1.php?id=<?php echo $row['ID'];?>&id1=<?php echo $id?>" style="text-decoration: none;">DOWNLOAD</a></td>
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

        
        </center>
   
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