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
          DB::table('stops')->insert([
            'name' => 'Langley Park',
            'short_desc' => 'Corner Plain Street & Riverside Drive',
            'full_desc' => 'Today, Langley Park is a popular vantage point for the annual Australia Day Skyworks, as well as the venue for many sporting events, exhibitions and marches',
            'coord_x' => -31.961531,
            'coord_y' => 115.869057,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
          DB::table('stops')->insert([
            'name' => 'Ozone Reserve',
            'short_desc' => '1 Adelaide Terrace',
            'full_desc' => 'Ozone Reserve continues the sweep of green riverside land towards the eastern end of the city. Recent works on the reserve have introduced an environmentally friendly irrigation lake, Lake Vasto, named in recognition of Perth's Italian sister city.',
            'coord_x' => -31.962505,
            'coord_y' => 115.877436,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
            DB::table('stops')->insert([
            'name' => 'Point Fraser',
            'short_desc' => 'Corner Riverside Drive & The Causeway',
            'full_desc' => 'This artificial wetland, accessed by a series of interconnecting boardwalks, serves a number of purposes. Stormwater is filtered through the wetland before flowing in the Swan River, helping to preserve the delicate balance of the river. Native reeds have been planted to attract birds and wildlife to the area. Interpretive works allow visitors to gain an insight into the significance of the site from an environmental, historical and indigenous perspective.',
            'coord_x' => -31.964453,
            'coord_y' => 115.877962,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
