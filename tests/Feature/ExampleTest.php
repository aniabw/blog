<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $foo = 'bar';

        $response->assertStatus(200);
		
		
		//second test
		//$this->get('/')->assertSee('The Bootstrap Blog'); //failing
		
		//$this->get('/')->assertSee('Laravel');  //OK
		
		//$this->get('/posts')->assertSee('The Bootstrap Blog'); //OK
		
    }
}
