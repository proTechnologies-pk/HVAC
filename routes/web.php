<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Frontend\ProductsController;
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

Route::get('/clear', function () {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('route:cache');
    Artisan::call('view:clear');
    return redirect()->back();
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/products', ProductsController::class);
Route::get('/products/rent', [ProductsController::class, 'rent'])->name('products.rent');
Route::get('/products/buy', [ProductsController::class, 'rent'])->name('products.buy');


Route::group(['prefix' => 'backend', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('backend.dashboard');
    Route::resource('/setting', SettingController::class);
    Route::get('settings/banners', [SettingController::class,'bannerIndex'])->name('setting.banner');
    Route::get('settings/addbanner', [SettingController::class,'bannerCreate'])->name('setting.addbanner');
    Route::POST('settings/storebanner', [SettingController::class,'bannerStore'])->name('setting.storebanner');
    Route::resource('/service', ServiceController::class);
    Route::resource('/category', CategoryController::class);

});
