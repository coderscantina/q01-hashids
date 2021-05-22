<?php

use Illuminate\Support\Facades\Route;

Route::get('profiles', [\App\Http\Controllers\ProfileController::class, 'index'])->name('profiles.index');
Route::get('profiles/{user}', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profiles.show');
