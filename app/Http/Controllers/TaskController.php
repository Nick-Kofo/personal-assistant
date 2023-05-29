<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(Request $request): JsonResponse
    {
        $task = Task::factory()->create([
            'title' => $request->title,
            'description' => $request->description,
            'reminder_date' => $request->reminder_date ?? null
        ]);

        return response()->json($task, 201);
    }
}
