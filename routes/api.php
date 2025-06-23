<?php

use App\Http\Controllers\Api\AllergeneController;
use Illuminate\Support\Facades\Route;

Route::get('/allergenes', [AllergeneController::class, 'all'])->name('allergenes');
