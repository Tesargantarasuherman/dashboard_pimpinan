<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePersandianTte extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persandian_tte', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pegawai');
            $table->integer('status');
            $table->date('tanggal');
            $table->bigInteger('nip');
            $table->bigInteger('nik')->nullable();
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
        Schema::dropIfExists('persandian_tte');
    }
}
