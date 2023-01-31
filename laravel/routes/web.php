<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SourceController as AdminSourceController;
use App\Http\Controllers\Admin\FeedbackController as AdminFeedbackController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController ;

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

Route::get('/', static function () {
    return view('welcome');
})->name('main');
Route::resource('feedbacks', FeedbackController::class);
Route::resource('orders', OrderController::class);

Route::group(['prefix' => ''], static function () {
    Route::get('/news/{id}/show', [NewsController::class, 'show'])->where('id', '\d+')->name('news.show');


    Route::get('/news', [NewsController::class, 'index'])->name('news');

    Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');

    Route::get('/categories/{id}/show', [CategoriesController::class, 'show'])->where('id', '\d+')->name('categories.show');

});


Route::group(['prefix' => 'admin', 'as' => 'admin.'], static function () {
    Route::get('/', AdminController::class)->name('admin.index');
    Route::resource('news', AdminNewsController::class);
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('sources',AdminSourceController::class);
    Route::resource('feedbacks',AdminFeedbackController::class);
    Route::resource('orders',AdminOrderController::class);
});
