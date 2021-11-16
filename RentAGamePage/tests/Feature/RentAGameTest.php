<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RentAGameTest extends TestCase
{
    /**
     * 
     * @group page
     */
    public function testRentAGame() {
        $response = $this->get(route('videogame.list'));

        $response->assertStatus(200);
        $response->assertViewIs('user.index');
    }
}
