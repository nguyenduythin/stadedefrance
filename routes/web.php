<?php

use App\Http\Controllers\admin\BookingController;
use App\Http\Controllers\admin\CateGalleryController;
use App\Http\Controllers\admin\CateProductController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\ProductController;
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


Route::get('/admin-login', function () {
    return view('admin.login');
})->name('admin.login');

Route::middleware('auth')->group(function () {
    Route::prefix('admin-stadedefrance')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/booking',[BookingController::class, 'index'])->name('admin.booking.list');
        Route::get('/product', [ProductController::class, 'index'])->name('admin.product.list');
        Route::get('/cate-product', [CateProductController::class, 'index'])->name('admin.cate.product.list');
        Route::get('/gallery', [GalleryController::class, 'index'])->name('admin.gallery.list');
        Route::get('/cate-gallery', [CateGalleryController::class, 'index'])->name('admin.cate.gallery.list');

      

    });
});
