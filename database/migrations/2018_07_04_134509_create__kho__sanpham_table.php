<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhoSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Kho_Sanpham', function (Blueprint $table) {
            $table->unsignedBigInteger('k_ma');
            $table->unsignedBigInteger('sp_ma');
            $table->unsignedInteger('ksp_soluongton');
            $table->foreign('sp_ma')->references('sp_ma')->on('SanPham')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('k_ma')->references('k_ma')->on('Kho')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Kho_Sanpham');
    }
}
