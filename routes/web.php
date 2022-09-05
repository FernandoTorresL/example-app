<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Para no repetir el controlador, se incluyen en un grupo
Route::controller(PageController::class)->group(function () {
    Route::get('/',                 'home')->name('home');
    Route::get('blog',              'blog')->name('blog');
    Route::get('blog/{post:slug}',  'post')->name('post');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
