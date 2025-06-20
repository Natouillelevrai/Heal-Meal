<?php

namespace App\Http\Controllers;

use App\Models\All

class AllergeneController extends Controller
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

        return view('home', [
            'title' => 'Accueil',
            'recettes' => $RecettesResult,
            'regimes' => $RegimeResult,
            'origins' => $OriginResult,
        ]);
    }

}
