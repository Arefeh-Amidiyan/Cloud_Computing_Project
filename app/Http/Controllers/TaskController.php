<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::orderBy('id', 'asc')->paginate(5);
        return view('tasks.index', compact('tasks'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'completed' => 'required|boolean'
        ]);

        // Create a new Task in the database
        Task::create($request->all());

        // Redirect the user and send a friendly message
        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        // Validate the input
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'completed' => 'required|boolean'
        ]);

        // Update the Task in the database
        $task->update($request->all());

        // Redirect the user and send a friendly message
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        // Delete the task
        $task->delete();

        // Redirect the user and display a success message
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}
