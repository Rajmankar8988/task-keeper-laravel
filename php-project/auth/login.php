<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

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

        <div class="card shadow-lg border-0 rounded-4" style="max-width: 450px; width: 100%;">

            <div class="card-body p-4">

                <!-- Heading -->
                <h2 class="text-center text-primary fw-bold mb-2">
                    Login
                </h2>

                <p class="text-center text-muted mb-4">
                    Welcome back! Please login to your account.
                </p>

                <!-- Login Form -->
                <form action="login_process.php" method="POST">

                    <!-- Email -->
                    <div class="mb-3">

                        <label class="form-label">
                            Email
                        </label>

                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>

                    </div>

                    <!-- Password -->
                    <div class="mb-3">

                        <label class="form-label">
                            Password
                        </label>

                        <input type="password" name="password" class="form-control" placeholder="Enter Password"
                            required>

                    </div>

                    <!-- Remember Me + Forgot Password -->
                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <div class="form-check">

                            <input class="form-check-input" type="checkbox" name="remember" id="remember">

                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>

                        </div>

                        <a href="#" class="text-decoration-none">
                            Forgot Password?
                        </a>

                    </div>

                    <!-- Login Button -->
                    <div class="d-grid">

                        <button type="submit" class="btn btn-primary">

                            Login

                        </button>

                    </div>

                    <!-- Register Link -->
                    <div class="text-center mt-4">

                        <span>
                            Don't have an account?
                        </span>

                        <a href="register.php" class="text-decoration-none fw-semibold">

                            Register

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>