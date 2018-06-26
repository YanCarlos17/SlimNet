<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function it_loads_the_page_for_update_user()
    {
        $this->whithoutExceptionHandling();

        $user = factory(User::class )->create();
        
        $this->get("/detalle-usuario/{$user->id}/editar");
    } 
}
