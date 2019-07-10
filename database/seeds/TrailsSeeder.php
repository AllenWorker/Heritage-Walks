<?php

use Illuminate\Database\Seeder;

class TrailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trails')->insert([
            'name' => 'Parks & Gardens Walking Trail',
            'description' => 'trails',
            'time' => 0,
            'length' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
