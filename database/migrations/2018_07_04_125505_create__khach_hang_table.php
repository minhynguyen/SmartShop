<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('KhachHang', function (Blueprint $table) {
            $table->bigIncrements('kh_ma');
            $table->string('kh_taikhoan', 50);
            $table->string('kh_matkhau', 32);
            $table->string('kh_hoten', 100);
            $table->unsignedTinyInteger('kh_gioitinh')->default('1');
            $table->string('kh_email', 100);
            $table->string('kh_diachi', 150)->default('NULL')->nullable();
            $table->string('kh_dienthoai', 11)->defaut("NULL")->nullable();
            $table->timestamp('kh_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('kh_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('kh_trangthai')->default('3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('KhachHang');
    }
}
