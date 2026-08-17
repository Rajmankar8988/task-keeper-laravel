<!DOCTYPE html>
<html>

<head>
    <title>My Tasks</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2>My Tasks</h2>

            <a href="/tasks/create" class="btn btn-primary">
                + Add Task
            </a>

        </div>


        @forelse($tasks as $task)

            <div class="card shadow-sm mb-3">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-start">

                        <div>

                            <h4 class="card-title">
                                {{ $task->title }}
                            </h4>

                            <p class="card-text text-muted">
                                {{ $task->description }}
                            </p>

                        </div>

                    </div>

                    <div class="mt-3">

                        <a href="/tasks/{{ $task->id }}/edit" class="btn btn-sm btn-outline-primary">
                            Edit
                        </a>

                        <form action="/tasks/{{ $task->id }}" method="POST" class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                Delete
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        @empty

            <div class="text-center mt-5">

                <div class="card shadow-sm p-5">

                    <h4 class="text-muted">
                        No Tasks Found
                    </h4>

                    <p class="text-muted">
                        You don't have any tasks yet.
                    </p>

                    <div>
                        <a href="/tasks/create" class="btn btn-primary">
                            + Add Your First Task
                        </a>
                    </div>

                </div>

            </div>

        @endforelse
    </div>

</body>

</html>