<?php

session_start();

include("../config/database.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login/login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$note_id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];

$sql = "update notes 
        SET title = '$title',
            description = '$description'
        WHERE id = '$note_id'
        AND user_id = '$user_id'";

if (mysqli_query($conn, $sql)) {

    header("Location: index.php");
    exit();

} else {

    echo "Error: " . mysqli_error($conn);

}

?>