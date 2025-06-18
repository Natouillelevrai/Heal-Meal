<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use App\Models\Regime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $recettes = Recette::select('recettes.*')
            ->join('rating', 'recettes.id_recette', '=', 'rating.id_recette')
            ->selectRaw('AVG(rating.rate) as average_rating')
            ->groupBy('recettes.id_recette')
            ->orderByDesc('average_rating')
            ->limit(25)
            ->get();

        $result = [];
        $usedIndexes = [];

        while (count($result) < 6) {
            $rand = rand(0, count($recettes) - 1);
            if (!in_array($rand, $usedIndexes)) {
                $usedIndexes[] = $rand;
                $result[] = $recettes[$rand];
            }
        }

        return view('home', [
            'title' => 'Accueil',
            'recettes' => $result,
        ]);
    }

}