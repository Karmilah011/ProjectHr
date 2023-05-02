<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->integer('employe_id');
            $table->string('name');
            $table->date('tanggal_lahir')->nullable();
            $table->string('kota')->nullable();
            $table->string('email');
            $table->string('job_position')->nullable();
            $table->string('gender')->nullable();
            $table->string('tempat_kelahiran')->nullable();
            $table->text('alamat_ktp')->nullable();
            $table->text('alamat_tinggal')->nullable();
            $table->string('no_hp')->nullable();
            $table->integer('struktur_id')->nullable();
            $table->string('tanggal_bergabung')->nullable();
            $table->string('masa_kerja')->nullable();
            $table->string('npwp')->nullable();
            $table->string('bpjs')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('user_details');
    }
}
