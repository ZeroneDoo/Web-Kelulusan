<?php

namespace App\Imports;

use App\Models\User;
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
        // dd($row);
        // SELECT 38019 AS date_5_num, DATE('1899-12-30') + INTERVAL 38019 DAY AS normal_date;
        $tanggal_number = $row['tanggal_lahir'];
        $tanggal_normal = DB::select("SELECT DATE('1899-12-30') + INTERVAL $tanggal_number DAY AS normal_date")[0]->normal_date;
        return new User([
            'nama_siswa' => $row['nama'],
            'nisn' => $row['nisn'],
            'nipd' => $row['nipd'],
            'kelas_id' => 1,
            'tempat_lahir' => $row['tempat_lahir'],
            'tanggal_lahir' => $tanggal_normal,
        ]);
    }
}
