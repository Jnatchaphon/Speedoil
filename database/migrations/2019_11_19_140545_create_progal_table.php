<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pg_pic');
            $table->integer('p_id')->unsigned();
            $table->foreign('p_id')->references('id')->on('products');   // register Foreign Key
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
        Schema::dropIfExists('progal');
    }
}
