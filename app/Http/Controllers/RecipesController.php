<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use App\Models\Step;

class RecipesController
{
    public function index()
    {
        $recettes = Recette::paginate(12);
        return view(
            'recipes-catalog',
            [
                'recettes' => $recettes,
                'title' => 'Catalogue - Heal Meal'
            ]
        );
    }

    public function show($ref)
    {
        $recette = Recette::with(['origine', 'user', 'ingredients', 'steps'])
            ->where('references', $ref)
            ->first();

        if (!$recette) {
            abort(404, 'Recette not found');
            exit;
        }

        $recette = $recette->toArray();
        
        return view('details', [
            'title' => $recette["name"] . ' - Heal Meal',
            'recette' => $recette
        ]);
    }
}
