<?php
session_start();

// Include your database connection file
include_once('_dbconnect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Retrieve hashed password from the database
    $sql = "SELECT password_hash FROM pgowner WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password_hash'];

        // Compare hashed password with user input
        if (password_verify($password, $hashed_password)) {
            // Login successful
            $_SESSION['pgowner_logged_in'] = true;
            header("Location: /sem6/pgdetail.php");
            exit();
        } else {
            // Login failed
            echo "Invalid email or password";
        }
    } else {
        // Email not found
        echo "Invalid email or password";
    }
}
?>
