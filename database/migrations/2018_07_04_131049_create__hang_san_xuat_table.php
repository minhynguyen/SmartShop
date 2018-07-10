<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHangSanXuatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HangSanXuat', function (Blueprint $table) {
            $table->bigIncrements('hsx_ma');
            $table->string('hsx_ten', 50);
            $table->unsignedTinyInteger('hsx_trangthai')->default('3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HangSanXuat');
    }
}
