<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color: lightblue;
        }
    </style>
</head>

<body>

    <?php
    $num1 = $_POST['first-num'];
    $num2 = $_POST['second-num'];
    $result = $num1 + $num2;
    ?>

    <div class="container mt-5">

        <div class="row">

            <!-- First Number -->
            <div class="col-sm-6">
                <div class="bg-primary text-white text-center p-4 rounded">
                    <h3>First Number</h3>
                    <h1><?php echo $num1; ?></h1>
                </div>
            </div>

            <!-- Second Number -->
            <div class="col-sm-6">
                <div class="bg-success text-white text-center p-4 rounded">
                    <h3>Second Number</h3>
                    <h1><?php echo $num2; ?></h1>
                </div>
            </div>

        </div>

        <!-- Result -->
        <div class="row mt-4">

            <div class="col-12">
                <div class="bg-danger text-white text-center p-4 rounded">
                    <h3>Result</h3>
                    <h1><?php echo $result; ?></h1>
                </div>
            </div>

        </div>

    </div>

    <a href="index.html" class="d-flex justify-content-center mt-4">
        <button class="btn btn-dark icon-btn">Back</button>
    </a>

</body>

</html>