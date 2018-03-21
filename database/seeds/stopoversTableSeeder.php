<?php

use Illuminate\Database\Seeder;

class stopoversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stopovers')->insert([

            [
                'count' => 0,
                'multiplier' => 1.05,
            ],
            [
                'count' => 1,
                'multiplier' => 1.32,
            ],
            [
                'count' => 2,
                'multiplier' => 2.00,
            ],
        ]);
    }
}
