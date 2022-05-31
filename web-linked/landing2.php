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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>
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
<?php
include('config.php');
$query = "SELECT * FROM private_link";
$get = mysqli_query($koneksi, $query);
?>

<body>
	<div id="loading">
		<div class="load-circle"><span class="one"></span></div>
	</div>
	<div class="site-wrapper overflow-hidden light-theme">
		<!-- Header Area -->
		<header class="site-header header-8 bg--conflower-blue ">
			<div class="container-fluid pr-lg--30 pl-lg--30">
				<nav class="navbar site-navbar navbar-expand-lg navbar-light mb--30">
					<!-- Brand Logo-->
					<div class="brand-logo"><img src="./image/telkom/Logo-Telkom-2015.png" style="width: 200x; height: 100px" alt=""></div>
					<div class="brand-logo2"><img src="./image/telkom/BUMN2.png" style="width: 100x;" alt=""></div>
					<!-- <div class="brand-logo"><a href="javascript:"><img src="./image/png/logo-white.png" alt=""></a></div> -->
					<div class="collapse navbar-collapse" id="mobile-menu">
						<div class="navbar-nav ml-lg-auto mr--10">
							<ul class="navbar-nav main-menu">
								<div class="brand-logo2"><img src="./image/telkom/Logo IndiHome.png" style="width: 100px;" alt=""></div>
							</ul>
							<button class="btn-close navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="true" aria-label="Toggle navigation">
								<i class="icon icon-simple-remove"></i>
							</button>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<div class="container-fluid pr-lg--30 pl-lg--30">
			<nav class="navbar site-navbar navbar-expand-lg navbar-light mb--30">
				<!-- Brand Logo-->
				<div class="collapse navbar-collapse" id="mobile-menu">
					<div class="navbar-nav ml-lg-auto mr--10">
						<button class="btn-close navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="true" aria-label="Toggle navigation">
							<i class="icon icon-simple-remove"></i>
						</button>
					</div>
				</div>
				<div class="header-btns ml-auto ml-lg-0">
					<ul class="navbar-nav main-menu">
						<li class="nav-item dropdown">
							<a class="btn btn--primary btn-header hvr-bounce-to-left goto nav-link dropdown-toggle" id="navbarDropdown" href="#features" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
							<ul class="menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
								<li class="drop-menu-item">
									<a class="" href="add_private.php">Baru+</a>
								</li>
								<li class="drop-menu-item">
									<a class="" href="delete_private.php">Hapus</a>
								</li>
								<hr>
								<li class="drop-menu-item">
									<a class="" href="logout.php">Kembali</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- Service Section -->
		<div class="omga-08__service-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="section-title text-center">
							<h3 data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="2000">
								Link Operasional CRM (Private)
							</h3>
							<p data-aos="fade-up" data-aos-duration="2100" data-aos-once="true" data-aos-delay="2100">
								Pilih akses link yang diperlukan :</p>
						</div>
					</div>
				</div>
				<div class="mt-lg--45">
					<div class="row mt-lg--30 mb-lg--45">
						<?php
						$n = mysqli_num_rows($get);
						if ($n !== 0) {
							while ($gets = mysqli_fetch_assoc($get)) { ?>
								<div class="col-lg-4 mt--30" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
									<a id="<?= $gets['id'] ?>" href="<?= $gets['link'] ?>" style="text-decoration:none ;" target="_blank" class="service-card--1">
										<h3 class="card-title"><?= $gets['nama_button'] ?></h3>
										<i class="fas fa-chevron-circle-right"></i>
									</a>
								</div>
						<?php
							}
						} else {
							echo "<div class='text-center' style='width:100%;padding-top:7rem;padding-bottom:20rem'><h1 class='text-center'>Belum Ada link operasional</h1>
									<hr style='height:3px;border-width:0;color:RoyalBlue'>
									<p class='fw-normal text-center'>Silahkan Menambahkan link</p>";
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<div>
			<div class="footer">
				<div class="footer-section fixed-bottom footer-1 bg-indigo omga-footer--8">
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
										<li><a href="https://twitter.com/TelkomJabar"><i class="fab fa-twitter"></i></a>
										</li>
										<li><a href="https://www.linkedin.com/company/telekomunikasi-indonesia/mycompany/"><i class="fab fa-linkedin"></i></a></li>
									</ul>
								</div>
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