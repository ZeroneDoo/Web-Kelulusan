<?php

namespace App\Http\Controllers;

use App\Imports\JurusanImport;
use App\Imports\KelasImport;
use App\Imports\UsersImport;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Matpel;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class KurikulumController extends Controller
{
    public function viewMapel()
    {
        return view('dashboard/mapel');
    }
    public function editMapel($id)
    {
        $findData = Matpel::find($id);
        return view('dashboard/editmapel',[
            "mapel" => $findData
        ]);
    }

    public function viewJurusan()
    {
        $data = Jurusan::all();
        return view('dashboard/jurusan', [
            'jurusans' => $data
        ]);
    }
    public function editJurusan($id)
    {
        $findData = Jurusan::find($id);
        return view('dashboard/editjurusan', [
            'jurusan' => $findData
        ]);
    }

    public function viewWakel()
    {
        return view('dashboard/waliKelas');
    }
    public function editWakel($id)
    {
        // $findData = Jurusan::find($id);
        return view('dashboard/editwaliKelas');
    }

    public function viewSiswa()
    {
        $data = User::orderBy('nama_siswa','asc')->get();
        return view('dashboard/siswa', [
            'siswas' => $data
        ]);
    }
    public function editSiswa($id)
    {
        $findData = User::with(['kelas'])->find($id);
        $jurusan = Jurusan::all();
        $findJurusan = Kelas::with(['jurusan'])->find($findData->kelas->id);
        return view('dashboard/editsiswa', [
            'siswa' => $findData,
            'findJurusan' => $findJurusan,
            'jurusans'=>$jurusan
        ]);
    }

    public function viewKelas()
    {
        $data = Kelas::with(['jurusan'])->get();
        return view('dashboard/kelas',[
            'datakelas' => $data
        ]);
    }
    public function editKelas($id)
    {
        $findData = Kelas::find($id);
        $jurusan = Jurusan::all();
        return view('dashboard/editkelas',[
            "kelas"=> $findData,
            'jurusans' =>$jurusan
        ]);
    }

    public function viewSignin()
    {
        return view('dashboard/signin');
    }

    public function viewSignup()
    {
        return view('dashboard/signup');
    }

    public function viewInputNilai()
    {
        return view('dashboard/inputNilai');
    }
    public function editInputNilai($id)
    {
        return view('dashboard/editinputNilai');
    }

    public function importExcelUser(Request $request)
    {
        Excel::import(new UsersImport, $request->file('file'));
        return back();
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
