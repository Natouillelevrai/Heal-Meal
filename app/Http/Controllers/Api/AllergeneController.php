<?php

namespace App\Http\Controllers\Api;

use App\Models\Allergene;
use App\Http\Controllers\Controller;

class AllergeneController extends Controller
{
    public function all()
    {
        $allergene = Allergene::all();
        return response()->json($allergene);
    }

}
