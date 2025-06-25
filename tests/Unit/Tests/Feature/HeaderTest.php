<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HeaderTest extends TestCase
{
    /**
     * Test if the homepage contains a <header> element.
     */
    public function test_homepage_contains_header(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200); // Vérifie que la page existe
        $response->assertSee('<header', false); // Vérifie que <header> est présent (false = pas d'échappement HTML)
    }

    public function test_recettes_contains_header(): void {
        $response = $this->get('/recettes');

        $response->assertStatus(200);
        $response->assertSee('<header', false);
    }
}
