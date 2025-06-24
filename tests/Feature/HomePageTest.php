<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_homepage_displays_correctly(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $response->assertViewIs('home');

        $response->assertViewHas('title', 'Heal Meal');

        $response->assertSee('Bienvenue');
    }
}
