<?php

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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
    $fileName = time().".".$request->file->getClientOriginalExtension();
    $request->file->storeAs('public/files', $fileName);
    $excel = Excel::import(new UsersImport, asset('storage/files/1681718102.xlsx'));
    // dd($excel->);
    // return redirect('/');
});
