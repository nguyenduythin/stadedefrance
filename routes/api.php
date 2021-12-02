<?php

use App\Http\Controllers\api\admin\BookingController;
use App\Http\Controllers\api\admin\CateGalleryController;
use App\Http\Controllers\api\admin\CateProductController;
use App\Http\Controllers\api\admin\GalleryController;
use App\Http\Controllers\api\admin\loginAdminController;
use App\Http\Controllers\api\admin\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', [loginAdminController::class, 'login'])->name('login.admin.api');
Route::get('/logout', [loginAdminController::class, 'logout'])->name('logout.admin');

Route::prefix('admin-stadedefrance')->group(function () {
  Route::prefix('booking')->group(function () {
    Route::get('/', [BookingController::class, 'index'])->name('booking.list.api');
    Route::get('/show/{id}', [BookingController::class, 'show']);
    Route::post('/', [BookingController::class, 'store'])->name('booking.add.api');
    Route::post('edit', [BookingController::class, 'update'])->name('booking.update.api');
    Route::delete('{id}', [BookingController::class, 'destroy']);
  });

  Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.list.api');
    Route::get('/show/{id}', [ProductController::class, 'show']);
    Route::post('/', [ProductController::class, 'store'])->name('product.add.api');
    Route::post('edit', [ProductController::class, 'update'])->name('product.update.api');
    Route::delete('{id}', [ProductController::class, 'destroy']);
  });
  
  Route::prefix('cate-product')->group(function () {
    Route::get('/', [CateProductController::class, 'index'])->name('cate.product.list.api');
    Route::get('/show/{id}', [CateProductController::class, 'show']);
    Route::post('/', [CateProductController::class, 'store'])->name('cate.product.add.api');
    Route::post('edit', [CateProductController::class, 'update'])->name('cate.product.update.api');
    Route::delete('{id}', [CateProductController::class, 'destroy']);
  });
  Route::prefix('gallery')->group(function () {
    Route::get('/', [GalleryController::class, 'index'])->name('gallery.list.api');
    Route::get('/show/{id}', [GalleryController::class, 'show']);
    Route::post('/', [GalleryController::class, 'store'])->name('gallery.add.api');
    Route::delete('{id}', [GalleryController::class, 'destroy']);
  });
  Route::prefix('cate-gallery')->group(function () {
    Route::get('/', [CateGalleryController::class, 'index'])->name('cate.gallery.list.api');
    Route::get('/show/{id}', [CateGalleryController::class, 'show']);
    Route::post('/', [CateGalleryController::class, 'store'])->name('cate.gallery.add.api');
    Route::post('edit', [CateGalleryController::class, 'update'])->name('cate.gallery.update.api');
    Route::delete('{id}', [CateGalleryController::class, 'destroy']);
  });

});
