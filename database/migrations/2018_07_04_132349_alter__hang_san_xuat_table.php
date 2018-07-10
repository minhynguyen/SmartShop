<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterHangSanXuatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('HangSanXuat', function (Blueprint $table) {
            $table->timestamp('hsx_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('hsx_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('HangSanXuat', function (Blueprint $table) {
            //
        });
    }
}
