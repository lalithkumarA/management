<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMgtsworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgtsworks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('name')->unsigned()->nullable();
            $table->foreign('name')->references('id')->on('mgts');
            $table->string('mobile');
            $table->string('detail');
            $table->softDeletes();
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
        Schema::dropIfExists('mgtsworks');
    }
}
