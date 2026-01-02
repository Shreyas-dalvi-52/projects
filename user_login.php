<?php
include "connection.php";
session_start();
error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['login']))
{
	// echo "set";
    $_SESSION['email']=$_POST['email'];
    $_SESSION['pass']=$_POST['pass'];
     echo"<script>
          window.location.href='user_dash.php';</script>";	
}
elseif(isset($_POST['register']))
{
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	if($_POST['pass']==$_POST['cpass'])
	{

		$query="select * from DONOR where EMAIL='$email' and PASSWORD='$pass'";
		$result=mysqli_query($conn,$query);
		$row=mysqli_fetch_assoc($result);
		if($row>0)
		{
			echo "<script>alert('Email already registered');window.location.href='user_login.php';</script>";
		}
		else
		{
			$query="insert into DONOR(`EMAIL`,`PASSWORD`) values('$email','$pass')";
			$result=mysqli_query($conn,$query);
			echo"<script>alert('Donor Registered, Enter details to Login');
          window.location.href='user_login.php';</script>";	
		}

	}
}
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
	<script>
			function hide()
			{
				document.getElementById('pass_div').style.display="none";
				document.getElementById('forgot_pass').style.display="none";
				document.getElementById('login1').value="Send password";
				document.getElementById('signup_div').style.display="none";
				document.getElementById('form1').action="forgotpass.php";
				document.getElementById('pass').required=false;
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
		<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<link rel="stylesheet" href="css/icofont1.css">
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
		<!-- login css and js -->
		<link rel="stylesheet" href="login/style.css" />
		
    </head>
    <body onload="document.getElementById('cont1').classList.add('show')">
	
		<!-- Preloader -->
        <!-- <div class="preloader">
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
        </div> -->
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
		
		<!-- login start -->
		<section class="home" id="cont1">
			<div class="form_container">
			  <a href="index.php"><i class="uil uil-times form_close"></i></a>
			  <!-- Login From -->
			  <div class="form login_form">
				<form method="POST" id="form1">
				  <h2>Donor Login</h2>
	  
				  <div class="input_box">
					<input type="email"  name="email"placeholder="Enter your email" required />
					<i class="uil uil-envelope-alt email"></i>
				  </div>
				  <div class="input_box"id="pass_div">
					<input type="password" name="pass" id="pass"placeholder="Enter your password" required />
					<i class="uil uil-lock password"></i>
					<!-- <i class="uil uil-eye-slash pw_hide"></i> -->
				  </div>
	  
				  <div class="option_field">
					<!-- <span class="checkbox">
					  <input type="checkbox" id="check" />
					  <label for="check">Remember me</label>
					</span> -->
					<a href="javascript:hide()" class="forgot_pw" id="forgot_pass">Forgot password?</a>
				  </div>
	  
				  <input type="submit" name="login" id="login1"value="Login Now" class="button">
	  
				  <div class="login_signup" id="signup_div">Don't have an account? <a style="cursor:pointer;color:red"id="signup">Signup</a></div>
				</form>
			  </div>
	  
			  <!-- Signup From -->
			  <div class="form signup_form">
				<form method="POST">
				  <h2>Signup</h2>
	  
				  <div class="input_box">
					<input type="email" name="email" placeholder="Enter your email" required />
					<i class="uil uil-envelope-alt email"></i>
				  </div>
				  <div class="input_box">
					<input type="password" name="pass"placeholder="Create password" required />
					<i class="uil uil-lock password"></i>
					<!-- <i class="uil uil-eye-slash pw_hide"></i> -->
				  </div>
				  <div class="input_box">
					<input type="password" name="cpass"placeholder="Confirm password" required />
					<i class="uil uil-lock password"></i>
					<!-- <i class="uil uil-eye-slash pw_hide"></i> -->
				  </div>
	  
				  <input type="submit" name="register" class="button"value="Signup Now">
	  
				  <div class="login_signup">Already have an account? <a style="cursor:pointer;color:red" id="login">Login</a></div>
				</form>
			  </div>
			</div>
		  </section><script src="login/script.js"></script>
		  
		  <!-- login end -->
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
									<a href="index.php"><img src="img/bloodbank.jpeg" alt="#" width="150px" height="31.17px"></a>
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
											<li><a style="cursor: pointer;">Login <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li id="form-open"style="cursor: pointer;"><a>Admin Login</a></li>
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
							

							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="#" class="btn">Donate Blood</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
	
		<!-- End Header Area -->
		
		<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/slider2.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>We Provide <span>Blood</span> Services That You Can <span>Trust!</span></h1>
									<p>we adopt fully automated,robotic testing of blood to avoid human error.</p>
									<div class="button">
										<a href="#" class="btn">Donate Blood</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/slider.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>We Provide <span>Blood</span> Services That You Can <span>Trust!</span></h1>
									<p>Transfusion transmitted infection(TTI) testing mainly for HIV,Hepatitis B, C & Malaraia, Blood component seperation strictly in sterile & aseptic condition under laminar flow and U.V light. </p>									
									<div class="button">
										<a href="#" class="btn">Donate Blood</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start End Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/slider3.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>We Provide <span>Blood</span> Services That You Can <span>Trust!</span></h1>
									<p>We adopt advanced gel technology for crossmatching of blood samples.</p>									
									<div class="button">
										<a href="#" class="btn">Donate Blood</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->
		
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