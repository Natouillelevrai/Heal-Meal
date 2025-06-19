<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Recette;

class RecipesController
{
public function index() {
    $recettes = DB::table('recettes')
        ->join('users', 'recettes.id_user', '=', 'users.id_user')
        ->join('rating', 'recettes.id_recette', '=', 'rating.id_recette')
        ->join('origins', 'recettes.id_origine', '=', 'origins.id_origine')
        ->Join('fk_recettes_ingredients', 'recettes.id_recette', '=', 'fk_recettes_ingredients.id_recette')
        ->leftJoin('ingredients', 'fk_recettes_ingredients.id_ingredient', '=', 'ingredients.id_ingredient')
        ->leftJoin('fk_ingredient_regime', 'ingredients.id_ingredient', '=', 'fk_ingredient_regime.id_ingredient')
        ->leftJoin('regime', 'fk_ingredient_regime.id_regime', '=', 'regime.id_regime')
        ->select(
            'recettes.*',
            'users.username as user_name',
            'origins.name as origin_name',
            'rating.rate as rate',
            DB::raw('GROUP_CONCAT(DISTINCT ingredients.name) as ingredients'),
            DB::raw('GROUP_CONCAT(DISTINCT regime.name) as regimes')
        )
        ->groupBy(
            'recettes.id_recette',
            'recettes.name',
            'recettes.image',
            'recettes.desc',
            'recettes.id_origine',
            'recettes.id_user',
            'recettes.created_at',
            'recettes.updated_at',
            'users.username',
            'origins.name',
            'rating.rate'
        )

        ->paginate(12);

    return view('recipes-catalog', [
        'recettes' => $recettes,
        'title' => 'Recipes Catalog'
    ]);
    }
}
