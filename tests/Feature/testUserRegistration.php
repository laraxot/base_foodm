<?php

namespace Tests\Feature;

use App\Bus\Bus;
use Modules\LU\Bus\RegisterUser;
use Tests\TestCase;

class testUserRegistration extends TestCase {
    /**
     * A basic feature test example.
     */
    public function testExample() {
        $bus = new Bus(null);
        $cmd = new RegisterUser();

        $bus->dispatch($cmd);

        $this->assertTrue(true);
    }
}
