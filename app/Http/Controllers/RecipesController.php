<?php

namespace App\Http\Controllers;

use App\Models\Recette;

class RecipesController
{
public function index() {
        $recettes = Recette::all();
        return view('recipes-catalog', ['recettes' => $recettes]);
    }
}
