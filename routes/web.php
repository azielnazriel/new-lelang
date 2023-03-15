<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\LelangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PetugasController;
use App\Models\Barang;
use App\Models\Lelang;
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
    return view('index', [
        'lelang' => Lelang::where('status_15480', 'dibuka')->get()
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'postLogin']);

Route::get('/register', function () {
    return view('login.register');
});


Route::get('/pet', function () {
    return view('petugas.index', [
        'header' => 'Dashboard'
    ]);
});
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'header' => 'Dashboard'
    ]);
});

Route::get('/dash', function () {
    return view('menu.dash', [
        'header' => 'Data Petugas'
    ]);
});

Route::get('/slide', function () {
    return view('slide.barang', [
        'header' => 'Data Barang'
    ]);
});

Route::get('/side', function () {
    return view('side.lelang', [
        'header' => 'Data Lelang'
    ]);
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::resource('/masyarakat', MasyarakatController::class);

Route::resource('/petu', PetugasController::class);

Route::resource('/barang', BarangController::class);

Route::resource('/lelang', LelangController::class);


// Route::get('/petu/.{'$id_15480'}./edt', PetugasController::class);