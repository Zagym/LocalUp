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
            'zip' => '69200',
            'phone' => '0666666666',
            'password' => Hash::make('cordell1234'),
            'admin' => 0
        ]);
        DB::table('users')->insert([
            'firstname' => 'Willis',
            'lastname' => 'Bruce',
            'email' => 'sixieme@sens.fr',
            'address' => 'He is dead. He doesnt know that he is, but he is. Sure he is. Trust me.',
            'city' => 'Heaver',
            'zip' => '45785',
            'phone' => '0000000009',
            'password' => Hash::make('bruce1234'),
            'admin' => 1
        ]);
        DB::table('users')->insert([
            'firstname' => 'Dora',
            'lastname' => 'Exploratrice',
            'email' => 'ouestmonmail@cliquesitulevois.fr',
            'address' => 'Je dois demander à la carte. Est-ce que tu vois la carte ?',
            'city' => 'Quelque part',
            'zip' => '44894',
            'phone' => '0607080910',
            'password' => Hash::make('dora1234'),
            'admin' => 0
        ]);
    }
}
