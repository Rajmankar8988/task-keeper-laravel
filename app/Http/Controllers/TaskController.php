<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::where('user_id', auth::id())->get();

        return view('task.index', compact('tasks'));
    }


    //for crete task
    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);

        $task = new Task();

        $task->user_id = Auth::id();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();

        return redirect('/tasks');
    }

    public function edit($id)
    {
        $task = task::findOrFail($id);

        return view('task.edit', compact('task'));
    }

    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $task = Task::findOrFail($id);

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect('/tasks');
    }


    //for delete
    public function destroy($id)
    {
        $task = Task::findOrFail($id);

        $task->delete();

        return redirect('/tasks');
    }
}
