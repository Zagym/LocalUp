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

        // Offre basic : bureau, chaise, imprimante, climatisation
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 1,
            'module_id' => 1
        ]);
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 1,
            'module_id' => 2
        ]);
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 1,
            'module_id' => 3
        ]);
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 1,
            'module_id' => 4
        ]);

        // Offre perso : bureau, chaise, imprimante, climatisation, téléphone, pouff
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 2,
            'module_id' => 1
        ]);
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 2,
            'module_id' => 2
        ]);
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 2,
            'module_id' => 3
        ]);
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 2,
            'module_id' => 4
        ]);
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 2,
            'module_id' => 5
        ]);
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 2,
            'module_id' => 9
        ]);


        // Offre premium : bureau, chaise, imprimante, climatisation, téléphone, pouff
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 2,
            'module_id' => 1
        ]);
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 2,
            'module_id' => 2
        ]);
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 2,
            'module_id' => 3
        ]);
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 2,
            'module_id' => 4
        ]);
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 2,
            'module_id' => 5
        ]);
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 2,
            'module_id' => 9
        ]);
        DB::table('flat_rates_modules')->insert([
            'flat_rate_id' => 2,
            'module_id' => 10
        ]);
    }
}
