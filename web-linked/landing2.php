<?php session_start(); /* Starts the session */

if (!isset($_SESSION['UserData']['Password'])) {
	header("location:index.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>List Private Sheet</title>
	<link rel="shortcut icon" href="image/png/favicon.png" type="image/x-icon">
	<!-- Bootstrap , fonts & icons  -->
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/icon-font/css/style.css">
	<link rel="stylesheet" href="fonts/typography-font/typo.css">
	<link rel="stylesheet" href="fonts/fontawesome-5/css/all.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<!-- Plugin'stylesheets  -->
	<link rel="stylesheet" href="plugins/aos/aos.min.css">
	<link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
	<link rel="stylesheet" href="plugins/nice-select/nice-select.min.css">
	<link rel="stylesheet" href="plugins/slick/slick.min.css">
	<!-- Vendor stylesheets  -->
	<link rel="stylesheet" href="css/settings.css">
	<link rel="stylesheet" href="css/landing.css">
	<!-- Custom stylesheet -->
	<link rel="stylesheet" href="css/custom.css">
	<link rel="icon" href="image/png/telkom_idn.png">

</head>

<body>
	<div id="loading">
		<div class="load-circle"><span class="one"></span></div>
	</div>
	<div class="site-wrapper overflow-hidden dark-theme">
		<!-- Header Area -->
		<header class="site-header header-8 bg--conflower-blue sticky-header">
			<div class="container-fluid pr-lg--30 pl-lg--30">
				<nav class="navbar site-navbar offcanvas-active navbar-expand-lg navbar-light mb--30">
					<!-- Brand Logo-->
					<div class="container-fluid"><a class="navbar-brand" style="color: #ECECEC;" href=""><h3>CRM</h3></a></div>
					<div class="collapse navbar-collapse" id="mobile-menu">
						<div class="navbar-nav ml-lg-auto mr--10">
							<button class="btn-close navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="true" aria-label="Toggle navigation">
								<i class="icon icon-simple-remove"></i>
							</button>
						</div>
					</div>
					<div class="header-btns ml-auto ml-lg-0"><a class="btn btn--primary btn-header hvr-bounce-to-left goto" href="logout.php">Kembali</a></div>
					<button class="navbar-toggler btn-close-off-canvas toggler-white" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
						<i class="icon icon-simple-remove icon-close"></i>
						<i class="icon icon-menu-34 icon-burger"></i>
					</button>
				</nav>
			</div>
		</header>
		<!-- Service Section -->
		<div class="omga-08__service-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="section-title text-center">
							<h2 data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="2000">Linked Spreadsheet
								<span class="text--primary">(Private)</span>
							</h2>
						</div>
					</div>
				</div>
				<div class="row mt-lg--45">
					<div class="col-lg-4 mt--30" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
						<a href="https://docs.google.com/spreadsheets/d/1A99u8G21HWJKWES-ITkutwgOjCIyVzh80Pa8uCzNHnQ/edit?usp=sharing" target="_blank" class="service-card--1">
							<h3 class="card-title">Stock Sovenir</h3>
							<i class="fas fa-chevron-circle-right"></i>
						</a>
					</div>
					<div class="col-lg-4 mt--30" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="200">
						<a href="https://docs.google.com/spreadsheets/d/1cSC7pMg3bS7VyS6VUHwDumAH_XyMDC5rHr0-AGyusQo/edit?usp=sharing" target="_blank" class="service-card--1">
							<h3 class="card-title">Pertanggungan CRM</h3>
							<i class="fas fa-chevron-circle-right"></i>
						</a>
					</div>
					<div class="col-lg-4 mt--30" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="400">
						<a href="https://docs.google.com/spreadsheets/d/1ZbtGhViW9zJ4WRQLufR7pEcEBqDYWnM0WgXvB0cGw0g/edit?usp=sharing" target="_blank" class="service-card--1">
							<h3 class="card-title">Proker CRM TR3</h3>
							<i class="fas fa-chevron-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-fixed">
			<div class="footer-section footer-1 bg-indigo omga-footer--8">
				<div class="copyright-area">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-sm-6  text-sm-left text-center mt-2 mb-sm-0">
								<label for="">
									<p>@CRM3 2022</p>
								</label>
							</div>
							<div class="col-sm-6 text-sm-right text-center">
								<ul class="social-icons">
									<li><a href="https://twitter.com/TelkomJabar"><i class="fab fa-twitter"></i></a></li>
									<li><a href="https://www.linkedin.com/company/telekomunikasi-indonesia/mycompany/"><i class="fab fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Vendor Scripts -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<script src="plugins/jquery/jquery-migrate.min.js"></script>
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Plugin's Scripts -->
	<script src="plugins/fancybox/jquery.fancybox.min.js"></script>
	<script src="plugins/nice-select/jquery.nice-select.min.js"></script>
	<script src="plugins/aos/aos.min.js"></script>
	<script src="plugins/slick/slick.min.js"></script>
	<!-- Activation Script -->
	<script src="js/custom.js"></script>
</body>