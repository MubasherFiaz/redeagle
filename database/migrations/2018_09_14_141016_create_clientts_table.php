<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientts', function (Blueprint $table) {
            $table->increments('id');
             $table->text('first_name');
             $table->text('last_name');
             $table->text('number');
             $table->text('address');
             $table->text('city');
             $table->text('state');
             $table->text('zip');
             $table->text('lead_type');
             $table->text('status');
            
             $table->integer('adminn_id');
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
        Schema::drop('clientts');
    }
}
