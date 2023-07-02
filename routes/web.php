<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriTransaksiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Models\jenis_kategori_transaksi;
use App\Models\kategori_transaksi;
use App\Models\transaksi;
use Illuminate\Support\Facades\Route;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

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


Route::resource('/', DashboardController::class)->middleware('auth');

Route::resource('/register', UserController::class);

Route::resource('/login', LoginController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::resource('/transaksi', TransaksiController::class)->middleware('auth');

Route::delete('/transaksi', [TransaksiController::class, 'destroy']);

Route::resource('/tambah_kategori_transaksi', KategoriTransaksiController::class)->middleware('auth');


Route::post('/logout', function(Request $request):RedirectResponse 
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/login');
});

Route::get('/get_jenis_kategori', function() {
    return kategori_transaksi::where('jenis_kategori_transaksi_id', request()->id)->get();
});

Route::get('/get_detail_transaksi', function() {
    return transaksi::where('uuid', request()->uuid)->get();
    // return request()->uuid;
});