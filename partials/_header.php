<?php 
session_start();

echo '<div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">HostelHub</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pg&Hostel</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="property-list.php" class="dropdown-item">List</a>
                                <a href="property-type.php" class="dropdown-item">Type</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                <a href="404.php" class="dropdown-item">404 Error</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>'?>
                    <?php if(isset($_SESSION['pgowner_logged_in']) && $_SESSION['pgowner_logged_in'] === true): ?>
                        <a href="./partials/logout.php" class="btn btn-primary px-3 d-none d-lg-flex">Logout</a>
                    <?php else: ?>
                        <a href="pglogin.php" class="btn btn-primary px-3 d-none d-lg-flex">For PG owners</a>
                    <?php endif; ?>
                <?php echo '</div>
            </nav>
        </div>'
?>

<?php
  if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You can now login!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
?>