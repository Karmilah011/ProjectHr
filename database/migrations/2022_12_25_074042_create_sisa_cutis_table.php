<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisaCutisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sisa_cutis', function (Blueprint $table) {
            $table->id();
            $table->string('id_peg');
            $table->string('nama_pegawai');
            $table->string('tahun');
            $table->string('jatah_cuti');
            $table->string('cuti_dipakai');
            $table->string('sisa_tahun_lalu');
            $table->string('sisa_tahun_ini');
            $table->string('total_sisa_cuti');
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
        Schema::dropIfExists('sisa_cutis');
    }
}
