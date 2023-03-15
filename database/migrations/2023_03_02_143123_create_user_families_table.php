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
            $table->integer('user_id');
            $table->string('user_detail_id');
            $table->string('nama_family');
            $table->string('status_family');
            $table->string('familie_type_id');
            $table->string('tmpat_klahiran_fam');
            $table->string('tgl_lahir_fam');
            $table->string('alamt_ktp_fam');
            $table->string('alamt_tnggal_fam');
            $table->string('bpjs_fam');
            $table->enum('attachment',['ktp','pict']);
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
