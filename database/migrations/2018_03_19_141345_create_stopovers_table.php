<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStopoversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stopovers', function (Blueprint $table) {
          //  $table->increments('id');
            $table->integer('count')->nullable();
           // $table->timestamps();
        });
        DB::statement('ALTER TABLE `stopovers` ADD `multiplier` FLOAT NULL DEFAULT NULL'); // BUG FLOAT NOT SUPPORTED
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stopovers');
    }
}
