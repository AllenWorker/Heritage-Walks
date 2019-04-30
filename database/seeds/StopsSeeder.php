<?php

use Illuminate\Database\Seeder;

class StopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stops')->insert([
            'name' => 'I is something',
            'short_desc' => 'something something',
            'full_desc' => 'ahhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh',
            'coord_x' => 0.0,
            'coord_y' => 0.0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('stops')->insert([
            'name' => 'This is a building!',
            'short_desc' => 'This is a short description of a building. There is a longer description.',
            'full_desc' => 'This is a longer description of a building. It is extremely long!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! sfjhfjshfskfksfhsdfskfkhsdkdskfhshjfhjsfkdsfjshjfkshfkdsf',
            'coord_x' => 1955.1112,
            'coord_y' => 1985.1026,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
