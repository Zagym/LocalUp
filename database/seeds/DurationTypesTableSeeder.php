<?php

use Illuminate\Database\Seeder;

class DurationTypesTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('duration_types')->insert([
            'label' => "Heure"
        ]);
        DB::table('duration_types')->insert([
            'label' => "Jour"
        ]);
        DB::table('duration_types')->insert([
            'label' => "Mois"
        ]);
        DB::table('duration_types')->insert([
            'label' => "Année"
        ]);
    }
}
