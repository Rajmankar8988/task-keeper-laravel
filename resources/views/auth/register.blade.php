<!DOCTYPE html>
<html>

<head>
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col-md-5">

                <h2 class="text-center mb-4">Register</h2>

                <form action="/register" method="post">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="pass" class="form-control">
                    </div>
                    @error('pass')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="cpass" class="form-control">
                    </div>
                    @error('cpass')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-primary w-100">
                        Register
                    </button>

                </form>

                <p class="text-center mt-3">
                    Already have an account?
                    <a href="/login">Login</a>
                </p>

            </div>
        </div>

    </div>

</body>

</html>