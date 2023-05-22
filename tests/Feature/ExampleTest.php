<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_home_page_redirect_without_auth(): void
    {
        $response = $this->get('/home');

        $response->assertStatus(302);
    }
}
