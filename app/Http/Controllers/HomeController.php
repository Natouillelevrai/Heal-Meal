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
        return view('home', [
            'title' => 'Accueil',
            'recettes' => [],
        ]);
    }

}
