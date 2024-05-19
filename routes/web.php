<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

if ( auth()->check() ) {
    Route::redirect('/app', '/app/login');
}

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/links', [PagesController::class, 'links'])->name('links');
Route::get('/articles', [ArticlesController::class, 'index'])->name('articles');
Route::get('/article/{slug}', [ArticlesController::class, 'show'])->name('show');

Route::get('/do-not-track', function () {
    session()->put('doNotTrack', true);
    return redirect('/');
});