<?php
$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include '_dbconnect.php';

  $name = $_POST['name'];
  $address = $_POST['address'];
  $facility = $_POST['facility'];
  $fees = $_POST['fees'];
  // $image = $_FILES['image']['name'];
  $aboutus = $_POST['aboutus'];
  $phone = $_POST['phone'];

  $targetDir = "uploads/"; // Directory where uploaded images will be stored
  $targetFile = $targetDir . basename($_FILES["image"]["name"]); // Path to the uploaded file
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // File extension


  // Check if file already exists
  if (file_exists($targetFile)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  if ($_FILES["image"]["size"] > 5000000) { // Adjust size limit as needed
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  // Allow only certain file formats
  $allowedExtensions = array("jpg", "jpeg", "png", "gif");
  if (!in_array($imageFileType, $allowedExtensions)) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
      // File uploaded successfully, now insert form data into database
      $sql = "INSERT INTO detail (name, address, facility, fees, 	image, about_us, phone) VALUES ('$name', '$address', '$facility', '$fees', '$targetFile', '$aboutus', '$phone')";
      if (mysqli_query($conn, $sql)) {
        header("Location: /sem6/property-list.php");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
}
