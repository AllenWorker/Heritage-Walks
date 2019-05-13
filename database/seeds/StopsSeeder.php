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
            'name' => 'Stirling Gardens',
            'short_desc' => 'Corner Barrack Street & St Georges Terrace',
            'full_desc' => 'Stirling Gardens are named after Captain James Stirling, who founded Perth and established the Swan River Colony in 1829. Kangaroo sculptures, a water feature and the fabled May Gibbs\' creations, Snugglepot and Cuddlepie, are some of the interesting aspects of this parkaland. At the corner of Stirling Gardens, near St Georges Terrace and Barrack Street, the statue of Alexander Forrest, who was both an explorer and an early Mayor of the city, stand guard over the gardens\' entrance.',
            'coord_x' => -31.95496,
            'coord_y' => 115.85713,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('stops')->insert([
            'name' => 'Supreme Court Gardens',
            'short_desc' => 'Corner Barrack Street & Riverside Drive',
            'full_desc' => 'The Supreme Court Gardens are semi-enclosed by mature trees and gardens. Events such as Opera in the Park and Carols by Candlelight, as well as some high profile ticketed events are held here in the summer months.',
            'coord_x' => -31.958627,
            'coord_y' => 115.859821,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
