<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

// Para no repetir el controlador, se incluyen en un grupo
Route::controller(PageController::class)->group(function () {
    Route::get('/',                 'home')->name('home');
    // Route::get('blog',              'blog')->name('blog');
    Route::get('blog/{post:slug}',  'post')->name('post');
});

Route::redirect('dashboard', 'posts')->name('dashboard');

Route::resource('posts', PostController::class)->middleware(['auth'])->except(['show']);

require __DIR__.'/auth.php';
