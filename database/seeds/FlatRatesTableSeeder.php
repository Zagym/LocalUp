<?php

use Illuminate\Database\Seeder;

class FlatRatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flat_rates')->insert([
            'label' => "basic",
            'price' => 1000
        ]);
        DB::table('flat_rates')->insert([
            'label' => "perso",
            'price' => 1500
        ]);
        DB::table('flat_rates')->insert([
            'label' => "Pro",
            'price' => 5000
        ]);
    }
}
