<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReaderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Lectores
Route::resource('readers', ReaderController::class);

Route::get('readers/{reader}/read_news', [ReaderController::class, 'showReadNews'])
    ->name('readers.showReadNews');



Route::resource('news', NewsController::class);

Route::get('news/{news}/readers', [NewsController::class, 'showReaders'])
    ->name('news.readers');
