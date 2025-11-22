<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;

//Route::get('/', function () {
  //  return view('dashboard');
//});

Route::get('/',[DashboardController::class , 'index']
)->name('dashboard');
Route::post('/ideas', [IdeaController::class, 'store'])
    ->name('idea.create');



