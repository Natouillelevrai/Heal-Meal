<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Support\Facades\DB;
use App\Models\Recette;
use App\Models\Step;
use Illuminate\Support\Facades\Auth;

class RecipesController
{
    public function index()
    {
        $recettes = DB::table('recettes')
            ->join('users', 'recettes.id_user', '=', 'users.id_user')
            ->join('origins', 'recettes.id_origine', '=', 'origins.id_origine')
            ->leftJoin('rating', 'recettes.id_recette', '=', 'rating.id_recette')
            ->leftJoin('fk_recettes_ingredients', 'recettes.id_recette', '=', 'fk_recettes_ingredients.id_recette')
            ->leftJoin('ingredients', 'fk_recettes_ingredients.id_ingredient', '=', 'ingredients.id_ingredient')
            ->leftJoin('fk_ingredient_regime', 'ingredients.id_ingredient', '=', 'fk_ingredient_regime.id_ingredient')
            ->leftJoin('regime', 'fk_ingredient_regime.id_regime', '=', 'regime.id_regime')
            ->select(
                'recettes.id_recette',
                'recettes.references',
                'recettes.name',
                'recettes.image',
                'recettes.desc',
                'users.id_user as id_user',
                'users.username as user_name',
                'origins.name as origin_name',
                DB::raw('AVG(rating.rate) as rate'),
                DB::raw('GROUP_CONCAT(DISTINCT ingredients.name SEPARATOR ", ") as ingredients'),
                DB::raw('GROUP_CONCAT(DISTINCT regime.name SEPARATOR ", ") as regimes')
            )
            ->groupBy(
                'recettes.id_recette',
                'recettes.name',
                'recettes.image',
                'recettes.desc',
                'users.id_user',
                'users.username',
                'origins.name'
            )
            ->paginate(12);

        $favorites = collect(); // valeur par défaut vide

        if (Auth::check()) {
            $favorites = Favorite::where('id_user', Auth::id())->get();
        }

        return view('recipes-catalog', [
            'recettes' => $recettes,
            'title' => 'Catalogue de recettes',
            'favorites' => $favorites,  // toujours défini
        ]);
    }
    public function show($ref)
    {
        $recette = Recette::with(['origin', 'user', 'ingredients', 'steps', 'favorite'])
            ->where('references', $ref)
            ->first();

        if (!$recette) {
            abort(404, 'Recette not found');
            exit;
        }

        $recette = $recette->toArray();

        $favorites = collect();

        if (Auth::check()) {
            $favorites = Favorite::where('id_user', Auth::id())->get();
        }

        return view('details', [
            'title' => $recette["name"] . ' - Heal Meal',
            'recette' => $recette,
            'favorites' => $favorites,  // toujours défini
        ]);
    }
}
