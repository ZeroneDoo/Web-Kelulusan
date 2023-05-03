<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
use App\Models\Matpel;
use App\Models\TimeWatch;
use App\Models\User;
use App\Models\UserMatpel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'nisn' => "admin_TB",
            'nipd' => 'admin_TB',
            'nama_siswa' => 'Admin',
            'role' => 'admin',
            'jenis_kelamin' => 'L',
            'jurusan_id' => 0
        ]);

        TimeWatch::create([
            'time' => "January 01, 1923 00:00:00"
        ]);
    }
}
