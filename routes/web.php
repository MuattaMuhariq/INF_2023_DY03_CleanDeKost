<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PembayaranController;

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
    return view('welcome');
});

Route::get('admin', function () {
    return view('admin');
});

//untuk redirect ke home pakai home controller
Route::get('/redirects', [HomeController::class, 'index']);

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/katalog', function () {
    return view('Katalog');
});

Route::get('/history',[AdminController::class, 'history'] )->name('history');

Route::get('/historyselesai', function () {
    return view('historyselesai');
});
Route::get('/adminpesananmasuk', [AdminController::class, 'index'])->name('admin.pesanan');
Route::get('/order', function () {
    return view('reservasi');
});

Route::post('/order/store',[OrderController::class, 'store'])->name('order.store');
Route::post('/pembayaran/store',[PembayaranController::class, 'store'])->name('pembayaran.store');

Route::get('/RincianPembayaranAdmin/{id}', function ($id) {
    return view('RincianPembayaranAdmin');
});

Route::get('/RincianPembayaranUser', [PembayaranController::class, "pembayaran"]);

Route::get('/BuktiPembayaran', function () {
    return view('BuktiPembayaran');
});

// ini menampilksn dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
