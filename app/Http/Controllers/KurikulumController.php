<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function viewMapel()
    {
        return view('dashboard/mapel');
    }

    public function viewWakel()
    {
        return view('dashboard/waliKelas');
    }

    public function viewSiswa()
    {
        return view('dashboard/siswa');
    }

    public function viewKelas()
    {
        return view('dashboard/kelas');
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
}
