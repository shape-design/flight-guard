<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routs', function (Blueprint $table) {
            //$table->increments('id');
            $table->integer('origin_code')->nullable();
            $table->index('origin_code');
            $table->integer('destination_code')->nullable();
            $table->index('destination_code');
            $table->foreign('origin_code')->references('code')->on('airports');
            $table->foreign('destination_code')->references('code')->on('airports');
            $table->integer('route_group')->nullable();
         //   $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airports');
    }
}
