<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jjg_goods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('goods_name');
            $table->float('goods_price');
            $table->string('goods_images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jjg_goods');
    }
}
