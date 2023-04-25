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
    
        // import excel
        Route::post('/', 'importExcelUser')->name('importExcel'); // import data user
        Route::post('/jurusan', 'importExcelJurusan')->name('importExcelJurusan'); // import data jurusan
        Route::post('/kelas', 'importExcelKelas')->name('importExcelKelas'); // import data kelas
    
        // pdf
        Route::get('/generatepdf', 'generatePdf')->name('generatepdf');
    // });

});

Route::controller(KurikulumController::class)->group(function(){
    // get
    Route::get('/mapel', 'viewMapel');
    Route::get('/wakel', 'viewWakel');
    Route::get('/siswa', 'viewSiswa');
    Route::get('/kelas', 'viewKelas');
    Route::get('/signin', 'viewSignin');
    Route::get('/signup', 'viewSignup');
    Route::get('/inputnilai', 'viewInputNilai');
});