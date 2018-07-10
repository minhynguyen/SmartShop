<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietDonHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietDonHang', function (Blueprint $table) {
            $table->unsignedBigInteger('sp_ma');
            $table->unsignedBigInteger('dh_ma');
            $table->unsignedInteger('ctdh_soluong');
            $table->unsignedInteger('ctdh_dongia');
            $table->foreign('sp_ma')->references('sp_ma')->on('SanPham')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('dh_ma')->references('dh_ma')->on('DonHang')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ChiTietDonHang');
    }
}
