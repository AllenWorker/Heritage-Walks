<?php

use Illuminate\Database\Seeder;

class TrailStopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trail_stop')->insert([
            'trail_id' => 1,
            'stop_id' => 1,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('trail_stop')->insert([
            'trail_id' => 1,
            'stop_id' => 2,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('trail_stop')->insert([
            'trail_id' => 1,
            'stop_id' => 3,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('trail_stop')->insert([
            'trail_id' => 1,
            'stop_id' => 4,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('trail_stop')->insert([
            'trail_id' => 1,
            'stop_id' => 5,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('trail_stop')->insert([
            'trail_id' => 1,
            'stop_id' => 6,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('trail_stop')->insert([
            'trail_id' => 1,
            'stop_id' => 7,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
