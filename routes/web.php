<?php

use App\Http\Controllers\PlayersController;
use App\Http\Controllers\WorldsController;
use Illuminate\Support\Facades\Route;

Route::get('players', [PlayersController::class, 'index'])->name('players.index');
Route::get('worlds', [WorldsController::class, 'index'])->name('worlds.index');