<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin extends Middleware
{
    public function handle(Request $request, Closure $next)
    {
        // Vérifie si l'utilisateur est authentifié et admin
        if (Auth::check() && Auth::user()->id_roles == 1) {
            return $next($request);
        }

        return redirect('/')->with('error', 'Accès refusé.');
    }
}