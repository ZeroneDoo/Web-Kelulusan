<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\TimeWatch;
use Dompdf\Dompdf;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function viewHome()
    {
        $watch = TimeWatch::find(1)->time;
        return view('home', [
            'watch' => $watch
        ]);
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

        return back();
    }

    public function viewMain()
    {
        $user = User::with(['jurusan', 'matpel'])->find(auth()->user()->id);
        // dd($user->matpel->pai);
        $nilai = [
            'mapel' => [
                'Pendidikan Agama dan Budi Pekerti',
                'Pendidikan Kewarganegaraan',
                'Bahasa Indonesia',
                'Matematika',
                'Sejarah Indonesia',
                'Bahasa Inggris',
                'Seni Budaya',
                'Pendidikan Jasmani Olahraga dan Kebugaran',
                'Bahasa Sunda',
                'Simulasi Digital',
                ($user->jurusan_id == 4) ?'Tinjauan Seni': 'Fisika',
                ($user->jurusan_id == 4) ?'Dasar-Dasar Kreativitas': 'Kimia',
                'Dasar Program Keahlian',
                'Kompetensi Keahlian',
            ],
            'nilai' => [
                str_replace('.',',',$user->matpel->pai),
                str_replace('.',',',$user->matpel->pkn),
                str_replace('.',',',$user->matpel->bindo),
                str_replace('.',',',$user->matpel->mtk),
                str_replace('.',',',$user->matpel->sindo),
                str_replace('.',',',$user->matpel->bing),
                str_replace('.',',',$user->matpel->senbud),
                str_replace('.',',',$user->matpel->pjok),
                str_replace('.',',',$user->matpel->basun),
                str_replace('.',',',$user->matpel->simdig),
                str_replace('.',',',$user->matpel->f_ts),
                str_replace('.',',',$user->matpel->k_ddk),
                str_replace('.',',',$user->matpel->dpk),
                str_replace('.',',',$user->matpel->kk),
            ]
        ]; 
        return view('result', [
            'user' => $user,
            'nilais' => $nilai
        ]);
    }

    public function logout()
    {
        $role = auth()->user()->role;

        Auth::logout();
        if($role != 'admin'){
            return redirect()->route('home');
        }
        return redirect()->route('view.signin');
    }

    public function generatePdf()
    {
        $data = User::with(['jurusan'])->find(auth()->user()->id);
        $nilai = auth()->user()->matpel;

        $avg = ($nilai->pai + $nilai->pkn + $nilai->bindo + $nilai->mtk + $nilai->sindo + $nilai->bing + $nilai->senbud + $nilai->pjok + $nilai->basun + $nilai->simdig + $nilai->f_ts + $nilai->k_ddk + $nilai->dpk + $nilai->kk) / 14;
        
        $pdf = Pdf::loadView('dashboard.exportTemplate', ['siswa' => $data, 'nilai' => $nilai, 'avg' => round($avg)]);
        // $pdf->save('Surat Kelulusan.pdf');
        $pdf->setPaper('A4', 'potrait');
        $pdf->render();
        return $pdf->stream('Surat Kelulusan.pdf');
    }
}
