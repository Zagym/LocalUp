<?php

use Illuminate\Database\Seeder;

class TownsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('towns')->insert([
            'label' => 'Paris'
        ]);
        DB::table('towns')->insert([
            'label' => 'Lyon'
        ]);
        DB::table('towns')->insert([
            'label' => 'Bordeaux'
        ]);
        DB::table('towns')->insert([
            'label' => 'Marseille'
        ]);
        DB::table('towns')->insert([
            'label' => 'Toulouse'
        ]);
    }
}
