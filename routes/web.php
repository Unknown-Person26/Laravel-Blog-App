<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;


// To welcome 
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');

// Blog routes
// To blog post
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
// To create blog post
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
// To edit blog post
// Store blog post to database
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/{post}/edit', [BlogController::class, 'edit'])->name('blog.edit');
// To update blog post
Route::put('/blog/{post}', [BlogController::class, 'update'])->name('blog.update');
// To update blog post
Route::delete('/blog/{post}', [BlogController::class, 'destroy'])->name('blog.destroy');
// To single page blog
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');

// Category resource controller
Route::resource('/categories', CategoryController::class);

// To about route
Route::get('/about', function () {
    return view('frontpages.aboutpages.index');
})->name('about');

// To contact route
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
// To store message
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// To dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
