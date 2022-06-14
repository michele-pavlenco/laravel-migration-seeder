<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i = 0; $i < 50; $i++) {
        $newTrip = new Trip();
        $newTrip-> paese = $faker->state();
        $newTrip-> citta = $faker->city();
        $newTrip-> descrizzione = $faker->paragraph(5, true);
        $newTrip-> price = $faker->randomFloat(2, 500, 9000);
        $newTrip->save();
        }
    }
}
