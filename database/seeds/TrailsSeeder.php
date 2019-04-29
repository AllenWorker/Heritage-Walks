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
            'name' => 'names',
            'time' => 0,
            'length' => 0,
            'created_at' => 'CURRENT_TIMESTAMP',
            'update_at' => 'CURRENT_TIMESTAMP',
        ]);
    }
}
