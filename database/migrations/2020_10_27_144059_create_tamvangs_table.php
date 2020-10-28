<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamvangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamvangs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('nhakhau_id');
            $table->date('tu_ngay');
            $table->date('den_ngay');
            $table->string('ly_do')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tamvangs');
    }
}
