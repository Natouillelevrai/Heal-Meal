<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'birth' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'regime' => ['nullable', 'string'],
            'allergenes' => ['nullable', 'string'], // À adapter si tu stockes en JSON
            'objectif' => ['nullable', 'string'],
        ]);

        $user = User::create([
            'name' => $validated['firstname'] . ' ' . $validated['lastname'],
            'firstname' => $validated['firstname'],
            'lastname' => $validated['lastname'],
            'birth' => $validated['birth'],
            'email' => $validated['email'],
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']),
            'regime' => $validated['regime'] ?? null,
            'allergenes' => $validated['allergenes'] ?? null,
            'objectif' => $validated['objectif'] ?? null,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return response()->json([
            'message' => 'Inscription réussie',
            'user' => $user,
        ], 201);
    }
}
