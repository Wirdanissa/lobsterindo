<?php

use App\Http\Controllers\BarangController;
use App\Models\barang;
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

// Route::get('belanja', [BarangController::class, 'index']);
Route::resource('barang', BarangController::class);
Route::get('barang/{barang}/tambah', [BarangController::class, 'tambah']);
Route::get('barang/{barang}/kurang', [BarangController::class, 'kurang']);
Route::get('barang/{barang}/set', [BarangController::class, 'set']);

// Route::put('barang/{barang}/update_tambah', [BarangController::class, 'update_tambah']);
// Route::patch('barang/{barang}/update_tambah', [BarangController::class, 'update_tambah']);
// Route::put('barang/{barang}/update_kurang', [BarangController::class, 'update_kurang']);
// Route::patch('barang/{barang}/update_kurang', [BarangController::class, 'update_kurang']);

Route::match(['put', 'patch'], 'barang/{barang}/tambah', [BarangController::class, 'update_tambah']);
Route::match(['put', 'patch'], 'barang/{barang}/kurang', [BarangController::class, 'update_kurang']);
Route::match(['put', 'patch'], 'barang/{barang}/set', [BarangController::class, 'update_set']);

Route::get('/', function () {
    return view('content/home');
});

