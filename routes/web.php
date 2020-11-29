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

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', function () {
        $soHoKhaus = \App\Models\SoHoKhau::all();
        return redirect()->route('home', compact('soHoKhaus'));
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('sohokhau', \App\Http\Controllers\SoHoKhauController::class);
    Route::resource('nhankhau', \App\Http\Controllers\NhanKhauController::class);
    Route::resource('cccd', \App\Http\Controllers\CCCDController::class)->only(['store', 'update', 'destroy']);
    Route::resource('giaykhaisinh', \App\Http\Controllers\GiayKhaiSinhController::class)->only(['store', 'update', 'destroy']);
});
