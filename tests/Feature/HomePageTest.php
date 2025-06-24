<?php

namespace Tests\Feature;

use App\Models\Recette;
use App\Models\Regime;
use App\Models\Origins;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    use RefreshDatabase; // Vide la BDD entre chaque test

    public function test_homepage_displays_correctly(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('home');
        $response->assertViewHas('title', 'Heal Meal');
        $response->assertSee('Bienvenue'); // Vérifie que ce texte est bien dans ta vue
    }
}

