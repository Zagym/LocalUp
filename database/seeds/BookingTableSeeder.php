<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([
            'begins_at' => Carbon::parse('2018-06-20'),
            'ends_at' => Carbon::parse('2018-06-27'),
            'local_id' => 1,
            'user_id' => 1,
            'flat_rate_id' => 1
        ]);
        DB::table('bookings')->insert([
            'begins_at' => Carbon::parse('2018-06-20'),
            'ends_at' => Carbon::parse('2018-06-27'),
            'local_id' => 2,
            'user_id' => 3,
            'flat_rate_id' => 2
        ]);
        DB::table('bookings')->insert([
            'begins_at' => Carbon::parse('2018-06-10'),
            'ends_at' => Carbon::parse('2018-06-19'),
            'local_id' => 3,
            'user_id' => 2,
            'flat_rate_id' => 3
        ]);
    }
}
