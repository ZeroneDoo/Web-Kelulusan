<?php

namespace App\Http\Controllers;

use App\Imports\JurusanImport;
use App\Imports\KelasImport;
use App\Imports\UsersImport;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function viewHome()
    {
        return view('home');
    }

    public function postHome(Request $request)
    {
        $request->validate([
            "nisn" => "required"
        ],[
            "nisn.required" => "*Nisn tidak boleh kosong!"
        ]);

        $findUser = User::where('nisn', $request->nisn)->first();

        if($findUser){
            Auth::login($findUser);
            return redirect()->route('main');
        }
    }

    public function viewMain()
    {
        $user = User::with(['kelas'])->find(auth()->user()->id);
        $getJurusan = Kelas::with(['jurusan'])->find($user->kelas->id);
        return view('result', [
            'jurusan' => $getJurusan
        ]);
    }

    public function generatePdf()
    {
        // emang merah kyk gini
        $pdf = Pdf::loadView('page.testing', ['data' => 1]);
        return $pdf->download('testing.pdf');
    }

    public function importExcelUser(Request $request)
    {
        Excel::import(new UsersImport, $request->file('file'));
        return "ok";
    }

    public function importExcelJurusan(Request $request)
    {
        Excel::import(new JurusanImport, $request->file('file'));
        return back();
    }

    public function importExcelKelas(Request $request)
    {
        Excel::import(new KelasImport, $request->file('file'));
        return back();
    }

}
