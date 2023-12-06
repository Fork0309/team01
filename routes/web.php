<?php

use App\Http\Controllers\PlayersController;
use App\Http\Controllers\WorldsController;
use Illuminate\Support\Facades\Route;

// --------------------------- players -------------------------------

// 顯示所有角色資料
Route::get('players', [PlayersController::class, 'index'])->name('players.index');

// 新增表單
Route::get('players/create', [PlayersController::class, 'create'])->name('players.create');

// 顯示單一角色資料
Route::get('players/{id}', [PlayersController::class, 'show'])->where('id', '[0-9]+')->name('players.show');

// 修改單一角色表單
Route::get('players/{id}/edit', [PlayersController::class, 'edit'])->where('id', '[0-9]+')->name('players.edit');

// --------------------------- worlds --------------------------------

// 顯示所有區域的資料
Route::get('worlds', [WorldsController::class, 'index'])->name('worlds.index');

// 顯示單一區域資料
Route::get('worlds/{id}', [WorldsController::class, 'show'])->where('id', '[0-9]+')->name('worlds.show');

// 修改單一區域表單
Route::get('worlds/{id}/edit', [WorldsController::class, 'edit'])->where('id', '[0-9]+')->name('worlds.edit');;