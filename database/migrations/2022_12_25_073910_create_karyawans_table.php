<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_detail_id');
            $table->integer('user_family_id');
            $table->string('karyawan_id');
            $table->string('nama_karyawan');
            $table->string('email');
            $table->string('position');
            $table->string('gender');
            $table->text('tempat_kelahiran');
            $table->string('tanggal_lahir');
            $table->text('alamat_ktp');
            $table->text('alamat_tinggal');
            $table->text('no_hp');
            $table->integer('organisasi_id');
            $table->string('tanggal_bergabung');
            $table->string('masa_kerja');
            $table->string('status');
            $table->enum('attachment',['ktp','kk','npwp', 'bpjs_user', 'pict']);
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
        Schema::dropIfExists('karyawans');
    }
}
