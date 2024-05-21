<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Find a Perfect PG&Hostels</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <div class="container-xxl p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
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




    <!-- Header Start -->

    <?php
    // Retrieve property details from the URL query parameters
    if (isset($_GET['name']) && isset($_GET['aboutus']) && isset($_GET['facility']) && isset($_GET['address']) && isset($_GET['phone']) && isset($_GET['pid']) && isset($_GET['img'])) {
      $name = $_GET['name'];
      $aboutus = $_GET['aboutus'];
      $facility = $_GET['facility'];
      $address = $_GET['address'];
      $phone = $_GET['phone'];
      $fees = $_GET['fees'];
      $pid = $_GET['pid'];
      $img = $_GET['img'];

      $sql = "SELECT * FROM detail WHERE id = $pid";
      $result = mysqli_query($conn, $sql);
      $property = mysqli_fetch_assoc($result);

      $method = $_SERVER['REQUEST_METHOD'];
      // Check if the form is submitted
      if ($method == "POST") {
        // Check if user is logged in
        if (isset($_SESSION['sno'])) {
          // Get comment from the form
          $comment = $_POST['comment'];

          // Get user ID and username from session
          $user_id = $_SESSION['sno'];
          $username = $_SESSION['useremail'];

          // Insert review into database
          $sql = "INSERT INTO reviews (property_id, user_id, username, comment) VALUES ($pid, $user_id, '$username', '$comment')";
          if (mysqli_query($conn, $sql)) {
            // Review posted successfully
            echo "Review posted successfully";
          } else {
            // Error posting review
            echo "Error posting review: " . mysqli_error($conn);
          }
        } else {
          // User is not logged in, handle error
          echo "You need to be logged in to post a review.";
        }
      }
    ?>
      <header class="mt-3">
        <h1 style="color: white;"><?php echo $name; ?></h1>
        <!-- Add any other header information you may need -->
      </header>
      <section class="profile">
        <img src="./partials/<?php echo $img ?>" alt="Hostel/PG Image" class="profile-image">
        <div class="details">
          <h2 class="animate__animated animate__fadeIn">About Us</h2>
          <p class="animate__animated animate__fadeIn"><?php echo $aboutus; ?></p>

          <h2 class="animate__animated animate__fadeIn">Facilities</h2>
          <ul class="animate__animated animate__fadeIn">
            <?php
            // Convert the comma-separated list of facilities into an array and display each facility as a list item
            $facilities = explode(", ", $facility);
            foreach ($facilities as $facility_item) {
              echo "<li>$facility_item</li>";
            }
            ?>
          </ul>

          <h2 class="animate__animated animate__fadeIn">Location</h2>
          <p class="animate__animated animate__fadeIn">Address: <?php echo $address; ?></p>

          <h2 class="animate__animated animate__fadeIn">Fees(Per Person For Per Month):</h2>
          <p class="animate__animated animate__fadeIn"><?php echo $fees; ?></p>

          <h2 class="animate__animated animate__fadeIn">Contact No:</h2>
          <p class="animate__animated animate__fadeIn"><?php echo $phone; ?></p>
        </div>
      </section>
    <?php
    } else {
      // Handle the case where the necessary query parameters are not provided
      echo "Property details are not available.";
    }
    ?>

    <?php
    if (isset($_SESSION['sno'])) : ?>
      <div class="container fw-normal">
        <h3 class="py-2 fw-bolder">Write a Review</h3>
        <form method="POST" action="">
          <input type="hidden" name="property_id" value="<?php echo $pid; ?>">
          <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" name="comment" id="comment" style="height: 100px" required></textarea>
            <label for="floatingTextarea2">Ellabortate Your Concern</label>
          </div>
          <button type="submit" class="btn btn-success" name="but_upload">Post</button>
        </form>
      </div>


    <?php else : ?>
      <p>Please <a href="login.php">log in</a> to post a review.</p>
    <?php endif; ?>


    <div class="container fw-normal mt-5">
      <!-- Display Reviews -->
      <h2 class="py-2 fw-bolder">Reviews</h2>
      <?php
      // Fetch reviews for this property
      $sql = "SELECT * FROM reviews WHERE property_id = $pid";
      $result = mysqli_query($conn, $sql);

      // Display reviews
      while ($review = mysqli_fetch_assoc($result)) {
        echo "<p>Username: {$review['username']}</p>";
        echo "<p>Comment: {$review['comment']}</p>";
        echo "<hr>";
      }
      ?>
    </div>


    <!--Header End-->
    <!--form start-->

    <!-- <h1 style="margin-left: 60px;">BOOK NOW</h1>
        <div class="contact-form">
        <form>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="name" placeholder="Your Name" />
                  <label for="name">Your Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="email" class="form-control" id="email" placeholder="Your Email" />
                  <label for="email">Your Email</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="subject" placeholder="Subject" />
                  <label for="subject">Subject</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="subject" placeholder="Mobile Number" />
                  <label for="subject">Mobile Number</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a message here" id="message"
                    style="height: 150px"></textarea>
                  <label for="message">Message</label>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">
                  Send Message
                </button>
              </div>
            </div>
          </form>
        </div>
          form end -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h5 class="text-white mb-4">Get In Touch</h5>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street,</p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
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
                <img class="img-fluid rounded bg-light p-1" src="img/property-1.jpg" alt="">
              </div>
              <div class="col-4">
                <img class="img-fluid rounded bg-light p-1" src="img/property-2.jpg" alt="">
              </div>
              <div class="col-4">
                <img class="img-fluid rounded bg-light p-1" src="img/property-3.jpg" alt="">
              </div>
              <div class="col-4">
                <img class="img-fluid rounded bg-light p-1" src="img/property-4.jpg" alt="">
              </div>
              <div class="col-4">
                <img class="img-fluid rounded bg-light p-1" src="img/property-5.jpg" alt="">
              </div>
              <div class="col-4">
                <img class="img-fluid rounded bg-light p-1" src="img/property-6.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-white mb-4">Newsletter</h5>
            <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
            <div class="position-relative mx-auto" style="max-width: 400px;">
              <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
              <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
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