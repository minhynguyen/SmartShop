<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DonHang', function (Blueprint $table) {
            $table->bigIncrements('dh_ma');
            $table->unsignedBigInteger('kh_ma'); 
            $table->timestamp('dh_thoigiandat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('dh_thoigiannhan')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('dh_nguoinhan', 150);
            $table->string('dh_diachi', 150);
            $table->string('dh_sodienthoai', 11);
            $table->timestamp('dh_ngayxuly')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedInteger('dh_tongtien');
            $table->timestamp('dh_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('dh_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('dh_trangthai')->default('3');


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
        Schema::dropIfExists('DonHang');
    }
}
