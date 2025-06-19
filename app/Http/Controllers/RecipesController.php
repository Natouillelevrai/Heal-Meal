<?php

namespace App\Http\Controllers;

use App\Models\Recette;

class RecipesController
{
public function index() {
        $recettes = Recette::paginate(12);
        return view('recipes-catalog', ['recettes' => $recettes, 'title' => 'Recipes Catalog']);
    }
}
