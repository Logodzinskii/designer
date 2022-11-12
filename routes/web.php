<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPortfolio;

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
    return view('/pages/index');
});
Route::get('/project/{category}/{id}', [ControllerPortfolio::class, 'showPortfolio']);

Route::get('/personal/', function () {
    return view('/pages/personal');
});
Route::get('/about/', function () {
    return view('/pages/about');
});
Route::get('/services/', function () {
    return view('/pages/services');
});
Route::get('/cooperation/', function () {
    return view('/pages/cooperation');
});
Route::get('/portfolio/', [ControllerPortfolio::class, 'index']);

Route::get('/admin/portfolios/view/', [ControllerPortfolio::class, 'adminIndex'])->name('admin.index')->middleware('auth');

Route::get('/admin/create/portfolio/', function () {
    return view('/admin/adminPortfolio');
})->middleware('auth');

Route::post('/create/portfolio/', [ControllerPortfolio::class, 'createPortfolio'])
    ->name('create.portfolio');
Route::get('/delete/portfolio/{id}', [ControllerPortfolio::class, 'deletePortfolio'])->name('admin.delete.portfolio')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
