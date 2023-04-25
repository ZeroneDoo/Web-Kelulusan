<?php

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
    return view('home');
});

Route::get('/mapel', function () {
    return view('dashboard/mapel');
});
Route::get('/editmapel', function () {
    return view('dashboard/editmapel');
});
Route::get('/wakel', function () {
    return view('dashboard/waliKelas');
});
Route::get('/editwakel', function () {
    return view('dashboard/editwalikelas');
});
Route::get('/siswa', function () {
    return view('dashboard/siswa');
});
Route::get('/editsiswa', function () {
    return view('dashboard/editsiswa');
});

Route::get('/kelas', function () {
    return view('dashboard/kelas');
});
Route::get('/editkelas', function () {
    return view('dashboard/editkelas');
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
