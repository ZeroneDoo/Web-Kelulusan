<?php

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
    return view('home');
});

Route::post('/', function(Request $request){
    Excel::import(new UsersImport, $request->file('file'));
    return redirect('/');
});
