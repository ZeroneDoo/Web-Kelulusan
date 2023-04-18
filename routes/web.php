<?php

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
    return view('test');
});

Route::post('/', function(Request $request){
    $fileName = time().".".$request->file->getClientOriginalExtension();
    $request->file->storeAs('public/files', $fileName);
    $excel = Excel::import(new UsersImport, asset('storage/files/1681718102.xlsx'));
    // dd($excel->);
    // return redirect('/');
});
