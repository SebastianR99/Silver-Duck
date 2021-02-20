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
            $table->text('product_name');
            $table->text('product_genre');
            $table->text('product_type');
            $table->text('product_price');
            $table->boolean('product_avail')->default(true);
            $table->integer('product_stock');
            $table->text('product_desc_short');
            $table->text('product_desc_long');
            $table->text('product_size');
            $table->text('product_color');
            $table->text('product_pic1')-> nullable ();
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
        Schema::drop('products');
        Schema::dropIfExists('products');
    }
}
