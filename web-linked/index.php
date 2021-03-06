<?php session_start();

/* Check Login form submitted */
if (isset($_POST['Submit'])) {
  $_SESSION['started']=true;
  /* Define username and associated password array */
  $logins = array('crm321' => "password1");

  /* Check and assign submitted Username and Password to new variable */
  // $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
  $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

  /* Check Username and Password existence in defined array */
  if (isset($logins[$Password])) {
    /* Success: Set session variables and redirect to Protected page  */
    $_SESSION['UserData']['Password'] = $logins[$Password];
    header("location:landing2.php");
    exit;
  } else {
    /*Unsuccessful attempt: Set error message */
    $msg = "<span >Invalid password</span>";
  }
}

if (isset($_POST['Submit'])) {
  $_SESSION['started']=true;
  /* Define username and associated password array */
  $masuk = array('crm321' => "password1");

  /* Check and assign submitted Username and Password to new variable */
  // $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
  $pass = isset($_POST['katasandi']) ? $_POST['katasandi'] : '';

  /* Check Username and Password existence in defined array */
  if (isset($masuk[$pass])) {
    /* Success: Set session variables and redirect to Protected page  */
    $_SESSION['UserData']['katasandi'] = $masuk[$pass];
    header("location:landing1.php");
    exit;
  } else {
    /*Unsuccessful attempt: Set error message */
    $msg = "<span >invalid password</span>";
  }
}
?>

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
  <!-- Plugin'stylesheets  -->
  <!-- <link rel="stylesheet" href="plugins/aos/aos.min.css">
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="plugins/nice-select/nice-select.min.css">
  <link rel="stylesheet" href="plugins/slick/slick.min.css"> -->
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
    <!-- Service Section -->

      <!-- Case Study Section -->
      <div class="omga-08__case-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="section-title text-center">
                <h3 data-aos="fade-up" data-aos-duration="800" data-aos-once="true" data-aos-delay="500">Link Operasional CRM
                </h3>
                <p data-aos="fade-up" data-aos-duration="2100" data-aos-once="true" data-aos-delay="2100">Pilih akses link yang diperlukan :</p>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 mb--30 mt--30 " data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
              <div class="case-card--1">
                <div class="c-card-img">
                  <img src="image/png/telkom_idn (1).png" alt="">
                  <a href="" class="cc-btn btn--primary" data-bs-toggle="modal" data-bs-target="#modalku2">View</a>
                </div>
                <div class="c-card-text">
                  <div class="shape">
                    <svg xmlns="http://www.w3.org/2000/svg" height="22" viewBox="0 0 540 22">
                      <g>
                        <g clip-path="url(#clip-9C6BB70E-720F-46FC-BAD4-9064EA06E219)">
                          <path d="M0 0s233.088 28.458 539.999 0c306.91-28.458 0 22 0 22H.06" />
                        </g>
                      </g>
                    </svg>
                  </div>
                  <h3 class="c-title text-center">Open.</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 mb--30 mt--30 " data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
              <div class="case-card--1">
                <div class="c-card-img">
                  <img src="image/png/telkom_idn (1).png" alt="">
                  <a href="" class="cc-btn btn--primary" data-bs-toggle="modal" data-bs-target="#modalku">View</a>
                </div>
                <div class="c-card-text">
                  <div class="shape">
                    <svg xmlns="http://www.w3.org/2000/svg" height="22" viewBox="0 0 540 22">
                      <g>
                        <g clip-path="url(#clip-9C6BB70E-720F-46FC-BAD4-9064EA06E219)">
                          <path d="M0 0s233.088 28.458 539.999 0c306.91-28.458 0 22 0 22H.06" />
                        </g>
                      </g>
                    </svg>
                  </div>
                  <h3 class="c-title text-center">Private.</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
    <div class="modal" tabindex="-1" id="modalku">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="font-weight:bold">Password</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post" name="Login_Form">
            <div class="modal-body">
              <?php if (isset($msg)) { ?>
                <div class="alert alert-danger" role="alert"><?= $msg; ?></div>
              <?php } ?>
              <td>
                <input style="width: 20rem; justify-content: center;" type="password" name="Password" class="Input">
              </td>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="Submit" value="Login" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <!-- private -->
    <div class="modal" tabindex="-1" id="modalku2">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="font-weight:bold">Password</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post" name="Login_Form">
            <div class="modal-body">
              <?php if (isset($msg)) { ?>
                <div class="alert alert-danger" role="alert"><?= $msg; ?></div>
              <?php } ?>
              <td>
                <input style="width: 20rem; justify-content: center;" type="password" name="katasandi" class="Input">
              </td>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="Submit" value="Login" class="btn btn-primary">Submit</button>
            </div>
          </form>
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

</html>