<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests\CheckRequest;

class TasksController extends Controller
{

    public function index()
    {
        $tasks = Task::orderBy('created_at')->get();

        return view('tasks', compact('tasks'));
    }

    public function store(CheckRequest $request)
    {

        Task::create($request->all());

        return redirect('task');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);

        return view('edit', compact('task'));
    }

    public function update($id, CheckRequest $request)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());

        return redirect('task');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('task');
    }
}
