<?php

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/', function () {
    return view('tes');
});

Route::post('/', function(Request $request){
    Excel::import(new UsersImport, $request->file('file'));
    return redirect('/');
});

Route::get('/generatepdf', function(){
    $pdf = Pdf::loadView('page.testing', ['data' => 1]);
    return $pdf->download('testing.pdf');
})->name('generatepdf');
