<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            'label' => 'chaise',
            'price' => 16.5,
            'description' => 'Une simple chaise en bois. Sex appeal -10%.',
            'type_id' => 1
        ]);
        DB::table('modules')->insert([
            'label' => 'bureau',
            'price' => 216.5,
            'description' => 'Un simple bureau en bois. Sex appeal -10%.',
            'type_id' => 1
        ]);
        DB::table('modules')->insert([
            'label' => 'imprimante',
            'price' => 96.5,
            'description' => 'Une imprimante en 4D, reçue en avant-première.',
            'type_id' => 1
        ]);

        DB::table('modules')->insert([
            'label' => 'alimentation',
            'price' => 20.15,
            'description' => 'Encore meilleur que du cornet beef.',
            'type_id' => 2
        ]);
        DB::table('modules')->insert([
            'label' => 'climatisation',
            'price' => 196,
            'description' => 'Emet un souffle encore plus froid que le Mont Blanc.',
            'type_id' => 2
        ]);
        DB::table('modules')->insert([
            'label' => 'canapé',
            'price' => 400,
            'description' => 'Capacité de repos +10% sur ce canapé.',
            'type_id' => 2
        ]);

        DB::table('modules')->insert([
            'label' => 'salle',
            'price' => 2500,
            'description' => 'Pas de fenêtre, mais au moins, il y a une porte !',
            'type_id' => 3
        ]);
        DB::table('modules')->insert([
            'label' => 'bureau',
            'price' => 1700,
            'description' => 'Un espace vaste, de vastes plaines pour les pauses.',
            'type_id' => 3
        ]);
        DB::table('modules')->insert([
            'label' => 'cafeteria',
            'price' => 850,
            'description' => 'De quoi vous garder eveiller 74h.',
            'type_id' => 3
        ]);
    }
}
