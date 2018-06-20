<?php

use Illuminate\Database\Seeder;

class LevelRatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('level_rates')->insert([
            'rates' => 1
        ]);
        DB::table('level_rates')->insert([
            'rates' => 0.90
        ]);
        DB::table('level_rates')->insert([
            'rates' => 0.80
        ]);
        DB::table('level_rates')->insert([
            'rates' => 0.70
        ]);
        DB::table('level_rates')->insert([
            'rates' => 0.60
        ]);
        DB::table('level_rates')->insert([
            'rates' => 0.50
        ]);
        DB::table('level_rates')->insert([
            'rates' => 0.40
        ]);
        DB::table('level_rates')->insert([
            'rates' => 0.30
        ]);
        DB::table('level_rates')->insert([
            'rates' => 0.20
        ]);
        DB::table('level_rates')->insert([
            'rates' => 0.10
        ]);
    }
}
