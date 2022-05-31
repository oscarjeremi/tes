<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Sheet</title>
    <link rel="shortcut icon" href="image/png/favicon.png" type="image/x-icon">
    <!-- Bootstrap , fonts & icons  -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/icon-font/css/style.css">
    <link rel="stylesheet" href="fonts/typography-font/typo.css">
    <link rel="stylesheet" href="fonts/fontawesome-5/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" href="css/delete.css">
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

$sql = "SELECT nama_button FROM private_link";
$hasil = $koneksi->query($sql);
?>

<body>
    <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>

    <div class="site-wrapper overflow-hidden light-theme">
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
                                    <a class="" href="">Hapus</a>
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
                            <h3 data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="2000">Link Operasional CRM
                            </h3>
                            <p data-aos="fade-up" data-aos-duration="2100" data-aos-once="true" data-aos-delay="2100">Pilih akses link yang dihapus :</p>
                        </div>
                    </div>
                </div>
                <div class="container-lg">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <!-- <h2>Employee <b>Details</b></h2> -->
                                    </div>
                                </div>
                            </div>
                            <?php
                            $n = mysqli_num_rows($get);
                            if ($n !== 0) { ?>

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php while ($gets = mysqli_fetch_assoc($get)) { ?>
                                            <tr>
                                                <td><?= $gets['nama_button'] ?></td>
                                                <td><a class="delete" data-bs-toggle="modal" data-bs-target="#modal<?=$gets['id']?>" title="Delete" href="deletion_private.php?id=<?= $gets['id'] ?>" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
                                            </tr>
                                            <div class="modal" tabindex="-1" id="modal<?=$gets['id']?>">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" style="font-weight:bold">Konfirmasi</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Hapus Button ini?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <a class="btn btn-primary" style="text-decoration: none;" href="deletion_private.php?id=<?= $gets['id'] ?>"> Submit</a>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            <?php

                            } else {
                                echo "<div style='width:100%;padding-top:7rem;padding-bottom:20rem'><h1 class='text-center'>Belum Ada link operasional</h1>
                                    <hr style='height:3px;border-width:0;color:RoyalBlue'>
                                    <p class='fw-normal text-center'>Silahkan Menambahkan link</p>";
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Case Study Section -->


            <!-- footer -->
            <div id="footer">
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

        <!--Modal Body-->




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

</html>