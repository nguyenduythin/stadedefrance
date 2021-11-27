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
Route::get('/news/detail', function () {
    return view('client.pages.news-detail');
})->name('news.detail');
Route::get('/gallery', function () {
    return view('client.pages.gallery');
})->name('gallery');
Route::get('/contact', function () {
    return view('client.pages.contact');
})->name('contact');
Route::get('/event', function () {
    return view('client.pages.event');
})->name('event');
Route::get('/menu', function () {
    return view('client.pages.menu');
})->name('menu');

//admin
Route::prefix('admin-stadedefrance')->group(function () {
    Route::get('/', function () {
        return view('admin.pages.dashboard');
    })->name('admin.main');
    Route::get('/booking', function () {
        return view('admin.pages.booking');
    })->name('admin.booking.list');
});
