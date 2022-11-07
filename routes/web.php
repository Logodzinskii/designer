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
    return view('/pages/index');
});
Route::get('/project/', function () {
    return view('/pages/project/project');
});
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
Route::get('/portfolio/', function () {
    return view('/pages/portfolio');
});

