<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_name');
            $table->string('product_genre');
            $table->string('product_type');
            $table->string('product_price');
            $table->boolean('product_avail')->default(true);
            $table->integer('product_stock');
            $table->string('product_desc_short');
            $table->string('product_desc_long');
            $table->string('product_size');
            $table->string('product_color');
            $table->string('product_pic1');
            $table->string('product_pic2');
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
        Schema::dropIfExists('products');
    }
}
