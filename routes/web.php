<?php

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;


Route::get('/', function () {
    return view('result');
});

Route::get('/mapel', function () {
    return view('dashboard/mapel');
});
Route::get('/wakel', function () {
    return view('dashboard/waliKelas');
});
Route::get('/siswa', function () {
    return view('dashboard/siswa');
});

Route::get('/kelas', function () {
    return view('dashboard/kelas');
});

Route::get('/signin', function () {
    return view('dashboard/signin');
});

Route::get('/signup', function () {
    return view('dashboard/signup');
});

Route::get('/inputnilai', function () {
    return view('dashboard/inputNilai');
});

Route::post('/', function(Request $request){
    Excel::import(new UsersImport, $request->file('file'));
    return redirect('/');
});

Route::get('/generatepdf', function(){
    $pdf = Pdf::loadView('page.testing', ['data' => 1]);
    return $pdf->download('testing.pdf');
})->name('generatepdf');
