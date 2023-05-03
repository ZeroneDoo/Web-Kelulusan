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
            $table->string('nisn')->unique();
            $table->string('nipd');
            $table->string('nama_siswa');
            $table->string('nama_wali')->nullable();
            $table->enum('jenis_kelamin', ["L", "P"]);
            $table->foreignId('jurusan_id')->onDelete('cascade');
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->boolean("pkl")->default(1);
            $table->boolean("kurikulum")->default(1);
            $table->boolean("ukk")->default(1);
            $table->string('role')->default('user');
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
