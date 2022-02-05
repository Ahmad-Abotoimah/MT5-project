<?php

use App\Http\Controllers\TraderController;
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


Route::get('/trade', function () {
    return view('show');
});
//Route::resource('/trade', TraderController::class)->name('store','store');
Route::resource('/', TraderController::class)->name('store','formHandle');
