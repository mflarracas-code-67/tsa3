<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\View\View;

class TaskController extends Controller
{
    /**
     * Display today's tasks.
     */
    public function today(): View
    {
        $tasks = Task::whereDate('task_date', today())
            ->orderBy('title')
            ->get();

        return view('home', [
            'tasks' => $tasks,
        ]);
    }

    /**
     * Display all tasks ordered by date.
     */
    public function index(): View
    {
        $tasks = Task::orderBy('task_date')
            ->orderBy('title')
            ->get();

        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }
}