<?php

namespace App\Http\Controllers;

use App\Models\Origins;
use App\Models\Recette;
use App\Models\Regime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // RECETTES AVEC RATING
        $recettes = Recette::select('recettes.*')
            ->join('rating', 'recettes.id_recette', '=', 'rating.id_recette')
            ->selectRaw('AVG(rating.rate) as average_rating')
            ->groupBy('recettes.id_recette')
            ->orderByDesc('average_rating')
            ->limit(25)
            ->get();

        $RecettesResult = [];
        $RecettesUsedIndexes = [];

        while (count($RecettesResult) < 6 && count($RecettesUsedIndexes) < count($recettes)) {
            $rand = rand(0, count($recettes) - 1);
            if (!in_array($rand, $RecettesUsedIndexes)) {
                $RecettesUsedIndexes[] = $rand;
                $RecettesResult[] = $recettes[$rand];
            }
        }

        // REGIMES
        $regimes = Regime::all();
        $RegimeResult = [];
        $RegimeUsedIndexes = [];

        while (count($RegimeResult) < 4 && count($RegimeUsedIndexes) < count($regimes)) {
            $rand = rand(0, count($regimes) - 1);
            if (!in_array($rand, $RegimeUsedIndexes)) {
                $RegimeUsedIndexes[] = $rand;

                if ($regimes[$rand]->image !== null) {
                    $RegimeResult[] = $regimes[$rand];
                }
            }
        }

        // ORIGINS
        $origins = Origins::all();
        $OriginResult = [];
        $OriginUsedIndexes = [];

        while (count($OriginResult) < 4 && count($OriginUsedIndexes) < count($origins)) {
            $rand = rand(0, count($origins) - 1);
            if (!in_array($rand, $OriginUsedIndexes)) {
                $OriginUsedIndexes[] = $rand;

                if ($origins[$rand]->image !== null) {
                    $OriginResult[] = $origins[$rand];
                }
            }
        }

        // SEASON
        $season = 1;
        $currentMonth = date('n');

        if ($currentMonth >= 3 && $currentMonth <= 5) {
            $season = 2; // Printemps
        } elseif ($currentMonth >= 6 && $currentMonth <= 8) {
            $season = 3; // Été
        } elseif ($currentMonth >= 9 && $currentMonth <= 11) {
            $season = 4; // Automne
        } else {
            $seasonseasonDish = 1; // Hiver
        }


        $seasonDish = Recette::select('recettes.*')
            ->join('rating', 'recettes.id_recette', '=', 'rating.id_recette')
            ->selectRaw('AVG(rating.rate) as average_rating')
            ->groupBy('recettes.id_recette')
            ->orderByDesc('average_rating')
            ->where('season', $season)
            ->limit(1)
            ->get();

        $seasonDish = $seasonDish->first(); // ✅ Renvoie null si rien trouvé

        return view('home', [
            'title' => 'Heal Meal',
            'recettes' => $RecettesResult,
            'regimes' => $RegimeResult,
            'origins' => $OriginResult,
            'seasonDish' => $seasonDish
        ]);
    }

}
