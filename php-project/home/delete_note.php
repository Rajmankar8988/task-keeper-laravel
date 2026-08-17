<?php

session_start();

include("../config/database.php");

if (!isset($_SESSION['user_id'])) {

    header("location:../auth/login.php");
    exit();
}


$user_id = $_SESSION['user_id'];
$note_id = $_GET['id'];

$sql = "delete from notes where id ='$note_id' and user_id = '$user_id'";

// $result = mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)) {

    header("Location: index.php");
    exit();

} else {
    echo "Error: " . mysqli_error($conn);
}
?>