<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaiSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LoaiSanPham', function (Blueprint $table) {
            $table->bigIncrements('lsp_ma');
            $table->string('lsp_ten', 50);
            $table->timestamp('lsp_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('lsp_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedBigInteger('hsx_ma');
            $table->unsignedTinyInteger('lsp_trangthai')->default('3');
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
        Schema::dropIfExists('LoaiSanPham');
    }
}
