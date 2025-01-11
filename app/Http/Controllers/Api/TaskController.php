<?php

namespace App\Http\Controllers\Api;

use App\Models\Task;
use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function index()
    {
        $tasks=Task::get();
        if($tasks->count() > 0 )
        {
            return TaskResource::collection($tasks);

        }
        else
        {
            return response()->json(['message'=>'No record available'],200);

        }
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
                    'title' => 'required|string|max:255',
                    'description' => 'required',
                    'completed' => 'required|boolean',

        ]);
        if($validator->fails())
        {
            return response()->json([
                'message' => 'All fields are mandetory',
                'error' => $validator->messages(),
            ],422);
        }
        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'completed' => $request->completed,
        ]);
        return response()->json([
            'message' => 'Task created successfully',
            'data' => new TaskResource($task)
        ],200);
    }
    public function show(Task $task)
    {
        return new TaskResource($task);
    }
    public function update(Request $request, Task $task)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required|string|max:255',
            'description' => 'required',
            'completed' => 'required|boolean',
        ]);
        if($validator->fails())
        {
            return response()->json([
                'message' => 'All fields are mandetory',
                'error' => $validator->messages(),
            ],422);
        }
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'completed' => $request->completed,
        ]);
        return response()->json([
            'message' => 'Task updated successfully',
            'data' => new TaskResource($task)
        ],200);
        }
        public function destroy(Task $task)
        {
            $task->delete();
            return response()->json([
                'message' => 'Task deleted successfully',
            ],200);
        }
}
