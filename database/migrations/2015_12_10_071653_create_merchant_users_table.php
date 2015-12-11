<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('merchant_users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('users_id');
            $table->integer('merchants_id');
            $table->integer('barcode')->unique();
            $table->integer('point')->default(0);
            $table->integer('level')->nullable();
            $table->integer('status')->default(1); // 1 is invisible, 0 is not invisible
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
        Schema::drop('merchant_users');
    }
}
