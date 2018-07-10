<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SanPham', function (Blueprint $table) {
            $table->bigIncrements('sp_ma');
            $table->string('sp_ten', 150);
            $table->unsignedBigInteger('lsp_ma');
            $table->unsignedBigInteger('hsx_ma');
            $table->string('sp_seri', 150);
            $table->text('sp_mota');
            $table->unsignedInteger('sp_giagoc');
            $table->unsignedInteger('sp_giaban');
            $table->unsignedInteger('sp_danhgia');
            $table->timestamp('sp_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('sp_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('sp_trangthai')->default('3');
            $table->foreign('lsp_ma')->references('lsp_ma')->on('LoaiSanPham')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('hsx_ma')->references('hsx_ma')->on('HangSanXuat')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SanPham');
    }
}
