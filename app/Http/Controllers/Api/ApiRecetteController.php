<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiRecetteController extends Controller
{
    public function addFavorite(Request $request): JsonResponse
    {
        $userId = $request->input('id_user');
        $recetteId = $request->input('id_recette');
        
        Favorite::create([
            "id_user" => $userId,
            "id_recette" => $recetteId,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return response()->json([
            "ResultCode" => 200
        ]);
    }
}
