<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamtrusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamtrus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('sohokhau_id');
            $table->integer('nhankhau_id');
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
        Schema::dropIfExists('tamtrus');
    }
}
