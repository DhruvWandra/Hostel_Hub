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
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="./partials/style.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div class="container-xxl bg-white p-0">
      <!-- Spinner Start -->
      <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-border text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
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


        <div class="ucontainer">
          <div class="uforms-container">
            <div class="usignin-signup">
      
              <form action="./partials/_handleLogin.php" method="post" class="usign-in-form">
                <h2 class="utitle">Sign in</h2>
                <div class="uinput-field">
                  <i class="fas fa-user"></i>
                  <input type="text" placeholder="Username" id="username" name="username" />
                </div>
                <div class="uinput-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Password" id="password" name="password" />
                </div>
                <input type="submit" value="Login" class="ubtn solid" />
                <a style="text-decoration:none" href="../reset_pass.html">
                  <h6><p class="usocial-text">Forgot Password</p></h6>
                </a>
                <p class="usocial-text">Follow us on social platforms</p>
                <div class="usocial-media">
                  <a href="#" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="#" class="social-icon">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#" class="social-icon">
                    <i class="fab fa-google"></i>
                  </a>
                  <a href="https://www.instagram.com/chiragjagani09/" class="social-icon">
                    <i class="fab fa-instagram fa-lg"></i>
                  </a>
                </div>
              </form>
      
              <form action="./partials/_handleSignup.php" method="post" class="usign-up-form">
                <h2 class="utitle">Sign up</h2>
                <div class="uinput-field">
                  <i class="fas fa-user"></i>
                  <input type="text" placeholder="Username" id="uname" name="uname" />
                </div>
                <div class="uinput-field">
                  <i class="fas fa-envelope"></i>
                  <input type="email" placeholder="Email" id="email" name="email" />
                </div>
                <div class="uinput-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Password" id="pass" name="pass" />
                </div>
                <div class="uinput-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Confirm Password" id="cpass" name="cpass" />
                </div>
                <input type="submit" class="ubtn" value="Sign up" />
                <p class="usocial-text">Follow us on social platforms</p>
                <div class="usocial-media">
                  <a href="#" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="#" class="social-icon">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#" class="social-icon">
                    <i class="fab fa-google"></i>
                  </a>
                  <a href="#" class="social-icon">
                    <i class="fab fa-instagram fa-lg"></i>
                  </a>
                </div>
              </form>
            </div>
          </div>
      
          <div class="upanels-container">
            <div class="upanel uleft-panel">
              <div class="ucontent">
                <h3>New here ?</h3>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                  ex ratione. Aliquid!
                </p>
                <button class="ubtn transparent" id="usign-up-btn">Sign up</button>
              </div>
              <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="upanel uright-panel">
              <div class="ucontent">
                <h3>One of us ?</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                  laboriosam ad deleniti.
                </p>
                <button class="ubtn transparent" id="usign-in-btn">Sign in</button>
              </div>
              <img src="img/register.svg" class="image" alt="" />
            </div>
          </div>
        </div>
      
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
    <script src="./partials/app.js"></script>
  </body>
</html>
