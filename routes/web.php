<?php

use App\Http\Controllers\KelolaBarangController;
use App\Http\Controllers\KelolaKeuanganController;
use App\Http\Controllers\ProfileController;
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
Route::get('/kelola_toko', function () {
    return view('welcome');
});
Route::view('/dashboard', 'dashboard', ['name' => null]);

Route::get('users/{name?}', function ($name = 'Smackdown') {
    return "User " . $name;
})->where('name', '[A-Za-z]+')->name('regex');

Route::view('/view_kelola_barang', 'kelola_barang');

Route::get('/kelola_barang', [KelolaBarangController::class, 'index'])->name('kelola_barang.index');


Route::resource('kelola_keuangan', KelolaKeuanganController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
