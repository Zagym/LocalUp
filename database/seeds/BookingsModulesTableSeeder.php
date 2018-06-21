<?php

use Illuminate\Database\Seeder;

class BookingsModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings_modules')->insert([
            'bookings_id' => 1,
            'modules_id' => 1,
        ]);

        DB::table('bookings_modules')->insert([
            'bookings_id' => 2,
            'modules_id' => 1,
        ]);

        DB::table('bookings_modules')->insert([
            'bookings_id' => 1,
            'modules_id' => 2,
        ]);
    }
}
