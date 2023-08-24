<?php

use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// khusus Mahasiswa
Route::middleware(['auth'])->group(function () {
    // route menuju view folder mahasiswa file index
    Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index']);
    // route menuju view folder mahasiswa file create
    Route::get('/mahasiswa/create', [App\Http\Controllers\MahasiswaController::class, 'create'])->name('mahasiswa.create');
    // route menuju view folder mahasiswa file store
    Route::post('/mahasiswa/store', [App\Http\Controllers\MahasiswaController::class, 'store'])->name('mahasiswa.store');
    // route menuju view folder mahasiswa file edit
    Route::get('/mahasiswa/edit/{id}', [App\Http\Controllers\MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    // route menuju view folder mahasiswa file update
    Route::put('/mahasiswa/update/{id}', [App\Http\Controllers\MahasiswaController::class, 'update'])->name('mahasiswa.update');
    // route menuju view folder mahasiswa file destroy
    Route::delete('/mahasiswa/destroy/{id}', [App\Http\Controllers\MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');


    // khusus Dosen
    Route::get('/dosen', [App\Http\Controllers\DosenController::class, 'index']);
    // route menuju view folder dosen file create
    Route::get('/dosen/create', [App\Http\Controllers\DosenController::class, 'create'])->name('dosen.create');
    // route menuju view folder dosen file store
    Route::post('/dosen/store', [App\Http\Controllers\DosenController::class, 'store'])->name('dosen.store');
    // route menuju view folder dosen file edit
    Route::get('/dosen/edit/{id}', [App\Http\Controllers\DosenController::class, 'edit'])->name('dosen.edit');
    // route menuju view folder dosen file update
    Route::put('/dosen/update/{id}', [App\Http\Controllers\DosenController::class, 'update'])->name('dosen.update');
    // route menuju view folder dosen file destroy
    Route::delete('/dosen/destroy/{id}', [App\Http\Controllers\DosenController::class, 'destroy'])->name('dosen.destroy');

    // khusus Matkul
    Route::get('/matkul', [App\Http\Controllers\MatkulController::class, 'index']);
    // route menuju view folder matkul file create
    Route::get('/matkul/create', [App\Http\Controllers\MatkulController::class, 'create'])->name('matkul.create');
    // route menuju view folder matkul file store
    Route::post('/matkul/store', [App\Http\Controllers\MatkulController::class, 'store'])->name('matkul.store');
    // route menuju view folder matkul file edit
    Route::get('/matkul/edit/{id}', [App\Http\Controllers\MatkulController::class, 'edit'])->name('matkul.edit');
    // route menuju view folder matkul file update
    Route::put('/matkul/update/{id}', [App\Http\Controllers\MatkulController::class, 'update'])->name('matkul.update');
    // route menuju view folder matkul file destroy
    Route::delete('/matkul/destroy/{id}', [App\Http\Controllers\MatkulController::class, 'destroy'])->name('matkul.destroy');

    // khusus kelas
    Route::get('/kelas', [App\Http\Controllers\KelasController::class, 'index']);
    // route menuju view folder kelas file create
    Route::get('/kelas/create', [App\Http\Controllers\KelasController::class, 'create'])->name('kelas.create');
    // route menuju view folder kelas file store
    Route::post('/kelas/store', [App\Http\Controllers\KelasController::class, 'store'])->name('kelas.store');
    // route menuju view folder kelas file edit
    Route::get('/kelas/edit/{id}', [App\Http\Controllers\KelasController::class, 'edit'])->name('kelas.edit');
    // route menuju view folder kelas file update
    Route::put('/kelas/update/{id}', [App\Http\Controllers\KelasController::class, 'update'])->name('kelas.update');
    // route menuju view folder kelas file destroy
    Route::delete('/kelas/destroy/{id}', [App\Http\Controllers\KelasController::class, 'destroy'])->name('kelas.destroy');

    // khusus nilai
    Route::get('/nilai', [App\Http\Controllers\NilaiController::class, 'index']);
    // route menuju view folder nilai file create
    Route::get('/nilai/create', [App\Http\Controllers\NilaiController::class, 'create'])->name('nilai.create');
    // route menuju view folder nilai file store
    Route::post('/nilai/store', [App\Http\Controllers\NilaiController::class, 'store'])->name('nilai.store');
    // route menuju view folder nilai file edit
    Route::get('/nilai/edit/{id}', [App\Http\Controllers\NilaiController::class, 'edit'])->name('nilai.edit');
    // route menuju view folder nilai file update
    Route::put('/nilai/update/{id}', [App\Http\Controllers\NilaiController::class, 'update'])->name('nilai.update');
    // route menuju view folder kelas file destroy
    Route::delete('/nilai/destroy/{id}', [App\Http\Controllers\NilaiController::class, 'destroy'])->name('nilai.destroy');
});
