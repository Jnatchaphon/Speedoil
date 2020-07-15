<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewseventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsevent', function (Blueprint $table) {
            $table->increments('id');
            $table->string('n_name');
            $table->mediumText('n_des');
            $table->longText('n_detail');
            $table->string('n_pic');
            $table->integer('n_show');
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
        Schema::dropIfExists('newsevent');
    }
}
