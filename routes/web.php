<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PemesanController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/dashboard', function () {
        return view('admin.pages.index');
    });

    Route::resource('/merk', MerkController::class);
    Route::resource('/mobil', MobilController::class);
    Route::resource('/pemesan', PemesanController::class);
    Route::resource('/pesanan', PesananController::class);
});

Route::get('/user', function () {
    return view('user.index');
});
