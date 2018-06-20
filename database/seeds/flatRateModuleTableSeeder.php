<?php

use Illuminate\Database\Seeder;

class flatRateModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 1,
            'module_id' => 1
        ]);
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 1,
            'module_id' => 2
        ]);
    }
}
