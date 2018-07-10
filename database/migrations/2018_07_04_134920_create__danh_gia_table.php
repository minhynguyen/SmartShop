<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanhGiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DanhGia', function (Blueprint $table) {
            $table->unsignedBigInteger('sp_ma');
            $table->unsignedBigInteger('kh_ma');
            $table->unsignedInteger('dg_sosao');
            $table->foreign('sp_ma')->references('sp_ma')->on('SanPham')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kh_ma')->references('kh_ma')->on('KhachHang')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DanhGia');
    }
}
