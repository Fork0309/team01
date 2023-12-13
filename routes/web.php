<?php

use App\Http\Controllers\PlayersController;
use App\Http\Controllers\WorldsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function()
{
    return redirect('players');
});

// --------------------------- players -------------------------------

// 顯示所有角色資料
Route::get('players', [PlayersController::class, 'index'])->name('players.index');

// 顯示單一角色資料
Route::get('players/{id}', [PlayersController::class, 'show'])->where('id', '[0-9]+')->name('players.show');

// 新增角色表單
Route::get('players/create', [PlayersController::class, 'create'])->name('players.create');

// 修改單一角色表單
Route::get('players/{id}/edit', [PlayersController::class, 'edit'])->where('id', '[0-9]+')->name('players.edit');

// 刪除單一角色資料
Route::get('players/delete/{id}', [PlayersController::class, 'destroy'])->where('id', '[0-9]+')->name('players.destroy');

// --------------------------- worlds --------------------------------

// 顯示所有區域的資料
Route::get('worlds', [WorldsController::class, 'index'])->name('worlds.index');

// 顯示單一區域資料
Route::get('worlds/{id}', [WorldsController::class, 'show'])->where('id', '[0-9]+')->name('worlds.show');

// 新增區域表單
Route::get('worlds/create', [WorldsController::class, 'create'])->name('worlds.create');

// 修改單一區域表單
Route::get('worlds/{id}/edit', [WorldsController::class, 'edit'])->where('id', '[0-9]+')->name('worlds.edit');

// 刪除單一區域資料
Route::get('worlds/delete/{id}', [WorldsController::class, 'destroy'])->where('id', '[0-9]+')->name('worlds.destroy');