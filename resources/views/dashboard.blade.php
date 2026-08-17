<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/dashboard">Task Keeper</a>

            <div>
                <a href="/tasks/create" class="btn btn-success">
                    Add Task
                </a>

                <a href="/tasks" class="btn btn-light">
                    My Tasks
                </a>

                <form action="/logout" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">

        <h1>Welcome to Dashboard</h1>

        <p class="text-muted">
            Manage your tasks easily.
        </p>

        <a href="/tasks/create" class="btn btn-success">
            Add New Task
        </a>

        <a href="/tasks" class="btn btn-primary">
            View My Tasks
        </a>

    </div>

</body>

</html>