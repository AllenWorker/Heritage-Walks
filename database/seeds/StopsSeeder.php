<?php

use Illuminate\Database\Seeder;

class StopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /**
     *  DB::table('stops')->insert([
     * 'name' => 'DATAHERE',
     * 'street_location' => 'DATAHERE',
     * 'short_desc' => 'DATAHERE',
     * 'full_desc' => 'DATAHERE',
     * 'coord_x' => DATAHERE,
     * 'coord_y' => DATAHERE,
     * 'created_at' => DB::raw('CURRENT_TIMESTAMP'),
     * 'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
     * ]);
     */


    public function run()
    {
        DB::table('stops')->insert([
            'name' => 'Stirling Gardens',
            'street_location' => 'Corner Barrack Street & St Georges Terrace',
            'short_desc' => 'Stirling Gardens are named after Captain James Stirling, who founded Perth and established the Swan River Colony in 1829. At the corner of Stirling Gardens, is a statue of Alexander Forrest, who was both an explorer and an early Mayor of the city, standing guard over the gardens\' entrance. ',
            'full_desc' => 'Stirling Gardens is the oldest gardens in the city. First used by colonial botanist James Drummond as an acclimatisation garden in the 1830s, the reserve opened as a botanical garden in 1845. Botanical gardens were used to promote botanical learning, horticultural skill and civic pride and also provided a green space for those who could not afford to establish their own gardens. Stirling Gardens acted as Perth\'s botanic gardens until 1960, when the Kings Park Botanic Gardens were officially established.',
            'coord_x' => -31.95496,
            'coord_y' => 115.85713,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('stops')->insert([
            'name' => 'Supreme Court Gardens',
            'street_location' => 'Corner Barrack Street & Riverside Drive',
            'short_desc' => 'The Supreme Court Gardens are semi-enclosed by mature trees and gardens. Events such as Opera in the Park and Carols by Candlelight, as well as some high profile ticketed events are held here in the summer months.',
            'full_desc' => 'Merging with the Stirling Gardens are the Supreme Court Gardens, which contain both the Supreme Court (1903) and the oldest building in the City of Perth. Now known as the Francis Burt Law Education Centre, this was the only building suitable for public meetings when it was built in 1836. It performed various functions in those early days - as a church, a law cour and as the Perth Boys\' School until 1850. The building now houses a small museum, which is open from 10am to 2:30pm, Wednesday to Friday.',
            'coord_x' => -31.958627,
            'coord_y' => 115.859821,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('stops')->insert([
            'name' => 'Langley Park',
            'street_location' => 'Corner Plain Street & Riverside Drive',
            'short_desc' => 'Today, Langley Park is a popular vantage point for the annual Australia Day Skyworks, as well as the venue for many sporting events, exhibitions and marches',
            'full_desc' => 'Langley Park was created by land reclamation between 1921 and 1935 and was used as an airstrip when Major Norman Brearly pioneered civil aviation in Western Australia in the 1920s. The airstrip was re-named Langley Park after the Acting Lord Mayor, TW Langley, in 1937.',
            'coord_x' => -31.961531,
            'coord_y' => 115.869057,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('stops')->insert([
            'name' => 'Ozone Reserve',
            'street_location' => '1 Adelaide Terrace',
            'short_desc' => 'Ozone Reserve continues the sweep of green riverside land towards the eastern end of the city. 
                 Recent works on the reserve have introduced an environmentally friendly irrigation lake, Lake Vasto, named in recognition of Perth\'s Italian sister city.',
            'full_desc' => 'Ozone Reserve continues the sweep of green riverside land towards the eastern end of the city. Recent works on the reserve have introduced an environmentally friendly irrigation lake, Lake Vasto, named in recognition of Perth\'s Italian sister city.',
            'coord_x' => -31.962505,
            'coord_y' => 115.877436,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('stops')->insert([
            'name' => 'Point Fraser',
            'street_location' => 'Corner Riverside Drive & The Causeway',
            'short_desc' => 'This artificial wetland, accessed by a series of interconnecting boardwalks, serves a number of purposes. Stormwater is filtered through the wetland before flowing in to the Swan River, helping to preserve the delicate balance of the river.',
            'full_desc' => 'This artificial wetland, accessed by a series of interconnecting boardwalks, serves a number of purposes. Stormwater is filtered through the wetland before flowing in the Swan River, helping to preserve the delicate balance of the river. Native reeds have been planted to attract birds and wildlife to the area. Interpretive works allow visitors to gain an insight into the significance of the site from an environmental, historical and indigenous perspective. Future developments will include restaurant, cafe, beach and picnic areas, a children\'s playground, short-term boat moorings and a jetty for ferries providing river cruises.',
            'coord_x' => -31.964453,
            'coord_y' => 115.877962,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('stops')->insert([
            'name' => 'Heirisson Island',
            'street_location' => 'Just off The Causeway',
            'short_desc' => 'The island over which the Causeway runs is though to have been named after a crew member sailing with the French nabigator-explorer, Captain Hamelin, in 1801. Francois-Antoine Heirisson explored and mapped parts of the Swan River including the mudflats that formed Heirisson Island.',
            'full_desc' => 'The island over which the Causeway runs is though to have been named after a crew member sailing with the French nabigator-explorer, Captain Hamelin, in 1801. Francois-Antoine Heirisson explored and mapped parts of the Swan River including the mudflats that formed Heirisson Island. The chart that Heirisson drew of the river is now located at the State Library of Western Australia.
            The early settlers of the Swan River Colony decided to bridge the Swan River, using Heirisson Island as a causeway. Although the first bridge was washed away soon after completion, a new causeway was built by convicts in 1863. Although work commenced in the 1930s to fill in swampy areas between the mudflats, Heirisson Island did not take on the shape we see today until the 1950s. At this stage the river banks were realigned, reed beds filled and silt brought up from the river bed to create a single island.
            Today, Heirisson Island is home to a colony of Western Grey kangaroos, which can be seen in the enclosed southern part of the island. The statue of Nyoongar leader Yagan is also located on the island, which was a significant hunting ground for indigenous people.',
            'coord_x' => -31.965766,
            'coord_y' => 115.882887,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('stops')->insert([
            'name' => 'Queens Gardens',
            'street_location' => 'Corner Hay Street & Plain Street',
            'short_desc' => 'The site of Queens Gardens was initially used for recreation purposes including horse racing and later as a clay mine and brickworks. The classic English style of the enclosed Queens Gardens, make this a popular venue for weddings.',
            'full_desc' => 'The site of Queens Gardens has been closely associated with the physical and social development of Perth. Initially it was used for recreation purposes including horse racing and later as a clay mine and brickworks. The bricks produced between 1860 and 1890 went into several of Perth\'s most prominent buildings. The main features of the gardens include lakes filled with water lilies (the old clay pits), mass displays of flowers and a replica of the Peter Pan statue that\'s in Kensington Gardens, London. The classic English style of the enclosed Queens Gardens, make this a popular venue for weddings.',
            'coord_x' => -31.959412,
            'coord_y' => 115.876922,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        /*DB::table('stops')->insert([
            'name' => 'DATAHERE',
            'street_location' => 'DATAHERE',
            'short_desc' => 'DATAHERE',
            'full_desc' => 'DATAHERE',
            'coord_x' => DATAHERE,
            'coord_y' => DATAHERE,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);*/

    }
}
