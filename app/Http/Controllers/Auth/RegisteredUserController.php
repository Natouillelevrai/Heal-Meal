<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\FkAllergenesUsers;
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
            'birth' => ['required', 'date','before:today'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'regime' => ['nullable', 'string'],
            'allergenes' => ['nullable', 'array'], // À adapter si tu stockes en JSON
            'objectif' => ['nullable', 'string'],
        ]);
        try {

            $user = User::create([
                'firstName' => $validated['firstname'],
                'lastName' => $validated['lastname'],
                'username' => $validated['username'],
                'birth' => $validated['birth'],
                'email' => $validated['email'],
                'id_roles' => 2,
                'password' => Hash::make($validated['password']),
                'regime' => $validated['regime'] ?? null,
                'objectif' => $validated['objectif'] ?? null,
            ]);

            foreach ($validated['allergenes'] as $allergen) {
                FkAllergenesUsers::create([
                    'user_id' => $user->id,
                    'allergen_id' => $allergen,
                ]);
            }


            event(new Registered($user));

            Auth::login($user);

            return response()->json(['message' => 'User successfully registered.']);

        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()]);
        }
    }
}
