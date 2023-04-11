<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_families', function (Blueprint $table) {
            $table->id();
            $table->integer('employe_id');
            $table->string('nama_lengkap_family');
            $table->string('tempat_kelahiran_family');
            $table->string('tgl_lahir_family');
            $table->string('alamat_ktp_family');
            $table->string('alamat_tinggal_family');
            $table->string('bpjs_family')->nullable();
            $table->string('npwp_family')->nullable();
            $table->string('gender_family');
            $table->string('attachment');
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
        Schema::dropIfExists('user_families');
    }
}
