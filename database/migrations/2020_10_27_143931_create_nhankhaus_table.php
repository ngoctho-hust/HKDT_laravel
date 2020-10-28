<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhankhausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhankhaus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ho_ten', 50);
            $table->string('bi_danh', 50)->nullable();
            $table->string('gioi_tinh', 10);
            $table->date('ngay_sinh');
            $table->string('noi_sinh');
            $table->string('nguyen_quan')->nullable();
            $table->string('dan_toc', 50);
            $table->string('nghe_nghiep', 50)->nullable();
            $table->string('noi_lam_viec', 100)->nullable();
            $table->string('quan_he_voi_chu_ho', 20);
            $table->string('thuong_tru_truoc')->nullable();
            $table->integer('sohokhau_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhankhaus');
    }
}
