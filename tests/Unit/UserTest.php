<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
      $user = new User(['name'=>'Ashish','email'=>'ashish@gmail.com','password'=>'Sudarshan@1232']);

      $this->assertEquals('Ashish', $user->name);
    }
}
