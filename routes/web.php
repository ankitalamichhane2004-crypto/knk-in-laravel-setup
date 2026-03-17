<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');

});

Route::get('/product', function () {
    return view('product');

});

Route::get('/aboutproduct', function () {
    return view('aboutproduct');

});



Route::get('/why-choose-us', function () {
    return view('why-choose-us');

});

Route::get('/blog', function () {
    return view('blog');

});

Route::get('/gallery', function () {
    return view('gallery');

});



Route::get('/contact-us', function () {
    return view('contact-us');

});


