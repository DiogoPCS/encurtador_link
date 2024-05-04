<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/


Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('site.index');

Route::prefix('site')->group(function(){
    Route::get('/redirect', [App\Http\Controllers\AccountController::class, 'redirect'])->name('site.redirect');
    
    Route::get('/register', [App\Http\Controllers\AccountController::class, 'register'])->name('site.register');
    
    Route::get('/recover', [App\Http\Controllers\AccountController::class, 'recorver'])->name('site.recover');
    
    Route::get('/login', [App\Http\Controllers\AccountController::class, 'login'])->name('site.login');
    
    Route::get('/logout', [App\Http\Controllers\AccountController::class, 'logout'])->name('site.logout');
});

Route::prefix('app')->group(function(){
    Route::get('/generate', [App\Http\Controllers\LinkController::class, 'redirect'])->name('app.generate');
    
    Route::get('/remove', [App\Http\Controllers\LinkController::class, 'register'])->name('app.remove');
    
    Route::get('/list', [App\Http\Controllers\LinkController::class, 'recorver'])->name('app.list');
});
