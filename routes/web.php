<?php

use App\Http\Controllers\autenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('auth.login');
});

Route::get('/Admin', function () {
    return view('welcome2');
});

Route::middleware('auth')->group(function () {
    Route::get('perkalian', 'App\Http\Controllers\TigaA3Controller@perkalian');
    Route::get('penjumlahan', 'App\Http\Controllers\TigaA3Controller@penjumlahan');
    Route::get('daftarbarang', 'App\Http\Controllers\TigaA3Controller@daftarbarang');
    
    Route::get('berita/{berita}', 'App\Http\Controllers\TigaA3Controller@berita');
    
    Route::resource('mahasiswa', 'App\Http\Controllers\MahasiswaController');
    Route::get('deletemahasiswa/{id}', 'App\Http\controllers\mahasiswacontroller@deletemahasiswa');
    
    Route::resource('matakuliah', 'App\Http\Controllers\matakuliahController');
    Route::get('deletematakuliah/{id}', 'App\Http\controllers\matakuliahcontroller@deletematakuliah');
    Route::resource('dosen', 'App\Http\Controllers\dosenController');
    Route::get('deletedosen/{id}', 'App\Http\controllers\dosencontroller@deletedosen');
    Route::resource('prodi', 'App\Http\Controllers\prodicontroller');
    Route::get('deleteprodi/{id}', 'App\Http\controllers\prodicontroller@deleteprodi');
    Route::resource('fakultas', 'App\Http\Controllers\fakultascontroller');
    Route::get('deletefakultas/{id}', 'App\Http\controllers\fakultascontroller@deletefakultas');
    Route::resource('tahunakademik', 'App\Http\Controllers\tahunakademikcontroller');
    Route::get('deletetahunakademik/{id}', 'App\Http\controllers\tahunakademikcontroller@deletetahunakademik');
    Route::resource('kelas', 'App\Http\Controllers\kelascontroller');
    Route::get('deletekelas/{id}', 'App\Http\controllers\kelascontroller@deletekelas');
    Route::resource('ruangan', 'App\Http\Controllers\ruangancontroller');
    Route::get('deleteruangan/{id}', 'App\Http\controllers\ruangancontroller@deleteruangan');
    Route::resource('Jadwal', 'App\Http\Controllers\Jadwalcontroller');
});
Route::get('/login', [autenController::class, 'login']);
Route::post('/login', [autenController::class, 'process_login']);