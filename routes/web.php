<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\kategoriController;

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

Route::get('/welcome', function () {
    echo "Welcome";
});

// Route dengan parameter
Route::get('/show/{id?}', function ($id = 1) {
    echo "Nilai Parameter Adalah " . $id;
});

// Route dengan reguler expression
Route::get('/edit/{nama}', function ($nama) {
    echo "Nilai Parameter Adalah " . $nama;
})->where('nama', '[A-Za-z]+');

// Route dengan nama
Route::get('/index', function () {
    echo "<a href='" . route('create') . "'>Akses Route dengan nama </a>";
});
Route::get('/create', function () {
    echo "Route diakses menggunakan nama";
})->name('create');

// Route dengan aksi controller
Route::get('/produk', [produkController::class, 'index']);

Route::get('/produk/show', [produkController::class, 'show']);

Route::get('/halaman', function () {
    $title = 'Harry Pooter';
    $konten = 'harry potter and the deathly hallows: part 2';
    return view('halaman', compact('title', 'konten'));
});

Route::get('/pelanggan', [pelangganController::class, 'index']);

Route::get('/produk/store', [produkController::class, 'store']);
Route::get('/produk/update', [produkController::class, 'update']);
Route::get('/produk/delete', [produkController::class, 'delete']);

Route::get('/kategori', [kategoriController::class, 'index']);
Route::get('/kategori/store', [kategoriController::class, 'store']);
Route::get('/kategori/update', [kategoriController::class, 'update']);
Route::get('/kategori/delete', [kategoriController::class, 'delete']);
