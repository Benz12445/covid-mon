<?php

use Illuminate\Database\Seeder;
use App\Continent;


class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //
        $continent = ["Asia","Africa","Europe","North America","South America"];

        foreach($continent as $value)
        {
            $new_con = Continent::create([
                'continent' => $value
            ]);
        }
    }
}
