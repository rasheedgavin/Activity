<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('index',[PlayerController::class, 'index'])->name('player.index');
