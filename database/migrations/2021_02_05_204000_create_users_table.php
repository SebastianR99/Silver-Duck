<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('user_name');
            $table->string('user_email')->unique();
            $table->string('user_password');
            $table->string('user_dpto');
            $table->string('user_city');
            $table->string('user_address');
            $table->string('user_phone');
            $table->foreignId('user_list')->references('list_id')->on('wishlist');
            $table->rememberToken();
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
        Schema::dropIfExists('users', function (Blueprint $table){
            $table->dropForeign('users_user_list_foreign');
        });
    }
}
