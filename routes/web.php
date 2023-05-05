<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Route::get('admin', function () {
    return view('admin');
});

//untuk redirect ke home pakai home controller
Route::get('/redirects',[HomeController::class,'index']);

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

Route::get('/historyproses', function () {
    return view('historyproses');
});

Route::get('/historyselesai', function () {
    return view('historyselesai');
});
Route::get('/adminpesananmasuk', function () {
    return view('adminpesananmasuk');
});
Route::get('/order', function () {
    return view('reservasi');
});

Route::get('/RincianPembayaranAdmin', function () {
    return view('RincianPembayaranAdmin');
});

Route::get('/RincianPembayaranUser', function () {
    return view('RincianPembayaranUser');
});

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
