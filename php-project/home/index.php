<?php

session_start();
include("../config/database.php");
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login/login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$sql = "select * from notes where user_id='$user_id' order by id DESC";

// result 
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Note Keeper</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-dark bg-primary">

        <div class="container">

            <a class="navbar-brand" href="index.php">
                Note Keeper
            </a>

            <div>
                <span class="text-white me-3">
                    Welcome <?php echo $_SESSION['fname']; ?>
                </span>

                <a href="logout.php" class="btn btn-light btn-sm">
                    Logout
                </a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2>
                My Notes
            </h2>

            <a href="add_note.php" class="btn btn-primary">
                + Add Note
            </a>

        </div>

        <!-- fetch notes title and des -->
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($note = mysqli_fetch_assoc($result)) {

                ?>

                <div class="card shadow-sm mb-3">

                    <div class="card-body">

                        <h5 class="card-title">
                            <?php echo $note['title']; ?>
                        </h5>

                        <p class="card-text">
                            <?php echo $note['description']; ?>
                        </p>

                        <a href="edit_note.php?id=<?php echo $note['id']; ?>" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="#" class="btn btn-danger btn-sm">
                            Delete
                        </a>

                    </div>

                </div>

                <?php
            }
        } else {
            echo "<p class='text-muted'>notes not found</p>";
        }
        ?>
    </div>

</body>

</html>