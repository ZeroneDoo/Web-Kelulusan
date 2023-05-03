<?php

namespace App\Imports;

use App\Models\Matpel;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NilaiImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $siswa = User::where('nama_siswa', $row['nama'])->first();
        if($siswa){
            // dd($row);
            return new Matpel([
                'user_id' => $siswa->id,
                'pai'=> $row['pendidikan_agama_dan_budi_pekerti'],
                'pkn'=> $row['pendidikan_kewarganegaraan'],
                'bindo'=> $row['bahasa_indonesia'],
                'mtk'=> $row['matemtika'],
                'sindo'=> $row['sejarah_indonesia'],
                'bing'=> $row['bahasa_inggris'],
                'senbud'=> $row['seni_budaya'],
                'pjok'=> $row['pendidikan_jasmani_olahraga_dan_kebugaran'],
                'basun'=> $row['bahasa_sunda'],
                'simdig'=> $row['simulasi_digital'],
                'f_ts'=> $row['fisika_tinjauan_seni'],
                'k_ddk'=> $row['kimia_dasar_dasar_kreativitas'],
                'dpk'=> $row['dasar_program_keahlian'],
                'kk'=> $row['kompetensi_keahlian'],
                'rata_rata' => $row['rata_rata']
            ]);
        }
    }
}
