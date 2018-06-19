<?php

use Illuminate\Database\Seeder;

class LocalTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('local_types')->insert([
            'label' => "fermé",
            'description' => "Espace clos"
        ]);
        DB::table('local_types')->insert([
            'label' => "centre d'affaires",
            'description' => "Adapté pour les entreprises corporatistes"
        ]);
        DB::table('local_types')->insert([
            'label' => "co-working",
            'description' => "espace où la discussion y est simple et plaisant."
        ]);
        DB::table('local_types')->insert([
            'label' => "open space",
            'description' => "espace de travail trendy et demandé."
        ]);
    }
}
