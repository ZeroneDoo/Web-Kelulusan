<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    dd(User::with(["kelas"])->get());
});
