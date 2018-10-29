<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'title' => "first-task",
            'executed' => false,
        ]);
        // 静的
        DB::table('tasks')->insert([
            'title' => "test-task",
            'executed' => false,
        ]);
        DB::table('tasks')->insert([
            'title' => "finish-task",
            'executed' => true,
        ]);
    }
}
