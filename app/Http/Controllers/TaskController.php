<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function get_all_tasks() {

        $all_tasks = Task::all();
        return response()->json([
            'data' => $all_tasks
        ], 200);
    }
}
