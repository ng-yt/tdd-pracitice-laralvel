<?php

namespace Tests\Unit;

use App\Task;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskTest extends TestCase
{
    /**
     * Get Seeder Tasks Test
     *
     * @return void
     */
    public function testGetSeederTasks()
    {
        // 全件取得
        $tasks = Task::all();
        // ３件取得できるはず
        $this->assertEquals(3, count($tasks));

        // 実行完了していないものを取得
        $taskNotFinished = Task::where('executed', false)->get();
        // ２件以上取得できるはず
        $this->assertEquals(2, count($taskNotFinished));

        // 実行完了しているものを取得
        $taskFinished = Task::where('executed', true)->get();
        // １件取得できるはず
        $this->assertEquals(1, count($taskFinished));

        // 「テストタスク」というタイトルのレコードを取得
        $task1 = Task::where('title', "test-task")->first();
        // 実行完了していないはず
        $this->assertFalse(boolval($task1->executed));
        
        // 「終了タスク」というタイトルのレコードを取得
        $task1 = Task::where('title', "finish-task")->first();
        // 実行完了しているはず
        $this->assertTrue(boolval($task1->executed));
    }
}
