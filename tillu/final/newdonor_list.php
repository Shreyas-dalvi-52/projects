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
    
        <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
        
        <!-- Get Pro Button -->
        <!-- <ul class="pro-features">
            <a class="get-pro" href="#">Get Pro</a>
            <li class="big-title">Pro Version Available on Themeforest</li>
            <li class="title">Pro Version Features</li>
            <li>2+ premade home pages</li>
            <li>20+ html pages</li>
            <li>Color Plate With 12+ Colors</li>
            <li>Sticky Header / Sticky Filters</li>
            <li>Working Contact Form With Google Map</li>
            <div class="button">
                <a href="http://preview.themeforest.net/item/mediplus-medical-and-doctor-html-template/full_screen_preview/26665910?_ga=2.145092285.888558928.1591971968-344530658.1588061879" target="_blank" class="btn">Pro Version Demo</a>
                <a href="https://themeforest.net/item/mediplus-medical-and-doctor-html-template/26665910" target="_blank" class="btn">Buy Pro Version</a>
            </div>
        </ul> -->
    
        <!-- Header Area -->
        <header class="header" >
            <!-- Topbar -->
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5 col-12">
                            <B>JANKALYAN BLOOD CENTER A.NAGAR</B>
                            <!-- Contact -->
                            <!-- <ul class="top-link">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Doctors</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul> -->
                            <!-- End Contact -->
                        </div>
                        <div class="col-lg-6 col-md-7 col-12">
                            <!-- Top Contact -->
                            <ul class="top-contact">
                                <li><i class="fa fa-phone"></i>+880 1234 56789</li>
                                <li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">support@yourmail.com</a></li>
                            </ul>
                            <!-- End Top Contact -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Topbar -->
            <!-- Header Inner -->
            <div class="header-inner">
                <div class="container">
                    <div class="inner">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12">
                                <!-- Start Logo -->
                                <div class="logo">
                                    <a href="index.html"><img src="img/bloodbank.jpeg" alt="#" width="150px" height="31.17px"></a>
                                </div>
                                <!-- End Logo -->
                                <!-- Mobile Nav -->
                                <div class="mobile-nav"></div>
                                <!-- End Mobile Nav -->
                            </div>
                            <div class="col-lg-7 col-md-9 col-12">
                                <!-- Main Menu -->
                                <div class="main-menu">
                                    <nav class="navigation">
                                        <ul class="nav menu">
                                            <li class="active"><a href="#">Home</a>
                                                <!-- <ul class="dropdown">
                                                    <li><a href="index.html">Home Page 1</a></li>
                                                </ul> -->
                                            </li>
                                            <li><a href="#">Login <i class="icofont-rounded-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Admin Login</a></li>
                                                    <li><a href="#">Donor Login</a></li>
                                                    <li><a href="#">Hospital Login</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Blood Requisition </a></li>
                                            <li><a href="#">Camp <i class="icofont-rounded-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Organize camp</a></li>
                                                    <li><a href="#">Running camps</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Donor List </a>
                                            </li>
                                            <li><a href="#">About </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!--/ End Main Menu -->
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Header Inner -->
        </header>
        <!-- End Header Area -->
        
        
        <!--/ End Why choose -->
        
        <!-- Start Call to action -->
        <!-- <section class="call-action overlay" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="content">
                            <h2>Do you need Emergency Medical Care? Call @ 1234 56789</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec gravida.</p>
                            <div class="button">
                                <a href="#" class="btn">Contact Now</a>
                                <a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--/ End Call to action -->
        
        <!-- Start portfolio -->
        <!-- <section class="portfolio section" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>We Maintain Cleanliness Rules Inside Our Hospital</h2>
                            <img src="img/section-img.png" alt="#">
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="owl-carousel portfolio-slider">
                            <div class="single-pf">
                                <img src="img/pf1.jpg" alt="#">
                                <a href="portfolio-details.html" class="btn">View Details</a>
                            </div>
                            <div class="single-pf">
                                <img src="img/pf2.jpg" alt="#">
                                <a href="portfolio-details.html" class="btn">View Details</a>
                            </div>
                            <div class="single-pf">
                                <img src="img/pf3.jpg" alt="#">
                                <a href="portfolio-details.html" class="btn">View Details</a>
                            </div>
                            <div class="single-pf">
                                <img src="img/pf4.jpg" alt="#">
                                <a href="portfolio-details.html" class="btn">View Details</a>
                            </div>
                            <div class="single-pf">
                                <img src="img/pf1.jpg" alt="#">
                                <a href="portfolio-details.html" class="btn">View Details</a>
                            </div>
                            <div class="single-pf">
                                <img src="img/pf2.jpg" alt="#">
                                <a href="portfolio-details.html" class="btn">View Details</a>
                            </div>
                            <div class="single-pf">
                                <img src="img/pf3.jpg" alt="#">
                                <a href="portfolio-details.html" class="btn">View Details</a>
                            </div>
                            <div class="single-pf">
                                <img src="img/pf4.jpg" alt="#">
                                <a href="portfolio-details.html" class="btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--/ End portfolio -->
        
        <!-- Start service -->
        
        <!--/ End service -->
        

        
        <!-- Footer Area -->
       <div class="container">
        <input class="form-control mb-4" id="tableSearch" type="text" placeholder="Search list items">
        <table style="border: 1px solid black;"class="table table-bordered table-striped">
            <thead><tr>
<TH>SR NO.</TH>
<TH>NAME</TH>
<TH>DOB</TH>
<TH>GENDER</TH>
<TH>BLOOD G</TH>
<TH>MOB NO.</TH>

 </tr></thead>
 <tbody id="myTable">
 <?php
    $conn= mysqli_connect("localhost", "root", "", "LS");
  $q="select * from DONATE_BLOOD where DONATION_STATUS='COMPLETED'";
  $res=mysqli_query($conn,$q);//res is array
  
  $sr=1;
while($row=mysqli_fetch_assoc($res))
 {
     
?>
<tr>
<td  style="width: 60px;text-align: center"><?php echo $sr++;?></td>
<td><?php echo $row["NAME"];?></td>
<td><?php echo $row["DOB"];?></td>
<td><?php echo $row["GENDER"];?></td>
<td><?php echo $row["BLOOD_GROUP"];?></td>
<td><?php echo $row["MOB_NO"];?></td>
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