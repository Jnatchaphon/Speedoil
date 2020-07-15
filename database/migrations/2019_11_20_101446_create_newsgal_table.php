<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsgalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsgal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ng_pic');
            $table->integer('n_id')->unsigned();
            $table->foreign('n_id')->references('id')->on('newsevent');   // register Foreign Key
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
        Schema::dropIfExists('newsgal');
    }
}
