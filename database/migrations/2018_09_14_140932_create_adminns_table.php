<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminns', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->integer('number');
            $table->text('email');
            $table->text('password');
            $table->text('address');
            $table->text('post_of_admin');
            $table->text('img')->nullable();
            
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
        Schema::drop('adminns');
    }
}
