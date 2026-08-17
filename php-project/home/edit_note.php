<?php

session_start();

include("../config/database.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login/login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$note_id = $_GET['id'];

$sql = "select *  from notes 
        WHERE id = '$note_id' 
        AND user_id = '$user_id'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {

    $note = mysqli_fetch_assoc($result);

} else {

    echo "Note not found";
    exit();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Note</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <div class="card shadow mx-auto" style="max-width: 600px;">

            <div class="card-body p-4">

                <h2 class="text-center mb-4">
                    Edit Note
                </h2>

                <form action="update_note.php" method="POST">

                    <!-- Hidden Note ID -->

                    <input type="hidden" name="id" value="<?php echo $note['id']; ?>">


                    <!-- Title -->

                    <div class="mb-3">

                        <label class="form-label">
                            Note Title
                        </label>

                        <input type="text" name="title" class="form-control" value="<?php echo $note['title']; ?>"
                            required>

                    </div>


                    <!-- Description -->

                    <div class="mb-3">

                        <label class="form-label">
                            Description
                        </label>

                        <textarea name="description" class="form-control" rows="5"
                            required><?php echo $note['description']; ?></textarea>

                    </div>


                    <button type="submit" class="btn btn-primary w-100">

                        Update Note

                    </button>

                </form>

            </div>

        </div>

    </div>

</body>

</html>