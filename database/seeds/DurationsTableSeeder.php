<?php

use Illuminate\Database\Seeder;

class DurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('durations')->insert([
            'label' => '1 mois',
            'duration' => 1,
            'type_id' =>  3,
            'reduction' => 1.00
        ]);
        DB::table('durations')->insert([
            'label' => '15 jours',
            'duration' => 15,
            'type_id' =>  2,
            'reduction' => 1.5
        ]);
        DB::table('durations')->insert([
            'label' => '1 jour',
            'duration' => 1,
            'type_id' =>  2,
            'reduction' => 2.5
        ]);
        DB::table('durations')->insert([
            'label' => '3 mois',
            'duration' => 3,
            'type_id' =>  3,
            'reduction' => 0.85
        ]);
        DB::table('durations')->insert([
            'label' => '1 an',
            'duration' => 1,
            'type_id' =>  4,
            'reduction' => 0.6
        ]);
    }
}
