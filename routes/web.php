<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosController;
use App\Http\Controllers\SiswaController;


Route::get('/', function () {
    return view('Beranda');
});

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

Route::get('/kontak', function () {
    return view('kontak');
});


// Route::get('/berita', function () {
//     return view('berita');
// }); 
Route::get('/berita', [PosController::class, 'index']);
Route::get('/berita/{id}', [PosController::class, 'show'])->name('berita.show');

Route::get('/fasilitas', function () {
    return view('fasilitas');
}); 
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');

Route::get('/admin', [PosController::class, 'admin'])->name('admin.index');

Route::post('/berita', [PosController::class, 'store'])->name('berita.store');
Route::put('/admin/update/{id}', [PosController::class, 'update'])->name('berita.update');
Route::delete('/admin/delete/{id}', [PosController::class, 'destroy'])->name('admin.destroy');