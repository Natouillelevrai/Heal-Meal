<?php

use App\Http\Controllers\Api\AllergeneController;
use App\Http\Controllers\Api\RecipesController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;


Route::get('/allergenes', [AllergeneController::class, 'all'])->name('allergenes');
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::post('/userDetail', [RecipesController::class, 'user']);


