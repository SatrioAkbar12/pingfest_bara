<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLombaCoverLagusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lomba_cover_lagu', function (Blueprint $table) {
            $table->string('username');
            $table->boolean('pembayaran');
            $table->lineString('link_submit')->nullable();
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
        Schema::dropIfExists('lomba_cover_lagus');
    }
}
