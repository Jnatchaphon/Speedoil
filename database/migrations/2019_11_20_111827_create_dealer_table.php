<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('d_name');
            $table->string('d_tel');
            $table->string('d_show');
            $table->integer('PROVINCE_ID')->unsigned();
            $table->foreign('PROVINCE_ID')->references('PROVINCE_ID')->on('province');   // register Foreign Key
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
        Schema::dropIfExists('dealer');
    }
}
