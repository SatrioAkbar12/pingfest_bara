<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunITVSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun_itv', function (Blueprint $table) {
            //Sementara bisa null

            $table->string('username');
            $table->string('email');
            $table->string('pass');
            $table->string('nama')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('instansi')->nullable();
            $table->boolean('lomba_cp')->nullable();
            $table->boolean('lomba_poster')->nullable();
            $table->boolean('lomba_tiktok')->nullable();
            $table->boolean('lomba_coverlagu')->nullable();
            $table->timestamps();

            $table->primary('username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akun_itv');
    }
}
