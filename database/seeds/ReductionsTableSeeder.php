<?php

use Illuminate\Database\Seeder;

class ReductionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reductions')->insert([
            'rates' => 1
        ]);
        DB::table('reductions')->insert([
            'rates' => 0.85
        ]);
        DB::table('reductions')->insert([
            'rates' => 0.80
        ]);
        DB::table('reductions')->insert([
            'rates' => 0.75
        ]);
        DB::table('reductions')->insert([
            'rates' => 0.70
        ]);
        DB::table('reductions')->insert([
            'rates' => 0.65
        ]);
        DB::table('reductions')->insert([
            'rates' => 0.60
        ]);
        DB::table('reductions')->insert([
            'rates' => 0.55
        ]);
        DB::table('reductions')->insert([
            'rates' => 0.50
        ]);
        DB::table('reductions')->insert([
            'rates' => 0.55
        ]);
    }
}
