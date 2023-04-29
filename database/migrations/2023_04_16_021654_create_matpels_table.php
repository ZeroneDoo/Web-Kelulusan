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
            $table->integer("pai");
            $table->integer("pkn");
            $table->integer("bindo");
            $table->integer("mtk");
            $table->integer("sindo");
            $table->integer("bing");
            $table->integer("senbud");
            $table->integer("pjok");
            $table->integer("basun");
            $table->integer("simdig");
            $table->integer("f_ts");
            $table->integer("k_ddk");
            $table->integer("dpk");
            $table->integer("kk");
            $table->string("jurusan")->default("all");
            $table->integer("kkm")->nullable();
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
