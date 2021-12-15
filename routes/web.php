<?php

use App\Http\Controllers\admin\BookingController;
use App\Http\Controllers\admin\CateGalleryController;
use App\Http\Controllers\admin\CateProductController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\GalleryEventController;
use App\Http\Controllers\admin\GalleryNewController;
use App\Http\Controllers\admin\NewController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\SocialMediaController;
use App\Http\Controllers\admin\VideoController;
use App\Http\Controllers\client\BookingController as ClientBookingController;
use App\Mail\BookingMail;
use Illuminate\Support\Facades\Mail;
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
Route::get('/*', function () {
    return view('client.errors.error404');
})->name('error');
Route::get('/thank',  function () {
    return view('client.pages.thank');
})->name('client.thank');


//admin
//routes mail
Route::get('/email',  function () {
    Mail::to('timenailteam@gmail.com')->send(new BookingMail());
    return new BookingMail();
})->name('admin.email');


Route::get('/admin-login', function () {
    return view('admin.login');
})->name('admin.login');
//booking routes
// Route::post('/booking/add', [ClientBookingController::class, 'store'])->name('client.booking.add');

//end booking routes
Route::middleware('auth')->group(function () {
    Route::prefix('admin-stadedefrance')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/booking',[BookingController::class, 'index'])->name('admin.booking.list');
        Route::get('/product', [ProductController::class, 'index'])->name('admin.product.list');
        Route::get('/cate-product', [CateProductController::class, 'index'])->name('admin.cate.product.list');
        // Route::get('/gallery', [GalleryController::class, 'index'])->name('admin.gallery.list');
        Route::get('/cate-gallery/{id}', [GalleryController::class, 'index'])->name('admin.gallery.list');
        Route::get('/cate', [CateGalleryController::class, 'index'])->name('admin.cate.gallery.list');
        Route::get('/event', [EventController::class, 'index'])->name('admin.event.list');
        Route::get('/event-gallery/{id}', [GalleryEventController::class, 'index'])->name('admin.gallery.event.list');
        Route::get('/new', [NewController::class, 'index'])->name('admin.new.list');
        Route::get('/new-gallery/{id}', [GalleryNewController::class, 'index'])->name('admin.gallery.new.list');
        Route::get('/slider', [SliderController::class, 'index'])->name('admin.slider.list');
        Route::get('/setting', [SettingController::class, 'index'])->name('admin.setting.list');
        Route::get('/video', [VideoController::class, 'index'])->name('admin.video.list');
        Route::get('/social-media', [SocialMediaController::class, 'index'])->name('admin.social.media.list');

    });
});


