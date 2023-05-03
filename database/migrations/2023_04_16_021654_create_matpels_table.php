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
        Schema::create('matpels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string("pai");
            $table->string("pkn");
            $table->string("bindo");
            $table->string("mtk");
            $table->string("sindo");
            $table->string("bing");
            $table->string("senbud");
            $table->string("pjok");
            $table->string("basun");
            $table->string("simdig");
            $table->string("f_ts");
            $table->string("k_ddk");
            $table->string("dpk");
            $table->string("kk");
            $table->string("rata_rata")->nullable();
            $table->string("jurusan")->default("all");
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
        Schema::dropIfExists('matpels');
    }
};
