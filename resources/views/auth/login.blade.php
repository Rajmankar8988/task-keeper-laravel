<!DOCTYPE html>
<html>

<head>
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col-md-5">

                <h2 class="text-center mb-4">Login</h2>

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="/login" method="post">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-primary w-100">
                        Login
                    </button>

                </form>



                <p class="text-center mt-3">
                    Don't have an account?
                    <a href="/register">Register</a>
                </p>

            </div>
        </div>

    </div>

</body>

</html>