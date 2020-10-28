<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCccdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cccds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('so_cccd', 12);
            $table->date('ngay_cap');
            $table->string('noi_cap');
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
        Schema::dropIfExists('cccds');
    }
}
