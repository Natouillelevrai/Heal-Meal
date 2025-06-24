<?php

namespace App\Http\Controllers\Api;


use App\Models\Allergene;
use App\Http\Controllers\Controller;

use App\Models\All;
use App\Models\Origins;
use App\Models\Recette;
use App\Models\Regime;
use Illuminate\Http\Request;


class AllergeneController extends Controller
{
    public function all()
    {
        $allergene = Allergene::all();
        return response()->json($allergene);
    }

}
