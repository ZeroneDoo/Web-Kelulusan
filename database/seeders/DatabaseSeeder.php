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
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $matpel = [
            "Pendidikan Agama dan Budi Pekerti",
            "Pendidikan Agama dan Budi Pekerti",
            "Pendidikan Agama dan Budi Pekerti",
        ];
        User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Matpel::create([
            "mata_pelajaran" => "Ilmu Pengetahuan Alam",
            "kkm" => 79
        ]);

        Kelas::create([
            "kelas" => "XI PPLG 1"
        ]);

        $user = User::find(1);
        $user->update([
            "ukk" => true,
            "us" => true,
            "laporan" => true,
        ]);
    }
}
