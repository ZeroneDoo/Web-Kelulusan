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
    Route::middleware(['auth'])->group(function(){
        // get
        Route::get('/', 'viewMain')->name('main');
    
        // pdf
        Route::get('/generatepdf', 'generatePdf')->name('generatepdf');
    });

});

Route::controller(KurikulumController::class)->group(function(){
    // get
    Route::get('/mapel', 'viewMapel')->name("view.mapel");
    Route::get('/jurusan', 'viewJurusan')->name("view.jurusan");
    Route::get('/wakel', 'viewWakel')->name("view.wakel");
    Route::get('/siswa', 'viewSiswa')->name("view.siswa");
    Route::get('/kelas', 'viewKelas')->name("view.kelas");
    Route::get('/signin', 'viewSignin')->name("view.signIn");
    Route::get('/signup', 'viewSignup')->name("view.signUp");
    Route::get('/inputnilai', 'viewInputNilai')->name("view.inputNilai");

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
    Route::post('/mapel/{id}', 'putMapel')->name('put.mapel');
    Route::post('/jurusan/{id}', 'putJurusan')->name('put.jurusan');
    Route::post('/wakel/{id}', 'putWakel')->name('put.wakel');
    Route::post('/siswa/{id}', 'putSiswa')->name('put.siswa');
    Route::post('/kelas/{id}', 'putKelas')->name('put.kelas');
    Route::post('/inputnilai/{id}', 'putInputNilai')->name('put.inputNilai');

    // delete
    Route::get('/delmapel/{id}', 'deleteMapel')->name('delete.mapel');
    Route::get('/deljurusan/{id}', 'deleteJurusan')->name('delete.jurusan');
    Route::get('/delwakel/{id}', 'deleteWakel')->name('delete.wakel');
    Route::get('/delsiswa/{id}', 'deleteSiswa')->name('delete.siswa');
    Route::get('/delkelas/{id}', 'deleteKelas')->name('delete.kelas');
    Route::get('/delinputnilai/{id}', 'deleteInputNilai')->name('delete.inputNilai');
});