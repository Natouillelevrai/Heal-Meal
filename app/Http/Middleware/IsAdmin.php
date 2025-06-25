<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Vérifie si l'utilisateur est authentifié et admin
        if (Auth::check() && Auth::user()->id_role === '1') {
            return $next($request);
        }

        return redirect('/')->with('error', 'Accès refusé.');
    }
}