<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recette;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function user(Request $request): JsonResponse
    {
        $type = $request->input('type');
        $userId = $request->input('id_user');
        User::findOrFail($userId);

        switch ($type) {
            case 'public':
                $recettes = Recette::where('id_user', $userId)
                    ->where('public', true)
                    ->get();
                break;

            case 'private':
                $recettes = Recette::where('id_user', $userId)
                    ->where('public', false)
                    ->get();
                break;

            case 'commenter':
                $recettes = Recette::join('comment', 'comment.id_recettes', '=', 'recettes.id_recette')
                    ->where('comment.id_user', $userId)
                    ->get();
                break;

            case 'enregistrer':
                // à faire
                $recettes = collect(); // Vide pour l'instant
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
