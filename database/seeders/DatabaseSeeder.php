<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
use App\Models\Matpel;
use App\Models\User;
use App\Models\UserMatpel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'nisn' => "012345",
            'nipd' => '012345',
            'nama_siswa' => 'Admin',
            'role' => 'admin',
            'jenis_kelamin' => 'L',
            'jurusan_id' => 0
        ]);
    }
}
