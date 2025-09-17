<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TaskRepositoryInterface;

class TaskController extends Controller
{
    private $tasks;

    public function __construct(TaskRepositoryInterface $tasks)
    {
        $this->tasks = $tasks;
    }

    public function showAll()
    {
        return response()->json($this->tasks->all(), 200);
    }

    public function store(Request $request)
    {
        $task = $this->tasks->create([
            'title' => $request->title,
            'completed' => $request-> completed
        ]);

        return response()->json($task, 201);
    }

    public function show($id)
    {
        $task = $this->tasks->find($id);
        if ($task) {
            return response()->json($task, 200);
        }
        return response()->json(['message' => 'Task not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $task = $this->tasks->update($id, [
            'title' => $request->title,
            'completed' => $request->completed
        ]);

        if ($task) {
            return response()->json($task, 200);
        }
        return response()->json(['message' => 'Task not found'], 404);
    }

    public function destroy($id)
    {
        if ($this->tasks->delete($id)) {
            return response()->json(['message' => 'Task deleted'], 200);
        }
        return response()->json(['message' => 'Task not found'], 404);
    }

}