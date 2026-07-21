<?php

use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;

// Route::inertia('/', 'welcome')->name('home');

Route::get('/', function () {
    return view('home');
});

Route::get('/', [CardController::class, 'index'])->name('card.index');
Route::get('/{id}', [CardController::class, 'show'])->name('card.show');