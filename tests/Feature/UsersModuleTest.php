<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_load_users()
    {
        $response = $this->get('/usuarios/rrr/123');

        $response->assertStatus(200);
    }

    public function test_load_usu()
    {
        $response = $this->get('/usu');

        $response->assertStatus(200);
    }



}
