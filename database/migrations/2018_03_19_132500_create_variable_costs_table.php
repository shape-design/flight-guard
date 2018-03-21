<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVariableCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variable_costs', function (Blueprint $table) {
            //$table->increments('id');
            $table->integer('pricing_group')->nullable();
            $table->date('date')->nullable();
          //  $table->float('value', 5, 5)->nullable();
            //   $table->timestamps();
        });
        DB::statement('ALTER TABLE `variable_costs` ADD `value` FLOAT NULL DEFAULT NULL'); // BUG FLOAT NOT SUPPORTED
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
