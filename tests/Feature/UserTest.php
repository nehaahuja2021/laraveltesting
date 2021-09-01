<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public  function test_fizz()
    {
         $this->assertEquals( "fizz", User::fizzbuzz(13),"fizz is working");
    }
    
    public function test_fizzbuzz()
    {
        $this->assertEquals( "fizzbuzz", User::fizzbuzz(25),"buzz is working");
    }
    public function test_buzz()
    {
        $this->assertEquals( "buzz", User::fizzbuzz(23),"buzz is working");
    }


}
