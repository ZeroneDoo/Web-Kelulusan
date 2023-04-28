<?php

namespace App\Imports;

use App\Models\Kelas;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {   
        if($row['n_i_s_n']){
        // dd($row);
        // SELECT 38019 AS date_5_num, DATE('1899-12-30') + INTERVAL 38019 DAY AS normal_date;
        if(gettype($row['tanggal_lahir']) == "integer"){
            $tanggal_number = $row['tanggal_lahir'];
            $tanggal_normal = DB::select("SELECT DATE('1899-12-30') + INTERVAL $tanggal_number DAY AS normal_date")[0]->normal_date;
            $tanggal = Carbon::now("Asia/Jakarta")->parse($tanggal_normal)->translatedFormat("d F Y");
        }
        // $idKelas = Kelas::where('kelas', $row['kelas'])->pluck('id')[0];

            return new User([
                'nama_siswa' => $row['nama_peserta_didik'],
                'nisn' => $row['n_i_s_n'],
                'nipd' => $row['n_i_p_d'],
                'jenis_kelamin' => $row['l_p'],
                'jurusan_id' => $row['kode_jurusan'],
                'tempat_lahir' => $row['tempat_lahir'],
                'tanggal_lahir' => gettype($row['tanggal_lahir']) == "integer" ? $tanggal : $row['tanggal_lahir'],
            ]);
        }
    }
}
