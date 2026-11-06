<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $today = today()->toDateString();
        $tomorrow = today()->addDay()->toDateString();
        $yesterday = today()->subDay()->toDateString();

        $tasks = [
            [
                'title' => 'Complete Laravel project',
                'status' => 'pending',
                'task_date' => $today,
            ],
            [
                'title' => 'Review class notes',
                'status' => 'done',
                'task_date' => $today,
            ],
            [
                'title' => 'Study for upcoming quiz',
                'status' => 'pending',
                'task_date' => $today,
            ],
            [
                'title' => 'Prepare project documentation',
                'status' => 'pending',
                'task_date' => $tomorrow,
            ],
            [
                'title' => 'Attend group meeting',
                'status' => 'pending',
                'task_date' => $tomorrow,
            ],
            [
                'title' => 'Submit assignment',
                'status' => 'done',
                'task_date' => $tomorrow,
            ],
            [
                'title' => 'Organize project files',
                'status' => 'done',
                'task_date' => $yesterday,
            ],
            [
                'title' => 'Research Laravel features',
                'status' => 'pending',
                'task_date' => $yesterday,
            ],
            [
                'title' => 'Practice PHP programming',
                'status' => 'done',
                'task_date' => $yesterday,
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}