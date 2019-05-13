<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Administer",
            'email' => 'adminHW@gmail.com',
            'password' => bcrypt('Password!'),
        ]);
    }
}
