<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'label' => 'Paris'
        ]);
        DB::table('cities')->insert([
            'label' => 'Lyon'
        ]);
        DB::table('cities')->insert([
            'label' => 'Bordeaux'
        ]);
        DB::table('cities')->insert([
            'label' => 'Marseille'
        ]);
        DB::table('cities')->insert([
            'label' => 'Toulouse'
        ]);
    }
}
