<?php

namespace App\Imports;

use App\Models\Matpel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NilaiImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Matpel([
            //
        ]);
    }
}
