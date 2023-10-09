<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PenangkaranController;
use App\Http\Controllers\UserController;
use App\Models\User;
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
    return view('content/home');
});

Route::resource('barang', BarangController::class);
Route::get('barang/{barang}/tambah', [BarangController::class, 'tambah']);
Route::get('barang/{barang}/kurang', [BarangController::class, 'kurang']);
Route::get('barang/{barang}/set', [BarangController::class, 'set']);

Route::match(['put', 'patch'], 'barang/{barang}/tambah', [BarangController::class, 'update_tambah']);
Route::match(['put', 'patch'], 'barang/{barang}/kurang', [BarangController::class, 'update_kurang']);
Route::match(['put', 'patch'], 'barang/{barang}/set', [BarangController::class, 'update_set']);

Route::resource('user', UserController::class);
Route::get('user/{User}/password', [UserController::class, 'edit_password']);
Route::match(['put', 'patch'], 'user/{barang}/password', [UserController::class, 'update_password']);

Route::resource('pemesanan', PemesananController::class);
Route::get('pemesanan/{barang}/create', [PemesananController::class, 'create']);

Route::resource('penangkaran', PenangkaranController::class);

Route::resource('pembayaran', PembayaranController::class);

Route::get('/login', function(){
    return view('menu.login');
});
Route::get('/register', function(){
    return view('menu.register');
});
Route::get('/partnership', function(){
    return view('menu.partnership');
});

// function untuk membuat data karyawan / user yang terhubung dengan penangkaran
// Route::get('tes', function(){
//     $user = User::find(1);
//     $penangkaran = ['1'];
//     $user->karyawan()->sync($penangkaran);
//     echo 123;
// });

// Route::get('deltes', function(){
//     $user = User::find(1);
//     $penangkaran = ['1'];
//     $user->karyawan()->detach();
//     echo 123;
// });
