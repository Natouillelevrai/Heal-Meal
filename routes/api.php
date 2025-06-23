<?php

use App\Http\Controllers\Api\AllergeneController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/allergenes', [AllergeneController::class, 'all'])->name('allergenes');

