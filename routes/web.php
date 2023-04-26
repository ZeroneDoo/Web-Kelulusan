<?php

use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// test input file
Route::get('/tes', function(){
    return view("tes");
});

Route::controller(UserController::class)->group(function(){

    Route::get('/waiting', 'viewHome')->name('home')->middleware('guest');   

    Route::post('/waiting', 'postHome')->name('home.post')->middleware('guest');   

    // jika belum login
    // Route::middleware(['auth'])->group(function(){
        // get
        Route::get('/', 'viewMain')->name('main');
    
        // pdf
        Route::get('/generatepdf', 'generatePdf')->name('generatepdf');
    // });

});

Route::controller(KurikulumController::class)->group(function(){
    // get
    Route::get('/mapel', 'viewMapel');
    Route::get('/jurusan', 'viewJurusan');
    Route::get('/wakel', 'viewWakel');
    Route::get('/siswa', 'viewSiswa');
    Route::get('/kelas', 'viewKelas');
    Route::get('/signin', 'viewSignin');
    Route::get('/signup', 'viewSignup');
    Route::get('/inputnilai', 'viewInputNilai');

    // import excel
    Route::post('/', 'importExcelUser')->name('importExcel'); // import data user
    Route::post('/importjurusan', 'importExcelJurusan')->name('importExcelJurusan'); // import data jurusan
    Route::post('/kelas', 'importExcelKelas')->name('importExcelKelas'); // import data kelas

    // edit
    Route::get('/mapel/{id}', 'editMapel')->name('edit.mapel');
    Route::get('/jurusan/{id}', 'editJurusan')->name('edit.jurusan');
    Route::get('/wakel/{id}', 'editWakel')->name('edit.wakel');
    Route::get('/siswa/{id}', 'editSiswa')->name('edit.siswa');
    Route::get('/kelas/{id}', 'editKelas')->name('edit.kelas');
    Route::get('/inputnilai/{id}', 'editInputNilai')->name('edit.inputNilai');

    // put
    Route::put('/mapel/{id}', 'putMapel')->name('put.mapel');
    Route::put('/jurusan/{id}', 'putJurusan')->name('put.jurusan');
    Route::put('/wakel/{id}', 'putWakel')->name('put.wakel');
    Route::put('/siswa/{id}', 'putSiswa')->name('put.siswa');
    Route::put('/kelas/{id}', 'putKelas')->name('put.kelas');
    Route::put('/inputnilai/{id}', 'putInputNilai')->name('put.inputNilai');
});