
<?php require('connection.php');
session_start();
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
		<style>
            .rep_title {
            border:none;
            visibility: invisible;
            background: transparent;
        }
        
 		
            @media print{
                .image{
                    visibility: hidden;
                    height: 0px;
                }
                .header{
                    visibility: hidden;
                    height: 0px;
                }
                #myTable{
                    margin-left: 10px;
                    visibility: visible;
                    color:black;
                    /* margin-top:10px; */
                    /* position: absolute; */
                }
                
            }
</style>
    </head>	
	<body>
		<?php
		require('admin_dash.html');?>
    <!-- Your existing body content -->

<div class="container">
    <div class="rep_title"style="height: 0px;visibility:hidden;">
        <p>Report of <input type="text" name="t1" id="t1" value="<?php echo $type ?>">From <input type="text" name="t2" id="t2" >To <input type="text" name="t3" id="t3" ><p>
    </div>
	<div class="image">
		<form method="POST">
		<div >
		 <label>From Date</label>
         <input type="date" id="fromdate" name="fromdate" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label>To Date</label>&nbsp;&nbsp;&nbsp;
         <input type="date" id="todate" name="todate" required ><br><br>
         <label for="s1">Select type</label><br>
         <select name="s1" id="s1" style="display:block" >
         	<option value="" disabled selected>--SELECT--</option>
         	<option value="donations">Donations</option>
         	<option value="camps">Camps</option>
         	<option value="requisition">Requisition</option>
           
         </select><br>
         <!-- <div class="nice-select" tabindex="0"><span class="current">--SELECT--</span>
	<ul class="list">
		<li data-value="" class="option selected focus">--SELECT--</li>
		<li data-value="donations" class="option">Donations</li>
		<li data-value="camps" class="option">Camps</li>
		<li data-value="requisition" class="option">Requisition</li>
        <li data-value="staff" class="option">Staff added</li>
	</ul></div> -->
         <input type="submit"  class="btn btn-primary profile-button" name="submit"  value="SUBMIT">
         
        </div>
    </form>
    </div>
         <?php
         if(isset($_POST['submit'])) 
         {
            $type=$_POST["s1"];
            $type=$_POST['s1'];
            $from_date=$_POST['fromdate'];
            $to_date=$_POST['todate'];
            $new_from=date("Y-m-d",strtotime($from_date));
            $new_to=date("Y-m-d",strtotime($to_date));
            echo"<script>document.getElementById('fromdate').value = '$new_from';
            document.getElementById('todate').value = '$new_to';
            selectElement('s1','$type'))</script>";

            if($new_from<$new_to)
            {
                if($type=="camps")
                {
                    ?>
                    
                    <center><table id="myTable"class="table table-bordered table-striped">
                    <th>SR NO.</th>
                    <th >NAME</th>
                    <th>ADDRESS</th>
                    <th>FROM_DATE</th>
                    <th>TO_DATE</th>
                    <th>MOB_NO</th>
                    <th>STATUS</th>
                    <th>RUN STATUS</th>
                    <?php
                        $conn= mysqli_connect("localhost", "root", "", "CPE");
                        $q= "select * from CAMP where `c_date`  between '$from_date' and '$to_date'";
                        $res= mysqli_query($conn, $q);
                        $sr=1;
                        while( $row= mysqli_fetch_assoc($res) ) //associative array
                        {
                        ?>
                            <tr>
                                <td ><?php echo $sr++;?></td>
                                <td><?php echo $row['org_name']?></td>   <!-- for printing a element in table -->
                                <td><?php echo $row['org_address']?></td>
                                <td><?php echo $row['c_date']?></td> 
                                <td><?php echo $row['c_date1']?></td> 
                                <td><?php echo $row['mobno']?></td> 
                                
                                <td><?php echo $row['STATUS']?></td> 
                                <td><?php echo $row['RUN_STATUS']?></td>
                                
                            </tr>
                        
                    <?php 
                        } 
                    ?>
                
                    </table>
            
                    </center>
                <?php 
                }
                elseif ($type=="requisition")
                {
                ?>
                    <center>
                    <table id="myTable"class="table table-bordered table-striped">
        
                <TH>PATIENT NAME</TH>
                <TH>HOSPITAL NAME</TH>
                <TH>BLOOD GROUP</TH>
                <TH>BLOOD QUANTITY</TH>
                <TH>DATE</TH>
                <TH>REASON</TH>
                <th>STATUS</th>
                <th>GIVEN BG</th>



                
                <?php
                    $conn= mysqli_connect("localhost", "root", "", "CPE");
                $q="select * from hospitalemergency WHERE Date between '$from_date' and '$to_date'";
                $res=mysqli_query($conn,$q);//res is array
                
                
                while($row=mysqli_fetch_assoc($res))
                {
                    
                ?>
                <tr>

                <td><?php echo $row["Patientname"];?></td>
                <td><?php echo $row["Hospitalname"];?></td>

                <td><?php echo $row["Bloodgroup"];?></td>
                <td><?php echo $row["BloodQuantity"];?></td>
                <td><?php echo $row["Date"];?></td>
                <td><?php echo $row["Reason"];?></td>
                <td><?php echo $row["status"];?></td>
                <td><?php echo $row["Given_bg"];?></td>

                </tr>

                <?php
                }
                ?>
        
        
                </table>
                    </center>
                        


                <?php
                }
                elseif($type=="donations")
                {
                ?>
                    <center>
                    <table id="myTable"class="table table-bordered table-striped">
                    <th >NAME</th>
                    <th>DOB</th>
                    <th>BLOOD GRP</th>
                    <th>GENDER</th>
                    <th>DISTRICT</th>
                    <th>MOB_NO</th>
                    <th>DATE</th>
                    <th>STATUS</th>
                    <?php
                    $conn= mysqli_connect("localhost", "root", "", "CPE");
                
                        $q= "select * from DONATE_BLOOD where `DATE`  between '$from_date' and '$to_date'";
                        $res= mysqli_query($conn, $q);
                    
                        
                    
                        while( $row= mysqli_fetch_assoc($res) ) //associative array
                        {
                                
                        
                        ?>
                            <tr>
                                <td><?php echo $row['NAME']?></td>   <!-- for printing a element in table -->
                                <td><?php echo $row['DOB']?></td>
                                <td><?php echo $row['BLOOD_GROUP']?></td> 
                                <td><?php echo $row['GENDER']?></td> 
                                <td><?php echo $row['DISTRICT']?></td>
                                <td><?php echo $row['MOB_NO']?></td>
                                <td><?php echo $row['DATE']?></td>
                                <td><?php echo $row['DONATION_STATUS']?></td> 
                                
                            </tr>
                        
                    <?php 
                        } 
                    ?>
                
                </table>
            
                </center>

            <?php
                }
            }
            else
            {
                echo"<script>alert('Enter valid dates')</script>";
            }
    }


?>
    

        <!-- <input class="form-control mb-4" id="tableSearch" type="text" placeholder="Search list items"> -->
        <!-- <table style="border: 1px solid black;" class="table table-bordered table-striped">
            <thead>
                <th>NAME</th>
                <th>BLOOD GRP</th>
                <th>MOB_NO</th>
                <th>DATE</th>
                <th>COMPLETE</th>
            </thead>
            <tbody id="myTable">
                <?php
                $q = "select * from DONATE_BLOOD where DONATION_STATUS='INITIATED'";
                $res = mysqli_query($conn, $q);
                while ($row = mysqli_fetch_assoc($res)) {
                ?>
                    <tr>
                        <td><?php echo $row['NAME'] ?></td>
                        <td><?php echo $row['BLOOD_GROUP'] ?></td>
                        <td><?php echo $row['MOB_NO'] ?></td>
                        <td><?php echo $row['DATE'] ?></td>
                        <td><a href="donorcerti1.php?name=<?php echo $row['NAME']; ?>&mob=<?php echo $row['MOB_NO']; ?>" style="text-decoration: none;">COMPLETE</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table> -->
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
		<!-- <script src="js/niceselect.js"></script> -->
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