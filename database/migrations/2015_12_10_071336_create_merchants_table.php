<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('users_id');
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('color')->nullable();
            $table->integer('field');
            $table->json('info_merchant_owner');
            $table->integer('type')->default(1); // 1 is free, 2 is preminum 1, 3 is premium 2
            $table->integer('kind')->default(1); //1 là thằng mới hoàn toàn, 2 là thằng đồng bộ bằng email+password, 3 là verifire = số điẹn thoại, 4 là mình tạo cho họ
            $table->integer('status')->default(0); // 1 is invisible, 0 is not invisible
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
        Schema::drop('merchants');
    }
}
