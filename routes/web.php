<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DatabukuController;
use App\Http\Controllers\Backend\DatakelasController;
use App\Http\Controllers\Backend\DatapeminjamController;
use App\Http\Controllers\Backend\DatasiswaController;
use App\Http\Controllers\Backend\HistoryController;
use App\Http\Controllers\Backend\IndexController;
use App\Http\Controllers\Backend\KonfirmasiController;
use App\Http\Controllers\Backend\ListkategoriController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\SignupController;

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

Route::get('/index', function () {
    return view('backend.index');
});

Route::get('/login', function () {
    return view('backend.login');
});

Route::get('/profile', function () {
    return view('backend.profile');
});

Route::get('/datasiswa', function () {
    return view('backend.datasiswa');
});
Route::get('/tambah_siswa', function () {
    return view('backend.tambah_siswa');
});
Route::get('/edit_siswa', function () {
    return view('backend.edit_siswa');
});


Route::get('/listkelas', function () {
    return view('backend.listkelas');
});


Route::get('/datapeminjam', function () {
    return view('backend.datapeminjam');
});
Route::get('/tambah_peminjam', function () {
    return view('backend.tambah_peminjam');
});
Route::get('/profildata', function () {
    return view('backend.profildata');
});
Route::get('/edit_peminjam', function () {
    return view('backend.edit_peminjam');
});


Route::get('/databuku', function () {
    return view('backend.databuku');
});
Route::get('/tambah_buku', function () {
    return view('backend.tambah_buku');
});
Route::get('/edit_buku', function () {
    return view('backend.edit_buku');
});


Route::get('/konfirmasi', function () {
    return view('backend.konfirmasi');
});
Route::get('/tambah_konfirmasi', function () {
    return view('backend.tambah_konfirmasi');
});


Route::get('/listkategori', function () {
    return view('backend.listkategori');
});
Route::get('/tambah_kategori', function () {
    return view('backend.tambah_kategori');
});
Route::get('/edit_kategori', function () {
    return view('backend.edit_kategori');
});


Route::get('/historydenda', function () {
    return view('backend.historydenda');
});
Route::get('/tambah_history', function () {
    return view('backend.tambah_history');
});
Route::get('/edit_history', function () {
    return view('backend.edit_history');
});


Route::get('/tambah_kelas', function () {
    return view('backend.tambah_kelas');
});
Route::get('/edit_kelas', function () {
    return view('backend.edit_kelas');
});




Route::get('/indexuser', function () {
    return view('frontend.index');
});

Route::get('/listbuku', function () {
    return view('frontend.listbuku');
});

Route::get('/dipinjam', function () {
    return view('frontend.dipinjam');
});

Route::get('/konfirmasi', function () {
    return view('frontend.konfirmasi');
});

Route::get('/history', function () {
    return view('frontend.history');
});

Route::get('/denda', function () {
    return view('frontend.denda');
});

Route::get('/profileuser', function () {
    return view('frontend.profile');
});



Route::get('/fantasy', function () {
    return view('frontend.fantasy');
});
Route::get('/romance', function () {
    return view('frontend.romance');
});
Route::get('/horror', function () {
    return view('frontend.horror');
});
Route::get('/advanture', function () {
    return view('frontend.');
});
Route::get('/mistery', function () {
    return view('frontend.mistery');
});
Route::get('/biography', function () {
    return view('frontend.biography');
});
Route::get('/dictionary', function () {
    return view('frontend.dictionary');
});
Route::get('/humor', function () {
    return view('frontend.humor');
});
Route::get('/paket1', function () {
    return view('frontend.paket1');
});
Route::get('/paket2', function () {
    return view('frontend.paket2');
});
Route::get('/paket3', function () {
    return view('frontend.paket3');
});
Route::get('/pakettambahan', function () {
    return view('frontend.pakettambahan');
});

Route::get('/themagiclibrary', function () {
    return view('frontend.buku.fantasy.themagiclibrary');
});







//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
