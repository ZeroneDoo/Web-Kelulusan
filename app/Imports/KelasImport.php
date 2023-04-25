<?php

namespace App\Imports;

use App\Models\Jurusan;
use App\Models\Kelas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KelasImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $idJurusan = Jurusan::where('jurusan', $row['jurusan'])->pluck('id')[0];
        return new Kelas([
            'kelas' => $row['kelas'],
            'jurusan_id' => $idJurusan
        ]);
    }
}
