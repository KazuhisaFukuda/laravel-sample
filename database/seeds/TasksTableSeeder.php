<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = ['hogehoge', 'fugafuga', 'hogefuga'];

        $tasks = [];

        for ($i = 1; $i <= 100; $i++) {
            $tasks[] = [
                'user_id' => rand(1, 5),
                'priority_no' => rand(1, 3),
                'target_date' => now()->addDay($i)->format('Y-m-d'),
                'content' => $contents[rand(0, 2)],
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ];
        }

        DB::table('tasks')->insert($tasks);
    }
}
