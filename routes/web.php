<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/news', function () {
    return view('newspage');
})->name('news');

Route::get('/newsdetail1', function () {
    return view('newsdetail1');
})->name('newsdetail1');

Route::get('/newsdetail2', function () {
    return view('newsdetail2');
})->name('newsdetail2');

Route::get('/newsdetail3', function () {
    return view('newsdetail3');
})->name('newsdetail3');

Route::get('/newsdetail4', function () {
    return view('newsdetail4');
})->name('newsdetail4');

Route::get('/newsdetail5', function () {
    return view('newsdetail5');
})->name('newsdetail5');

Route::get('/newsdetail6', function () {
    return view('newsdetail6');
})->name('newsdetail6');

Route::get('/newsdetail7', function () {
    return view('newsdetail7');
})->name('newsdetail7');

Route::get('/bundling', function () {
    return view('bundling');
})->name('bundling');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about-team', function () {
    return view('about_team');
})->name('about_team');

Route::get('/purchase', function () {
    return view('purchase');
})->name('purchase');

Route::get('/about-us', function () {
    return view('about_us');
})->name('about_us');

Route::get('/loading', function () {
    return view('loading');
})->name('loading');