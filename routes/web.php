<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    BarangController,
    DashboardController,
    HistoryLelangController,
    HomeController,
    LelangController,
    LoginController,
    MasyarakatController,
    PenawaranController,
    PetugasController,
    ExportController
};

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

Route::middleware('not-user-and-petugas')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register', [LoginController::class, 'create'])->name('register.create');
});

// Route::middleware('auth:masyarakat')->group(function () {
Route::get('/', HomeController::class)->name('home');
Route::post('/penawaran/{idLelang}', [PenawaranController::class, 'penawaran'])->name('penawaran');
// });

Route::middleware('auth:petugas')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('/barang', BarangController::class)->except('show');
    Route::post('lelang/export', [ExportController::class, 'lelang'])->name('lelang.export');

    Route::middleware('is-admin')->group(function () {
        Route::resource('/masyarakat', MasyarakatController::class)->except('show');
        Route::resource('/petugas', PetugasController::class)->except('show');
    });

    Route::middleware('is-petugas')->group(function () {
        Route::resource('/lelang', LelangController::class)->only('index', 'create', 'store', 'show');
        Route::get('/lelang/{idLelang}/history/create', [HistoryLelangController::class, 'create'])->name('history.create');
        Route::post('/lelang/{idLelang}/history', [HistoryLelangController::class, 'store'])->name('history.store');
        Route::post('/lelang/{idLelang}/history/{idHistory}', [HistoryLelangController::class, 'winner'])->name('history.winner');
    });
});

Route::middleware('auth:petugas,masyarakat')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
