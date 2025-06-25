<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ApiRecetteController extends Controller
{
    public function toggle(Request $request)
    {
        $userId = $request->input('id_user');
        $recetteId = $request->input('id_recette');

        // Existe déjà ?
        $favorite = Favorite::where([
            'id_user'     => $userId,
            'id_recette'  => $recetteId,
        ])->first();

        if ($favorite) {
            $favorite->delete();                 // => retiré
            return response()->json(['status' => 'removed']);
        }

        Favorite::create([                       // => ajouté
            'id_user'    => $userId,
            'id_recette' => $recetteId,
        ]);

        return response()->json(['status' => 'added']);
    }
}