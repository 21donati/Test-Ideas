<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

//main

//feed

//profile

Route::get('/', [DashboardController::class , 'index'])->name('dashboard');

Route::any('/idea/{idea}', [IdeaController::class , 'show'])->name('idea.show');

Route::any('/idea', [IdeaController::class , 'store'])->name('idea.create');

Route::delete('/idea/{id}', [IdeaController::class , 'destroy'])->name('idea.destroy');

Route::get('/register', [AuthController::class , 'register'])->name('register');

Route::post('/register', [AuthController::class , 'store']);

Route::get('/login',[AuthController::class , 'login'])->name('login');

Route::post('/login',[AuthController::class , 'authenticate']);

Route::post('/logout',[AuthController::class , 'logout'])->name('logout');

Route::get('/terms', function(){
    return view('terms');
});




