<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
        }
    </style>
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center min-vh-100 py-4">

        <div class="card shadow-lg border-0 rounded-4" style="max-width:700px; width:100%;">

            <div class="card-body p-4">

                <h2 class="text-center text-primary fw-bold mb-4">
                    Registration Form
                </h2>

                <form action="register_process.php" method="POST">

                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label">First Name</label>
                            <input type="text" name="fname" class="form-control" placeholder="Enter First Name"
                                required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Last Name</label>
                            <input type="text" name="lname" class="form-control" placeholder="Enter Last Name" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label ">Mobile Number</label>
                            <input type="tel" name="mobile" class="form-control" placeholder="Enter Mobile Number"
                                maxlength="10" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password"
                                minlength="6" maxlength="10" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password"
                                minlength="6" maxlength="10" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Gender</label>

                            <select name="gender" class="form-select">

                                <option selected disabled>Select Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>

                            </select>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label">City</label>

                            <select name="city" class="form-select">

                                <option selected disabled>Select City</option>
                                <option>Pune</option>
                                <option>Mumbai</option>
                                <option>Nashik</option>
                                <option>Nagpur</option>

                            </select>

                        </div>

                        <div class="col-12">

                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" id="terms" required>

                                <label class="form-check-label" for="terms">

                                    I agree to the Terms & Conditions

                                </label>

                            </div>

                        </div>

                        <div class="col-12">

                            <button class="btn btn-primary w-100" type="submit">

                                Register

                            </button>

                        </div>

                        <div class="col-12 text-center">

                            Already have an account?

                            <a href="login.php" class="text-decoration-none">

                                Login

                            </a>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>