<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KaryawanController;
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
    return view('Beranda');
});

Route::get('/Partnership', function () {
    return view('partnership');
});

// Budidaya

Route::get('/Budidaya', function () {
    return view('Budidaya');
});
Route::get('/Budidaya/intro', function () {
    return view('Budidaya.intro');
});
Route::get('/Budidaya/lobster-airtawar', function () {
    return view('Budidaya.lobster-airtawar');
});
Route::get('/Budidaya/habitat', function () {
    return view('Budidaya.habitat');
});
Route::get('/Budidaya/makanan', function () {
    return view('Budidaya.makanan');
});
Route::get('/Budidaya/ukuran', function () {
    return view('Budidaya.ukuran');
});
Route::get('/Budidaya/pemijahan', function () {
    return view('Budidaya.pemijahan');
});
Route::get('/Budidaya/pembesaran', function () {
    return view('Budidaya.pembesaran');
});
Route::get('/Budidaya/penjualan', function () {
    return view('Budidaya.penjualan');
});


Route::resource('barang', BarangController::class);
Route::get('barang/index/admin', [BarangController::class, 'index_admin']);
Route::get('barang/index/manager', [BarangController::class, 'index_manager']);
Route::get('barang/{barang}/tambah', [BarangController::class, 'tambah']);
Route::get('barang/{barang}/kurang', [BarangController::class, 'kurang']);
Route::get('barang/{barang}/set', [BarangController::class, 'set']);

Route::match(['put', 'patch'], 'barang/{barang}/tambah', [BarangController::class, 'update_tambah']);
Route::match(['put', 'patch'], 'barang/{barang}/kurang', [BarangController::class, 'update_kurang']);
Route::match(['put', 'patch'], 'barang/{barang}/set', [BarangController::class, 'update_set']);

Route::resource('user', UserController::class);
Route::get('user/{User}/password', [UserController::class, 'edit_password']);
Route::get('/logout', [UserController::class, 'logout']);
Route::match(['put', 'patch'], '/login', [UserController::class, 'login']);
// Route::match(['put', 'patch'], '/logout', [UserController::class, 'logout']);
Route::match(['put', 'patch'], 'user/{id}/password', [UserController::class, 'update_password']);
Route::match(['put', 'patch'], 'user/{id}/role', [UserController::class, 'update_role']);
Route::match(['put', 'patch'], 'user/{id}/pecat', [UserController::class, 'pecat']);

Route::resource('pemesanan', PemesananController::class);
Route::get('pengiriman', [PemesananController::class, 'master_pengiriman']);
Route::get('/pengiriman/{pemesanan}', [PemesananController::class, 'show_pengiriman']);
Route::match(['put', 'patch'], '/pengiriman/{pemesanan}/update', [PemesananController::class, 'update_pengiriman']);
Route::get('pemesanan/{pemesanan}/create', [PemesananController::class, 'create']);
Route::get('RiwayatBelanja', [PemesananController::class, 'riwayat']);


Route::resource('penangkaran', PenangkaranController::class);

Route::resource('pembayaran', PembayaranController::class);

Route::resource('karyawan', KaryawanController::class);

Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('menu.register');
});
Route::get('/partnership', function(){
    return view('menu.partnership');
});
Route::get('/budidaya', function(){
    return view('menu.budidaya');
});
Route::get('/belanja', function(){
    return view('menu.belanja');
});
Route::get('/changepw', function(){
    return view('menu.change_password');
});
Route::get('/stock', function(){
    return view('admin.admin_gudang.admin_stock');
});
Route::get('/edit_profile', function(){
    return view('profile.edit_profile');
});


Route::get('/Budidaya/intro', function(){
    return view('budidaya.intro');
});
Route::get('/Budidaya/lobster', function(){
    return view('budidaya.lobster-airtawar');
});
Route::get('/Budidaya/habitat', function(){
    return view('budidaya.habitat');
});
Route::get('/Budidaya/makanan', function(){
    return view('budidaya.makanan');
});
Route::get('/Budidaya/ukuran', function(){
    return view('budidaya.ukuran');
});
Route::get('/Budidaya/pemijahan', function(){
    return view('budidaya.pemijahan');
});
Route::get('/Budidaya/pembesaran', function(){
    return view('budidaya.pembesaran');
});
Route::get('/Budidaya/penjualan', function(){
    return view('budidaya.penjualan');
});

Route::get('/RiwayatBelanja', function () {
    return view('RiwayatBelanja');
});

// Admin
Route::get('/boss', function () {
    return view('Boss.Admin');
});
Route::get('/manager', function () {
    return view('Manager.admin');
});
Route::get('/admingudang', function () {
    return view('Stock Gudang.Admin');
});
Route::get('/kurir', function () {
    return view('kurir.admin');
});

Route::get('/admin/absen', function () {
    return view('Stock Gudang.Karyawan');
});

Route::get('/manager/penjualan', function () {
    return view('Manager.Penjualan');
});

// Route::get('/manager/karyawan', function () {
//     return view('Manager.Karyawan');
// });

// Route::get('/admin/pembayaran', function () {
//     return view('Boss.Pembayaran');
// });
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
