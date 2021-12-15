<?php


use App\Http\Controllers\api\admin\BookingController;
use App\Http\Controllers\api\admin\CateGalleryController;
use App\Http\Controllers\api\admin\CateProductController;
use App\Http\Controllers\api\admin\EventController;
use App\Http\Controllers\api\admin\GalleryController;
use App\Http\Controllers\api\admin\GalleryEventController;
use App\Http\Controllers\api\admin\GalleryNewController;
use App\Http\Controllers\api\admin\loginAdminController;
use App\Http\Controllers\api\admin\NewController;
use App\Http\Controllers\api\admin\ProductController;
use App\Http\Controllers\api\admin\SettingController;
use App\Http\Controllers\api\admin\SliderController;
use App\Http\Controllers\api\admin\SocialMediaController;
use App\Http\Controllers\api\admin\VideoController;
use App\Http\Controllers\api\client\BookingController as ClientBookingController;
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
    Route::prefix('gallery')->group(function () {
      // Route::get('/{id}', [GalleryEventController::class, 'index'])->name('gallery.event.list.api');
      // Route::get('/show/{id}', [GalleryEventController::class, 'show']);
      Route::post('/', [GalleryController::class, 'store'])->name('gallery.add.api');
      Route::delete('/delete/{id}', [GalleryController::class, 'destroy'])->name('gallery.delete.api');
    });
  });
  Route::prefix('event')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('event.list.api');
    Route::get('/show/{id}', [EventController::class, 'show']);
    Route::post('/', [EventController::class, 'store'])->name('event.add.api');
    Route::post('edit', [EventController::class, 'update'])->name('event.update.api');
    Route::delete('{id}', [EventController::class, 'destroy']);
    //gallery
    Route::prefix('gallery')->group(function () {
      // Route::get('/{id}', [GalleryEventController::class, 'index'])->name('gallery.event.list.api');
      // Route::get('/show/{id}', [GalleryEventController::class, 'show']);
      Route::post('/', [GalleryEventController::class, 'store'])->name('gallery.event.add.api');
      Route::delete('/delete/{id}', [GalleryEventController::class, 'destroy'])->name('gallery.event.delete.api');
    });
  });
  Route::prefix('new')->group(function () {
    Route::get('/', [NewController::class, 'index'])->name('new.list.api');
    Route::get('/show/{id}', [NewController::class, 'show']);
    Route::post('/', [NewController::class, 'store'])->name('new.add.api');
    Route::post('edit', [NewController::class, 'update'])->name('new.update.api');
    Route::delete('{id}', [NewController::class, 'destroy']);
    //gallery
    Route::prefix('gallery')->group(function () {
      // Route::get('/{id}', [GalleryEventController::class, 'index'])->name('gallery.event.list.api');
      // Route::get('/show/{id}', [GalleryEventController::class, 'show']);
      Route::post('/', [GalleryNewController::class, 'store'])->name('gallery.new.add.api');
      Route::delete('/delete/{id}', [GalleryNewController::class, 'destroy'])->name('gallery.new.delete.api');
    });
  });
  Route::prefix('setting')->group(function () {
    Route::get('/', [SettingController::class, 'index'])->name('setting.list.api');
    Route::get('/show/{id}', [SettingController::class, 'show']);
    Route::post('/', [SettingController::class, 'store'])->name('setting.add.api');
    Route::post('edit', [SettingController::class, 'update'])->name('setting.update.api');
    Route::delete('{id}', [SettingController::class, 'destroy']);
  });
  Route::prefix('video')->group(function () {
    Route::get('/', [VideoController::class, 'index'])->name('video.list.api');
    Route::get('/show/{id}', [VideoController::class, 'show']);
    Route::post('/', [VideoController::class, 'store'])->name('video.add.api');
    Route::post('edit', [VideoController::class, 'update'])->name('video.update.api');
    Route::delete('{id}', [VideoController::class, 'destroy']);
  });
  Route::prefix('social-media')->group(function () {
    Route::get('/', [SocialMediaController::class, 'index'])->name('social.media.list.api');
    Route::get('/show/{id}', [SocialMediaController::class, 'show']);
    Route::post('/', [SocialMediaController::class, 'store'])->name('social.media.add.api');
    Route::post('edit', [SocialMediaController::class, 'update'])->name('social.media.update.api');
    Route::delete('{id}', [SocialMediaController::class, 'destroy']);
  });

  Route::prefix('slider')->group(function () {
    Route::get('/', [SliderController::class, 'index'])->name('slider.list.api');
    Route::get('/show/{id}', [SliderController::class, 'show']);
    Route::post('/', [SliderController::class, 'store'])->name('slider.add.api');
    Route::post('edit', [SliderController::class, 'update'])->name('slider.update.api');
    Route::delete('{id}', [SliderController::class, 'destroy']);
  });
});

// client routes
Route::prefix('client')->group(function () {
    Route::prefix('booking')->group(function () {
      Route::post('/', [ClientBookingController::class, 'store'])->name('booking.add.api.client');
    });

});

// end client routes
