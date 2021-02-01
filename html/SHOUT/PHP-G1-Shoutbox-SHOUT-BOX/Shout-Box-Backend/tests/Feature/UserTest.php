<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function test_admin_can_view_a_login_form()
    {
        $response = $this->get('/');

        $response->assertSuccessful();
    }
    public function test_admin_can_view_home()
    {
        $response = $this->post('/home');

        $response->assertSuccessful();
    }
}
