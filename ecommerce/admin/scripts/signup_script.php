<?php
require "../includes/conn.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);  // **Sanitizing email**
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  // **Email validation**
        $m = "Invalid email format.";
        header('location: index.php?error=' . $m);
        exit();
    }

    $email = mysqli_real_escape_string($conn, $email);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $pass = md5($pass);  // For production, consider using password_hash()

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);

    // Check if email already exists
    $query = "SELECT * FROM admin WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {  // **Checking if email exists**
        $m = "Email Already Exists";
        header('location: index.php?error=' . $m);
        exit();
    }

    // Insert new admin record
    $query = "INSERT INTO admin (name, mobile, email, password) VALUES ('$name', '$mobile', '$email', '$pass')";
    if (mysqli_query($conn, $query)) {
        // Get the inserted user ID
        $user_id = mysqli_insert_id($conn);
        $_SESSION['admin_email'] = $email;
        $_SESSION['admin_id'] = $user_id;

        // Redirect to the main page
        header('location: ../index.php');
        exit();  // **Added exit() after redirect to stop further script execution**
    } else {
        // Handle query failure
        $m = "Error while creating account: " . mysqli_error($conn);  // **Error handling for query failure**
        header('location: index.php?error=' . $m);
        exit();
    }
}
?>
