<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->string('nipd');
            $table->string('nama_siswa');
            $table->foreignId('kelas_id');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->boolean("ukk")->default(0);
            $table->boolean("us")->default(0);
            $table->boolean("laporan")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
