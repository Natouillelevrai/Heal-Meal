<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recette;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecipesController extends Controller
{


    private function requestBaseRecipe()
    {
        return Recette::join('users', 'recettes.id_user', '=', 'users.id_user')
            ->join('origins', 'recettes.id_origine', '=', 'origins.id_origine')
            ->leftJoin('rating', 'recettes.id_recette', '=', 'rating.id_recette')
            ->leftJoin('fk_recettes_ingredients', 'recettes.id_recette', '=', 'fk_recettes_ingredients.id_recette')
            ->leftJoin('ingredients', 'fk_recettes_ingredients.id_ingredient', '=', 'ingredients.id_ingredient')
            ->leftJoin('fk_ingredient_regime', 'ingredients.id_ingredient', '=', 'fk_ingredient_regime.id_ingredient')
            ->leftJoin('regime', 'fk_ingredient_regime.id_regime', '=', 'regime.id_regime')
            ->select(
                'recettes.id_recette',
                'recettes.name',
                'recettes.image',
                'recettes.desc',
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
                'users.username',
                'origins.name'
            );
    }

    public function user(Request $request): JsonResponse
    {
        $type = $request->input('type');
        $userId = $request->input('id_user');
        User::findOrFail($userId);
        switch ($type) {
            case 'public':
                $recettes = $this->requestBaseRecipe()
                    ->where('recettes.id_user', $userId)
                    ->where('recettes.public', true)
                    ->get();
                break;

            case 'private':
                $recettes = $this->requestBaseRecipe()
                    ->where('recettes.id_user', $userId)
                    ->where('recettes.public', false)
                    ->get();
                break;

            case 'commenter':
                $recettes = $this->requestBaseRecipe()
                    ->join('comment', 'comment.id_recettes', '=', 'recettes.id_recette')
                    ->where('comment.id_user', $userId)
                    ->get();
                break;

            case 'enregistrer':
                // a faire
                break;

            default:
                return response()->json(['error' => 'Type de recherche invalide'], 400);
        }


        if ($recettes->isEmpty()) {
            return response()->json(['recettes' => "<p>Il n'y a pas de recette dans cette catégorie</p>"]);
        }

        $html = view('profile.partials.recettes-list', ['recettes' => $recettes])->render();
        return response()->json(['recettes' => $html]);
    }

}
