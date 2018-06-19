<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Cordell',
            'lastname' => 'Walker',
            'email' => 'texas@rangers.fr',
            'address' => 'Partout et nul part à la fois.',
            'city' => 'Kenchucky',
            'zip' => '69200 la trick aie aie aie la famille',
            'phone' => '0666666666',
            'password' => 'cordell1234',
            'admin' => 0
        ]);
        DB::table('users')->insert([
            'firstname' => 'Willis',
            'lastname' => 'Bruce',
            'email' => 'sixieme@sens.fr',
            'address' => 'He is dead. He doesnt know that he is, but he is. Sure he is. Trust me.',
            'city' => 'Heaver',
            'zip' => 'Multipass 45785 avenue',
            'phone' => '0000000009',
            'password' => 'bruce1234',
            'admin' => 1
        ]);
        DB::table('users')->insert([
            'firstname' => 'Dora',
            'lastname' => 'Exploratrice',
            'email' => 'ouestmonmail@cliquesitulevois.fr',
            'address' => 'Je dois demander à la carte. Est-ce que tu vois la carte ?',
            'city' => 'Quelque part',
            'zip' => '46 rue de la boustifaille, 44894 entrecote',
            'phone' => '0607080910',
            'password' => 'dora1234',
            'admin' => 0
        ]);
    }
}
