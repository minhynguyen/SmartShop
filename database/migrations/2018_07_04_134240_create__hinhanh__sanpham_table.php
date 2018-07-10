<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhanhSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Hinhanh_Sanpham', function (Blueprint $table) {
            $table->unsignedBigInteger('sp_ma');
            $table->unsignedBigInteger('ha_ma');
            $table->foreign('sp_ma')->references('sp_ma')->on('SanPham')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ha_ma')->references('ha_ma')->on('HinhAnh')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Hinhanh_Sanpham');
    }
}
