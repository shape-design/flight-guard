<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameters', function (Blueprint $table) {
          //  $table->increments('id');
          //  $table->timestamps();
            $table->string('name');
            $table->string('currency');
        });
        DB::statement('ALTER TABLE `parameters` ADD `value` FLOAT NULL DEFAULT NULL AFTER `name`'); // BUG FLOAT NOT SUPPORTED
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parameters');
    }
}
