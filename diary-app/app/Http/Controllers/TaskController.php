<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    // Show all tasks
    public function index()
    {
        $tasks = Task::with('staff')->get();
        return view('tasks.index', compact('tasks'));
    }

    // Show create form
    public function create()
    {
        $staff = User::where('role', 'staff')->get();
        return view('tasks.create', compact('staff'));
    }

    // Store task
    public function store(Request $request)
    {
        $request->validate([
            'staff_id' => 'required|exists:users,id',
            'task_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'due_time' => 'nullable',
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    // Edit form
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        $staff = User::where('role', 'staff')->get();
        return view('tasks.edit', compact('task', 'staff'));
    }

    // Update task
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $request->validate([
            'task_name' => 'required|string|max:255',
            'status' => 'required|in:pending,in_progress,completed',
            'date' => 'required|date',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    // Delete task
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}
