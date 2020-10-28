<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiaykhaisinhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giaykhaisinhs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ten_cha')->nullable();
            $table->string('ten_me')->nullable();
            $table->string('noi_dang_ky');
            $table->date('ngay_dang_ky');
            $table->integer('nhankhau_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giaykhaisinhs');
    }
}
