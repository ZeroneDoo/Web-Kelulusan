<?php

use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\UserController;
use App\Models\TimeWatch;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

// test input file
Route::get('/tes', function(){
    return view("tes");
});
Route::post('/tes', function(Request $request){

    $str = Carbon::parse($request->time);

    $str = $str->format('M d, Y H:i:s');
    // dd($str);
    TimeWatch::find(1)->update([
        'time' => $str,
    ]);
    // return view("tes");
});

Route::controller(UserController::class)->group(function(){

    Route::middleware(['guest'])->group(function(){
        Route::get('/waiting', 'viewHome')->name('home');   
    
        Route::post('/waiting', 'postHome')->name('home.post');   
    });

    // jika belum login
    Route::middleware(['auth','isLoginUser'])->group(function(){
        // get
        Route::get('/', 'viewMain')->name('main');
    
        // pdf
        Route::get('/generatepdf', 'generatePdf')->name('generatepdf');

        // logout
        Route::post('/logout', 'logout')->name('logout');
    });

});

Route::controller(KurikulumController::class)->group(function(){
    Route::get('/admin/signin', 'viewSigninIn')->name('view.signin');
    Route::middleware(['auth', 'isLoginAdmin'])->group(function(){
        // get
        Route::get('/jurusan', 'viewJurusan')->name("view.jurusan");
        Route::get('/siswa', 'viewSiswa')->name("view.siswa");
        Route::get('/inputnilai', 'viewInputNilai')->name("view.inputNilai");
        Route::get('/countdown', function(){
            return view("dashboard/countdown");
        });
    
        // import excel
        Route::post('/importuser', 'importExcelUser')->name('importExcel'); // import data user
        Route::post('/importjurusan', 'importExcelJurusan')->name('importExcelJurusan'); // import data jurusan
        Route::post('/nilai', 'importExcelNilai')->name('importExcelNilai'); // import nilai
    
        // edit
        Route::get('/jurusan/{id}', 'editJurusan')->name('edit.jurusan');
        Route::get('/siswa/{id}', 'editSiswa')->name('edit.siswa');
        Route::get('/inputnilai/{id}', 'editInputNilai')->name('edit.inputNilai');
    
        // put
        Route::post('/jurusan/{id}', 'putJurusan')->name('put.jurusan');
        Route::post('/siswa/{id}', 'putSiswa')->name('put.siswa');
        Route::post('/inputnilai/{id}', 'putInputNilai')->name('put.inputNilai');
    
        // delete
        Route::get('/deljurusan/{id}', 'deleteJurusan')->name('delete.jurusan');
        Route::get('/delsiswa/{id}', 'deleteSiswa')->name('delete.siswa');
        Route::get('/delinputnilai/{id}', 'deleteInputNilai')->name('delete.inputNilai');


    });
});

Route::get('/test', function(){
    return view("dashboard/exportTemplate");
});