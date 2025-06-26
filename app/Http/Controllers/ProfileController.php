<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;
use App\Models\Recette;
use App\Models\Rating;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        $favorites = Favorite::where('id_user', Auth::id())->get();
        $favoriteRecipeIds = $favorites->pluck('id_recette');
        $favoriteRecipes = Recette::whereIn('id_recette', $favoriteRecipeIds)->get();

        $rated = Rating::where('id_user', Auth::id())->get();
        $ratedRecipeIds = $rated->pluck('id_recette');
        $ratedRecipes = Recette::whereIn('id_recette', $ratedRecipeIds)->get();

        $publicRecipes = Recette::where("id_user", Auth::id())
            ->where("public", true)
            ->get();

        $privateRecipes = Recette::where("id_user", Auth::id())
            ->where("public", false)
            ->get();

        $publicRecipes->toArray();
        $privateRecipes->toArray();
        $favoriteRecipes->toArray();

        return view('profile/profil', [
            'title' => 'Profile',
            'user' => $user,
            'favorites' => $favorites,

            'publicRecipes' => $publicRecipes,
            'privateRecipes' => $privateRecipes,
            'ratedRecipes' => $ratedRecipes,
            'favoriteRecipes' => $favoriteRecipes
        ]);
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
