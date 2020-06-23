<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLombaPostersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lomba_poster', function (Blueprint $table) {
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
        Schema::dropIfExists('lomba_poster');
    }
}
