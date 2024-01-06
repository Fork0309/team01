<?php

use App\Http\Controllers\PlayersController;
use App\Http\Controllers\WorldsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::middleware(['auth'])->group(function () 
{
    Route::get('/', function()
    {
        return redirect('players');
    });

    // --------------------------- players -------------------------------

    // 顯示所有角色資料
    Route::get('players', [PlayersController::class, 'index'])->name('players.index');

    // 選定職業查詢角色
    Route::get('players/profession', [PlayersController::class, 'profession'])->name('players.profession');
    
    // 顯示單一角色資料
    Route::get('players/{id}', [PlayersController::class, 'show'])->where('id', '[0-9]+')->name('players.show');

    // 新增角色表單
    Route::get('players/create', [PlayersController::class, 'create'])->name('players.create')->middleware('can:admin');

    // 修改單一角色表單
    Route::get('players/{id}/edit', [PlayersController::class, 'edit'])->where('id', '[0-9]+')->name('players.edit');

    // 修改角色資料
    Route::patch('players/update/{id}', [PlayersController::class, 'update'])->where('id', '[0-9]+')->name('players.update');

    // 儲存角色資料
    Route::post('players/store', [PlayersController::class, 'store'])->where('id', '[0-9]+')->name('players.store')->middleware('can:admin');

    // 刪除單一角色資料
    Route::delete('players/delete/{id}', [PlayersController::class, 'destroy'])->where('id', '[0-9]+')->name('players.destroy')->middleware('can:admin');

    // --------------------------- worlds --------------------------------

    // 顯示所有區域的資料
    Route::get('worlds', [WorldsController::class, 'index'])->name('worlds.index');

    // 選定科技水平查詢區域
    Route::get('worlds/technology', [WorldsController::class, 'technology'])->name('worlds.technology');
    
    // 顯示單一區域資料
    Route::get('worlds/{id}', [WorldsController::class, 'show'])->where('id', '[0-9]+')->name('worlds.show');

    // 新增區域表單
    Route::get('worlds/create', [WorldsController::class, 'create'])->name('worlds.create')->middleware('can:admin');

    // 修改單一區域表單
        Route::get('worlds/{id}/edit', [WorldsController::class, 'edit'])->where('id', '[0-9]+')->name('worlds.edit');

    // 修改區域資料
    Route::patch('worlds/update/{id}', [WorldsController::class, 'update'])->where('id', '[0-9]+')->name('worlds.update');

    // 儲存區域資料
    Route::post('worlds/store', [WorldsController::class, 'store'])->where('id', '[0-9]+')->name('worlds.store')->middleware('can:admin');

    // 刪除單一區域資料
    Route::delete('worlds/delete/{id}', [WorldsController::class, 'destroy'])->where('id', '[0-9]+')->name('worlds.destroy')->middleware('can:admin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
