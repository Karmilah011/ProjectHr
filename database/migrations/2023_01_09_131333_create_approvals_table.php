<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approvals', function (Blueprint $table) {
            $table->id();
            $table->string('leave_master_id');
            $table->integer('employe_id')->nullable();
            $table->text('alasancuti')->nullable();
            $table->string('tgl_pengajuan')->nullable();
            $table->string('tgl_mulai')->nullable();
            $table->string('tgl_selesai')->nullable();
            $table->string('attachment')->nullable();
            $table->enum('approved',['setuju','tolak','batal','menunggu']);
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
        Schema::dropIfExists('approvals');
    }
}
