<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormCutisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_cutis', function (Blueprint $table) {
            $table->id();
            $table->string('no_karyawan')->nullable();
            $table->string('jeniscuti')->nullable();
            $table->string('sisacuti')->nullable();
            $table->string('alsncuti')->nullable();
            $table->string('tanggalmulai')->nullable();
            $table->string('tanggalselesai')->nullable();
            $table->string('jhari')->nullable();
            $table->string('atsn')->nullable();
            $table->integer('status_hrd')->nullable();
            $table->integer('status_pim')->nullable();
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
        Schema::dropIfExists('form_cutis');
    }
}
