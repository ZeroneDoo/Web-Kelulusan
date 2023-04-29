<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Dompdf\Dompdf;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

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
        ], [
            "nisn.required" => "*Nisn tidak boleh kosong!"
        ]);

        $findUser = User::where('nisn', $request->nisn)->first();

        if ($findUser) {
            Auth::login($findUser);
            return redirect()->route('main');
        }
    }

    public function viewMain()
    {
        $user = User::with(['jurusan', 'matpel'])->find(auth()->user()->id);
        $nilai = [
            'mapel' => [
                'Pendidikan Agama dan Budi Pekerti',
                'Pendidikan Kewarganegaraan',
                'Bahasa Indonesia',
                'Matemtika',
                'Sejarah Indonesia',
                'Bahasa Inggris',
                'Seni Budaya',
                'Pendidikan Jasmani Olahraga dan Kebugaran',
                'Bahasa Sunda',
                'Simulasi Digital',
                'Fisika / Tinjauan Seni',
                'Kimia / Dasar-Dasar Kreativitas',
                'Dasar Program Keahlian',
                'Kompetensi Keahlian',
            ],
            'nilai' => [
                $user->matpel[0]->pai,
                $user->matpel[0]->pkn,
                $user->matpel[0]->bindo,
                $user->matpel[0]->mtk,
                $user->matpel[0]->sindo,
                $user->matpel[0]->bing,
                $user->matpel[0]->senbud,
                $user->matpel[0]->pjok,
                $user->matpel[0]->basun,
                $user->matpel[0]->simdig,
                $user->matpel[0]->f_ts,
                $user->matpel[0]->k_ddk,
                $user->matpel[0]->dpk,
                $user->matpel[0]->kk,
            ]
        ]; 
        return view('result', [
            'user' => $user,
            'nilais' => $nilai
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function generatePdf()
    {
        $data = User::with(['jurusan'])->find(auth()->user()->id);        
        $pdf = Pdf::loadView('dashboard.exportTemplate', ['siswa' => $data]);
        $pdf->save('Surat Kelulusan.pdf');
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('Surat Kelulusan.pdf');
<<<<<<< HEAD
        
=======

        // $dompdf = new Dompdf();
        // $dompdf->loadHtml('dashboard.exportTemplate');

        // $dompdf->setPaper('A4', 'potrait');

        // $dompdf->render();

        // return $dompdf->stream();
>>>>>>> 4a46a817504c173eea83fc19afaba77dcd58d74d
    }
}
