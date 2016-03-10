<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         /*Schema::create('users_hotel', function (Blueprint $table) {
            $table->integer('id_hotel');
            $table->integer('id_user');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
       // Schema::drop('users_hotel');
    }
}
