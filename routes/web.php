<?php

use App\Imports\MatpelImport;
use App\Imports\UsersImport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
    return view('test');
});

Route::post('/', function(Request $request){
    $request->file->storeAs('public/files', "asdad".$request->file->extension);
    return redirect('/');
});
