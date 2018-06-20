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
            'address' => '45 rue Claude-Bernard',
            'zip' => '75009',
            'city_id' => 1,
            'floor' => 1,
            'door' => 3,
            'price' => 350,
            'capacity' => 2,
            'type_id' => 1,
            'image_url' => "img/local/local1.jpg"
        ]);
        DB::table('locals')->insert([
            'label' => 'On est pas bien la ?',
            'description' => "Cosy cosy cosy",
            'address' => '15 Rue Saint-Pierre',
            'zip' => '13001',
            'city_id' => 2,
            'floor' => 0,
            'door' => 0,
            'price' => 250,
            'capacity' => 1,
            'type_id' => 4,
            'image_url' => "img/local/local2.jpg"
        ]);
        DB::table('locals')->insert([
            'label' => "Chez Jaouad",
            'description' => 'je rends juste service monsieur',
            'address' => '15 Rue du Talus du Cours',
            'zip' => '75018',
            'city_id' => 1,
            'floor' => 2,
            'door' => 2,
            'price' => 350,
            'capacity' => 3,
            'type_id' => 1,
            'image_url' => "img/local/local1.jpg"
        ]);
        DB::table('locals')->insert([
            'label' => "Chez Google",
            'description' => "Locaux au sommet de la technologie, chaise connectée.",
            'address' => "2 Rue de Bruges",
            'zip' => '33000',
            'city_id' => 5,
            'floor' => 456,
            'door' => 153,
            'price' => 4000,
            'capacity' => 150,
            'type_id' => 2,
            'image_url' => "img/local/local2.jpg"
        ]);
        DB::table('locals')->insert([
            'label' => "Chez mamie",
            'description' => "Coin tranquille avec des chats.",
            'address' => "35 Rue de la République",
            'zip' => '69002',
            'city_id' => 3,
            'floor' => -1,
            'door' => 1,
            'price' => 6000,
            'capacity' => 200,
            'type_id' => 2,
            'image_url' => "img/local/local1.jpg"
        ]);
        DB::table('locals')->insert([
            'label' => "Chez Bob l'eponge",
            'description' => "c'est un ananas",
            'address' => "32 Rue d'Aubagne",
            'zip' => '13001',
            'city_id' => 2,
            'floor' => 1,
            'door' => 5,
            'price' => 300,
            'capacity' => 4,
            'type_id' => 3,
            'image_url' => "img/local/local2.jpg"
        ]);
        DB::table('locals')->insert([
            'label' => "Chez Dinette",
            'description' => "Accueillant, attention proprietaire aggressif.",
            'address' => "42 Rue de Sèze",
            'zip' => '69006',
            'city_id' => 3,
            'floor' => 1,
            'door' => 3,
            'price' => 400,
            'capacity' => 4,
            'type_id' => 3,
            'image_url' => "img/local/local1.jpg"
        ]);
        DB::table('locals')->insert([
            'label' => "Chez Patrice",
            'description' => "Un bel espace pour gagner des millions en scred",
            'address' => "48 rue Tronchet",
            'zip' => '69006',
            'city_id' => 3,
            'floor' => 1,
            'door' => 3,
            'price' => 700,
            'capacity' => 5,
            'type_id' => 4,
            'image_url' => "img/local/local2.jpg"
        ]);
        DB::table('locals')->insert([
            'label' => "Chez Dydy",
            'description' => "Au milieu de plusieurs cancres de la société",
            'address' => "8 Rue Furgole",
            'zip' => '31000',
            'city_id' => 4,
            'floor' => 1,
            'door' => 3,
            'price' => 650,
            'capacity' => 10,
            'type_id' => 4,
            'image_url' => "img/local/local1.jpg"
        ]);

    }
}
