<?php

use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::controller(UserController::class)->group(function(){

    Route::get('/waiting', 'viewHome')->name('home')->middleware('guest');   

    Route::post('/waiting', 'postHome')->name('home.post')->middleware('guest');   

    // jika belum login
    Route::middleware(['auth'])->group(function(){
        // get
        Route::get('/', 'viewMain')->name('main');
    
        // import excel
        Route::post('/', 'importExcel')->name('importExcel');
    
        // pdf
        Route::get('/generatepdf', 'generatePdf')->name('generatepdf');
    });

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