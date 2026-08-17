<!DOCTYPE html>
<html>

<head>
    <title>Add Task</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow">

                    <div class="card-header">
                        <h4 class="mb-0">Add Task</h4>
                    </div>

                    <div class="card-body">

                        <form action="/tasks" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Task Title</label>

                                <input type="text" name="title" class="form-control" placeholder="Enter task title">

                                @error('title')
                                    <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description</label>

                                <textarea name="description" class="form-control" rows="4"
                                    placeholder="Enter task description"></textarea>

                                @error('description')
                                    <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">

                                <a href="/tasks" class="btn btn-secondary">
                                    Back
                                </a>

                                <button type="submit" class="btn btn-primary">
                                    Add Task
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>

</body>

</html>