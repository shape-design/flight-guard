<?php

use Illuminate\Database\Seeder;

class parametersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parameters')->insert([

            [
                'name' => 'Cost of lounge',
                'value' => 30,
                'currency' => '$',
            ],
            [
                'name' => 'Frequency',
                'value' => 2,
                'currency' => '%',
            ],
            [
                'name' => 'Fixed addition',
                'value' => 0.60,
                'currency' => '$',
            ],
            [
                'name' => 'Minimum premium',
                'value' => 5.00,
                'currency' => '$',
            ],
        ]);
    }
}
