<?php
// Include your database connection file
include_once('_dbconnect.php');

// Retrieve form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['cemail'];
$password = $_POST['cpwd'];
$confirm_password = $_POST['ccpwd'];
$address = $_POST['inputAddress'];
$city = $_POST['inputCity'];
$state = $_POST['inputState'];
$zip = $_POST['inputZip'];
$pan = $_POST['inputPan'];
$phone = $_POST['inputPhNo'];

// Validate password and confirm password
if ($password !== $confirm_password) {
    echo "Password and Confirm Password do not match";
    exit(); // Stop further execution
}

// Insert data into the database
$hash = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO pgowner (first_name, last_name, email, password_hash, address, city, state, zip, pan, phone) 
        VALUES ('$fname', '$lname', '$email', '$hash', '$address', '$city', '$state', '$zip', '$pan', '$phone')";


if (mysqli_query($conn, $sql)) {
    header("Location: ../pgsignup.php?signupsuccess=true");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
