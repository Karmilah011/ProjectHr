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
            $table->integer('employe_id');
            $table->integer('leave_master_id')->nullable();
            $table->string('alsncuti')->nullable();
            $table->string('tanggalmulai')->nullable();
            $table->string('tanggalselesai')->nullable();
            $table->string('jhari')->nullable();
            $table->integer('approval_id')->nullable();
            $table->string('attachment')->nullable();
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
