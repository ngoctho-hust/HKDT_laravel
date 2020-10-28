<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSohokhausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sohokhaus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('chu_ho_id')->nullable();
            $table->date('ngay_cap');
            $table->string('so_nha');
            $table->string('pho_ap');
            $table->string('phuong_xa');
            $table->string('quan_huyen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sohokhaus');
    }
}
