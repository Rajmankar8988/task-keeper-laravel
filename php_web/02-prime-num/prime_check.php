<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Result</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

</head>

<body>

    <header>
        <h1 class="container-fluid bg-primary text-white text-center p-3">
            Prime Number Result
        </h1>
    </header>

    <?php

    $num1 = $_POST['num1'];

    $isPrime = true;

    if ($num1 <= 1) {
        $isPrime = false;
    } else {

        for ($i = 2; $i < $num1; $i++) {

            if ($num1 % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }

    ?>

    <section class="container mt-5">

        <div class="row">

            <!-- Input Number-->
            <div class="col-md-6 mb-3">

                <div class="bg-info text-white text-center p-4 rounded">

                    <h2>Entered Number</h2>

                    <h1><?php echo $num1; ?></h1>

                </div>

            </div>

            <!--final Result -->
            <div class="col-md-6 mb-3">

                <?php
                if ($isPrime) {
                    ?>

                    <div class="bg-success text-white text-center p-4 rounded">
                        <style>
                            body {
                                background: linear-gradient(to right, #a1def4, #98f0ac);
                            }
                        </style>

                        <h2>Result</h2>

                        <h3><?php echo $num1; ?> is Prime Number</h3>

                    </div>

                    <?php
                } else {
                    ?>

                    <div class="bg-danger text-white text-center p-4 rounded">
                        <style>
                            body {
                                background: linear-gradient(to right, #a1def4, #f0b498);
                            }
                        </style>
                        <h2>Result</h2>

                        <h3><?php echo $num1; ?> is Not Prime Number</h3>

                    </div>

                    <?php
                }
                ?>

            </div>

        </div>

        <!-- Back Button -->

        <div class="text-center mt-4">

            <a href="home.html" class="btn btn-dark btn-lg">
                ← Back
            </a>

        </div>

    </section>

</body>

</html>