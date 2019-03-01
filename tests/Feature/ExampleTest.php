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
    public function testFeatureTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testBasicExample()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',

        ])->json('POST','/user',['name'=>'Dinesh']);

        $response->assertStatus(201)->assertJson(['created'=>true,]);
    }

}
