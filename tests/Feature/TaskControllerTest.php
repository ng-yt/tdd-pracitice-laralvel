<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskControllerTest extends TestCase
{
    /**
     * Get All Tasks Path Test
     *
     * @return void
     */
    public function testGetAllTaskPath()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
