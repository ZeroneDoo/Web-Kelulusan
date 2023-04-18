<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('/', function(Request $request){
    $request->file->storeAs('public/files', "randomstring".$request->bruh->getClientOriginalExtension());
    return redirect('/');
});
