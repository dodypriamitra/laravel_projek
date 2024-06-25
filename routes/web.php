<?php

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
    //route CRUD
    use App\Http\Controllers\PegawaiController;
    Route::get('/pegawai', [PegawaiController::class, 'index']);
    Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
    Route::post('/pegawai/store', [PegawaiController::class, 'store']);
    Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
    Route::post('/pegawai/update', [PegawaiController::class, 'update']);
    Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
    Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);

    use App\Http\Controllers\MalasngodingController;
    Route::get('/input', [MalasngodingController::class, 'input']);
    Route::post('/proses', [MalasngodingController::class, 'proses']);

    //routepegawaii
    use App\Http\Controllers\PegawaiiController;
    Route::get('/pegawaii', [PegawaiiController::class, 'index']);
    Route::get('/pegawaii/tambah', [PegawaiiController::class, 'tambah']);
    Route::post('/pegawaii/store', [PegawaiiController::class, 'store']);
    Route::get('/pegawaii/edit/{id}', [PegawaiiController::class, 'edit']);
    Route::put('/pegawaii/update/{id}', [PegawaiiController::class, 'update']);
    Route::get('/pegawaii/hapus/{id}', [PegawaiiController::class, 'delete']);

    //routeguru
    use App\Http\Controllers\GuruController;
    Route::get('/guru', [GuruController::class, 'index']);
    Route::get('/guru/hapus/{id}', [GuruController::class, 'hapus']);
    Route::get('/guru/trash', [GuruController::class, 'trash']);
    Route::get('/guru/kembalikan/{id}', [GuruController::class, 'kembalikan']);
    Route::get('/guru/kembalikan_semua', [GuruController::class, 'kembalikan_semua']);
    Route::get('/guru/hapus_permanen/{id}', [GuruController::class, 'hapus_permanen']);
    Route::get('/guru/hapus_permanen_semua', [GuruController::class, 'hapus_permanen_semua']);



