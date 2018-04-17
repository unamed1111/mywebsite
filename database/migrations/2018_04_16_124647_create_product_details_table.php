<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->integer('energy')->comment('năng lượng máy');
            $table->float('diameter')->comment('đường kính vỏ');
            $table->float('waterproof')->comment('độ chống nước ATM');
            $table->integer('case')->comment('chất liệu vỏ');
            $table->integer('watch_chain')->comment('chất liệu dây');
            $table->integer('glass')->comment('mặt kính');
            $table->integer('guarantee')->comment('năm bảo hành');
            $table->float('total_qty')->unsigned()->nullable();
            $table->string('image')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('product_details');
    }
}
