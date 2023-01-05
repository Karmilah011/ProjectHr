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
            $table->string('no_karyawan');
            $table->string('jenicuti');
            $table->string('sisacuti');
            $table->string('alsncuti');
            $table->string('periodecuti');
            $table->string('jhari');
            $table->string('atsn');
            $table->string('status_hrd');
            $table->string('status_pim');
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
