<?php

use App\Http\Controllers\PlayersController;
use App\Http\Controllers\WorldsController;
use Illuminate\Support\Facades\Route;

// --------------------------- players -------------------------------

// 顯示所有角色的資料
Route::get('players', [PlayersController::class, 'index'])->name('players.index');
// 顯示單筆角色的資料
Route::get('players/{id}', [PlayersController::class, 'show'])->where('id', '[0-9]+')->name('players.show');
// 修改表單(角色)
Route::get('players/{id}/edit', [PlayersController::class, 'edit'])->where('id', '[0-9]+')->name('players.edit');

// --------------------------- worlds --------------------------------

// 顯示所有區域的資料
Route::get('worlds', [WorldsController::class, 'index'])->name('worlds.index');