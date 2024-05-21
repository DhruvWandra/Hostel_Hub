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

    <div class="container-xxl py-5">
      <div class="container">
        <form action="./partials/_handlepgSignup.php" method="post">
          <div class="row">
            <div class="col ">
              <label for="inputfname4">First name</label>
              <input type="text" class="form-control" placeholder="First name" id="fname" name="fname">
            </div>
            <div class="col">
              <label for="inputlname4 ">Last name</label>
              <input type="text" class="form-control" placeholder="Last name" id="lname" name="lname">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col">
              <label for="inputEmail">Email</label>
              <input type="email" class="form-control" placeholder="First name" id="cemail" name="cemail" >
            </div>
            <div class="col">
              <label for="inputPwd">Password</label>
              <input type="password" class="form-control" placeholder="Last name" id="cpwd" name="cpwd" >
            </div>
            <div class="col">
              <label for="inputCpwd">Confirm Password</label>
              <input type="text" class="form-control" placeholder="Last name" id="ccpwd" name="ccpwd">
            </div>
          </div>
          <div class="form-group mt-3">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="1234 Main St" />
          </div>
          <div class="row">
            <div class="form-row mt-3">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" name="inputCity" />
              </div>
              <div class="form-group col-md-4 mt-3">
                <label for="inputState">State</label>
                <select id="inputState" name="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chandigarh">Chandigarh</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                  <option value="Daman and Diu">Daman and Diu</option>
                  <option value="Delhi">Delhi</option>
                  <option value="Lakshadweep">Lakshadweep</option>
                  <option value="Puducherry">Puducherry</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Odisha">Odisha</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Telangana">Telangana</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="Uttarakhand">Uttarakhand</option>
                  <option value="West Bengal">West Bengal</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-2 mt-3">
                <label for="inputZip">Zip</label>
                <input type="number" class="form-control" id="inputZip" name="inputZip" />
              </div>
              <div class="form-group col-md-2 mt-3">
                <label for="inputPAN">PAN</label>
                <input type="text" class="form-control" id="inputPan" name="inputPan" />
              </div>
              <div class="form-group col-md-2 mt-3">
                <label for="inputPh">Phone No.</label>
                <input type="tel" class="form-control" id="inputPhNo" name="inputPhNo" />
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary my-3">Sign in</button>
        </form>
        <a href="./pglogin.php"><i class="bi bi-arrow-left" herf></i>Back</a>
      </div>
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