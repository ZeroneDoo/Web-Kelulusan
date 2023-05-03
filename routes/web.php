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
    });
    Route::post('/logout', 'logout')->name('logout');

});

Route::controller(KurikulumController::class)->group(function(){
    Route::middleware(['guest'])->group(function(){
        Route::get('/admin/signin', 'viewSigninIn')->name('view.signin');
        Route::post('/admin/signin', 'postSigninIn')->name('post.signin');
    });
    Route::middleware(['auth', 'isLoginAdmin'])->group(function(){
        // get
        Route::get('/admin/jurusan', 'viewJurusan')->name("view.jurusan");
        Route::get('/admin/siswa', 'viewSiswa')->name("view.siswa");
        Route::get('/admin/inputnilai', 'viewInputNilai')->name("view.inputNilai");
        Route::get('/admin/countdown', 'viewCountdown')->name('view.countdown');
    
        // countdown - post
        Route::post('/admin/countdown', 'postCountdown')->name('post.countdown');

        // import excel
        Route::post('/admin/importuser', 'importExcelUser')->name('importExcel'); // import data user
        Route::post('/admin/importjurusan', 'importExcelJurusan')->name('importExcelJurusan'); // import data jurusan
        Route::post('/admin/nilai', 'importExcelNilai')->name('importExcelNilai'); // import nilai
    
        // edit
        Route::get('/admin/jurusan/{id}', 'editJurusan')->name('edit.jurusan');
        Route::get('/admin/siswa/{id}', 'editSiswa')->name('edit.siswa');
        Route::get('/admin/inputnilai/{id}', 'editInputNilai')->name('edit.inputNilai');
    
        // put
        Route::post('/admin/jurusan/{id}', 'putJurusan')->name('put.jurusan');
        Route::post('/admin/siswa/{id}', 'putSiswa')->name('put.siswa');
        Route::post('/admin/inputnilai/{id}', 'putInputNilai')->name('put.inputNilai');
    
        // delete
        Route::get('/admin/deljurusan/{id}', 'deleteJurusan')->name('delete.jurusan');
        Route::get('/admin/delsiswa/{id}', 'deleteSiswa')->name('delete.siswa');
        Route::get('/admin/delinputnilai/{id}', 'deleteInputNilai')->name('delete.inputNilai');


    });
});

Route::get('/test', function(){
    return view("dashboard/exportTemplate");
});