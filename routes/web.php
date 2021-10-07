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
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\PageController::class, 'Index'])->name(
    'index'
);
Route::get('/about', [
    App\Http\Controllers\PageController::class,
    'About',
])->name('about');
Route::get('/news', [App\Http\Controllers\PageController::class, 'News'])->name(
    'news'
);
Route::get('/draft', [
    App\Http\Controllers\PageController::class,
    'Draft',
])->name('draft');
