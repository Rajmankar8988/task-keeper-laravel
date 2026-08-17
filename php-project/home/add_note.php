<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Note</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <div class="card shadow mx-auto" style="max-width: 600px;">

            <div class="card-body p-4">

                <h2 class="text-center mb-4">
                    Add Note
                </h2>

                <form action="add_note_process.php" method="POST">

                    <!-- Title -->

                    <div class="mb-3">

                        <label class="form-label">
                            Note Title
                        </label>

                        <input type="text" name="title" class="form-control" placeholder="Enter note title" required>

                    </div>


                    <!-- Description -->

                    <div class="mb-3">

                        <label class="form-label">
                            Description
                        </label>

                        <textarea name="description" class="form-control" rows="5" placeholder="Enter your note"
                            required></textarea>

                    </div>


                    <button type="submit" class="btn btn-primary w-100">

                        Add Note

                    </button>

                </form>

            </div>

        </div>

    </div>

</body>

</html>