<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Kho', function (Blueprint $table) {
            $table->bigIncrements('k_ma');
            $table->string('k_ten', 50);
            $table->timestamp('k_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('k_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('k_trangthai')->default('3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Kho');
    }
}
