<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Route;

// Route::get('/home', function () {
//     return view('home');

// });

// Route::get('/product', function () {
//     return view('product');

// });

// Route::get('/aboutproduct', function () {
//     return view('aboutproduct');

// });



// Route::get('/why-choose-us', function () {
//     return view('why-choose-us');

// });

// Route::get('/blog', function () {
//     return view('blog');

// });

// Route::get('/gallery', function () {
//     return view('gallery');

// });



// Route::get('/contact-us', function () {
//     return view('contact-us');

// });




// Route::get('/content-us', function () {
//     return view('content-us');

// });


// ava page yasari load garni


Route::get('/home',[NewController::class, 'home'])->name('home');

Route::get('/product',[NewController::class, 'product'])->name('product');

Route::get('/aboutProduct',[NewController::class, 'aboutProduct'])->name('aboutProduct');


Route::get('/blog',[NewController::class, 'blog'])->name('blog');


Route::get('/contactus',[NewController::class, 'contactus'])->name('contactus');


Route::get('/gallery',[NewController::class, 'gallery'])->name('gallery');


Route::get('/welcome',[NewController::class, 'welcome'])->name('welcome');


Route::get('/whychooseus',[NewController::class, 'whychooseus'])->name('whychooseus');


Route::resource('product',DemoController::class);

Route::get('/admin/dashboard', [NewController::class, 'dashboard'])->name('dashboard');