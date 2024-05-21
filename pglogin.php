<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Find a Perfect PG&Hostels</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <div class="container-xxl p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Database Connection Start-->
    <?php include 'partials/_dbconnect.php'; ?>
    <!-- Database Connection End-->

    <!-- Navbar Start -->
    <?php include './partials/_header.php'; ?>
    <!-- Navbar End -->

    <div class="container py-3">
      <form action="./partials/_handlepgLogin.php" method="post">
        <div id="login-row" class="row justify-content-center align-items-center">
          <div id="login-column" class="col-md-6">
            <div id="login-box" class="col-md-12">
              <form id="login-form" class="form" action="" method="post">
                <h3 class="text-center text-info">Login</h3>
                <div class="form-group py-2">
                  <label for="username" class="text-info">Email Id:</label><br>
                  <input type="email" id="email" name="email" class="form-control">
                </div>
                <div class="form-group py-2">
                  <label for="password" class="text-info">Password:</label><br>
                  <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="form-group py-2">
                  <input type="submit" id="submit" name="submit" class="btn btn-info btn-md" value="Submit">
                </div>
                <div id="register-link" class="text-right">
                  <a href="./pgsignup.php" class="text-info">Register here</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </form>
    </div>



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5 align-items-center">
          <div class="row g-5">
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Get In Touch</h5>
              <p class="mb-2">
                <i class="fa fa-map-marker-alt me-3"></i>123 Street,
              </p>
              <p class="mb-2">
                <i class="fa fa-phone-alt me-3"></i>+012 345 67890
              </p>
              <p class="mb-2">
                <i class="fa fa-envelope me-3"></i>info@example.com
              </p>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Quick Links</h5>
              <a class="btn btn-link text-white-50" href="">About Us</a>
              <a class="btn btn-link text-white-50" href="">Contact Us</a>
              <a class="btn btn-link text-white-50" href="">Our Services</a>
              <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
              <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
            </div>
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Photo Gallery</h5>
              <div class="row g-2 pt-2">
                <div class="col-4">
                  <img class="img-fluid rounded bg-light p-1" src="img/property-1.jpg" alt="" />
                </div>
                <div class="col-4">
                  <img class="img-fluid rounded bg-light p-1" src="img/property-2.jpg" alt="" />
                </div>
                <div class="col-4">
                  <img class="img-fluid rounded bg-light p-1" src="img/property-3.jpg" alt="" />
                </div>
                <div class="col-4">
                  <img class="img-fluid rounded bg-light p-1" src="img/property-4.jpg" alt="" />
                </div>
                <div class="col-4">
                  <img class="img-fluid rounded bg-light p-1" src="img/property-5.jpg" alt="" />
                </div>
                <div class="col-4">
                  <img class="img-fluid rounded bg-light p-1" src="img/property-6.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Newsletter</h5>
              <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
              <div class="position-relative mx-auto" style="max-width: 400px">
                <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" />
                <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                  SignUp
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>