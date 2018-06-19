<?php

use Illuminate\Database\Seeder;

class ModuleTypesTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('module_types')->insert([
            'nature' => "materiel",
            'description' => "chaises, bureaux, imprimantes, ..."
        ]);
        DB::table('module_types')->insert([
            'nature' => "confort",
            'description' => "alimentation, climatisation, canapé, ..."
        ]);
        DB::table('module_types')->insert([
            'nature' => "espace",
            'description' => "salles, bureau, café, ..."
        ]);
    }
}
