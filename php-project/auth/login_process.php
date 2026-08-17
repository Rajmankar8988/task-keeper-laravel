<?php
session_start();
include("../config/database.php");

// Get data from login form
$email = $_POST['email'];
$password = $_POST['password'];

// Validation
if (empty($email)) {
    echo "Email Required";
} elseif (empty($password)) {
    echo "Password Required";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid Email";
} else {

    // Find user by email
    $sql = "select * from users WHERE email = '$email'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        // Get user data
        $user = mysqli_fetch_assoc($result);

        // Check password
        if (password_verify($password, $user['pass'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fname'] = $user['fname'];

            header("Location: ../home/index.php");
            exit();

        } else {

            echo "Invalid Password";

        }

    } else {

        echo "Email not registered";

    }
}

?>