<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhaitusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khaitus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('nhankhau_id');
            $table->dateTime('chet_luc');
            $table->string('noi_chet');
            $table->string('nguyen_nhan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khaitus');
    }
}
