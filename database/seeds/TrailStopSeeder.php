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
            'trail_id' => 0,
            'stop_id' => 0,
            'create_at' => 'CURRENT_TIMESTAMP',
            'updated_at' => 'CURRENT_TIMESTAMP',
        ]);
    }
}
