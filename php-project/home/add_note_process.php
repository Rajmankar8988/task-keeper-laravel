<?php

session_start();

include("../config/database.php");

if (!isset($_SESSION['user_id'])) {

    header("Location: ../auth/login/login.php");
    exit();

}

$title = $_POST['title'];
$description = $_POST['description'];

$user_id = $_SESSION['user_id'];

$sql = "insert into notes (user_id, title, description)
        VALUES ('$user_id', '$title', '$description')";

if (mysqli_query($conn, $sql)) {

    header("Location: index.php");
    exit();

} else {

    echo "Error: " . mysqli_error($conn);

}

?>