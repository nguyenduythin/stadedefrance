<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('client.pages.home');
})->name('home');
Route::get('/news', function () {
    return view('client.pages.news');
})->name('news');
Route::get('/gallery', function () {
    return view('client.pages.gallery');
})->name('gallery');
Route::get('/contact', function () {
    return view('client.pages.contact');
})->name('contact');
Route::get('/about', function () {
    return view('client.pages.about');
})->name('about');
Route::get('/menu', function () {
    return view('client.pages.menu');
})->name('menu');
