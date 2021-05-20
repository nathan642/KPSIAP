<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;

class FirstTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
//        $this->assertTrue(true);
        $this->get('/profile/{id_user}')->assertStatus(200);

    }
}
