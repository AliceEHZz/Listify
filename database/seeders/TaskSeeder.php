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
      $tasks = [
        ['user_id' => 1,'name' => 'PHP Laravel term project'],
        ['user_id' => 1,'name' => 'Digital Portfolio'],
        ['user_id' => 1,'name' => 'React Native Mobile App'],
      ];

        foreach ($tasks as $task) {
            Task::insert($task);
        }
    }
}
