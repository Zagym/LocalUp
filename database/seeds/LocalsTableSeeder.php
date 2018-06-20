<?php

use Illuminate\Database\Seeder;

class LocalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locals')->insert([
            'label' => 'Bel espace',
            'description' => 'Espace indépendant de 165M² au coeur de la ville',
            'address' => '15 Bld du Docteur Boucher Psychiatre 99587 Parios',
            'city' => 'Paris',
            'floor' => 1,
            'door' => 3,
            'price' => 8500,
            'capacity' => 30,
            'type_id' => 1,
            'image_url' => "patrice"
        ]);
        DB::table('locals')->insert([
            'label' => 'On est pas bien la ?',
            'description' => "Cosy cosy cosy",
            'address' => 'Jamaïque',
            'city' => 'Marseille',
            'floor' => 0,
            'door' => 0,
            'price' => 3500,
            'capacity' => 120,
            'type_id' => 4,
            'image_url' => "patrice"
        ]);
        DB::table('locals')->insert([
            'label' => "Chez Jaouad",
            'description' => 'je rends juste service monsieur',
            'address' => 'Paris 86eme',
            'city' => 'Paris',
            'floor' => 2,
            'door' => 2,
            'price' => 850,
            'capacity' => 5,
            'type_id' => 1,
            'image_url' => "patrice"
        ]);
        DB::table('locals')->insert([
            'label' => "Chez Google",
            'description' => "Locaux au sommet de la technologie, chaise connectée.",
            'address' => "en Amerique",
            'city' => 'Bordeaux',
            'floor' => 456,
            'door' => 153,
            'price' => 150000,
            'capacity' => 1500,
            'type_id' => 2,
            'image_url' => "patrice"
        ]);
        DB::table('locals')->insert([
            'label' => "Chez mamie",
            'description' => "Coin tranquille avec des chats.",
            'address' => "A la campagne",
            'city' => 'Lyon',
            'floor' => -1,
            'door' => 1,
            'price' => 1200,
            'capacity' => 20,
            'type_id' => 1,
            'image_url' => "patrice"
        ]);
        DB::table('locals')->insert([
            'label' => "Chez Bob l'eponge",
            'description' => "c'est un ananas",
            'address' => "au fond de l'océan",
            'city' => 'Marseille',
            'floor' => 1,
            'door' => 5,
            'price' => 210,
            'capacity' => 2,
            'type_id' => 3,
            'image_url' => "patrice"
        ]);
        DB::table('locals')->insert([
            'label' => "chez Patrice",
            'description' => "Accueillant, attention proprietaire aggressif.",
            'address' => "Lyon 6",
            'city' => 'Lyon',
            'floor' => 1,
            'door' => 3,
            'price' => 6050,
            'capacity' => 500,
            'type_id' => 1,
            'image_url' => "patrice"
        ]);

    }
}
