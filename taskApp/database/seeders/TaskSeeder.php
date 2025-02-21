<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
        'task_name' => 'Take out trash',
        'task_location' => 'Kitchen',
        'time_complexity' => 1, // (1 => ~10 min, 2 => ~30 min, etc.)
        'materials_required'=> 'Trash bags',
        'deadline' => '2025-02-20 10:00:00',
        'priority' => 2, // (1 => low, 2 => medium, 3 => high)
        'category' => 'chores'
        ]);

        Task::create([
            'task_name' => 'Homework',
            'task_location' => 'Room',
            'time_complexity' => 2, // (1 => ~10 min, 2 => ~30 min, etc.)
            'materials_required'=> 'Paper',
            'deadline' => '2025-02-26 10:00:00',
            'priority' => 3, // (1 => low, 2 => medium, 3 => high)
            'category' => 'project'
        ]);

        Task::create([
            'task_name' => 'Video Games',
            'task_location' => 'Room',
            'time_complexity' => 4, // (1 => ~10 min, 2 => ~30 min, etc.)
            'materials_required'=> 'Console',
            'deadline' => '2025-02-26 10:00:00',
            'priority' => 5, // (1 => low, 2 => medium, 3 => high)
            'category' => 'fun'
        ]);

         Task::create([
            'task_name' => 'Gym',
            'task_location' => 'Local Gym',
            'time_complexity' => 3, // (1 => ~10 min, 2 => ~30 min, etc.)
            'materials_required'=> 'Memebership',
            'deadline' => '2025-02-26 10:00:00',
            'priority' => 3, // (1 => low, 2 => medium, 3 => high)
            'category' => 'health'
        ]);

         Task::create([
            'task_name' => 'Dentist Appointment',
            'task_location' => 'Medical Center',
            'time_complexity' => 2, // (1 => ~10 min, 2 => ~30 min, etc.)
            'materials_required'=> 'Identification Card',
            'deadline' => '2025-02-26 10:00:00',
            'priority' => 3, // (1 => low, 2 => medium, 3 => high)
            'category' => 'health'
        ]);
    }
}
