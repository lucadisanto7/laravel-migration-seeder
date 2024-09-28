<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<25; $i++){
            $train = new Train();
            $train->company = $faker-> company();
            $train->departure_station = $faker->randomElement(['Milano', 'Roma', 'Torino', 'Napoli', 'Firenze', 'Genova', 'Bologna', 'Bari', 'Afragola']);
            $train->arrival_station = $faker->randomElement(['Milano', 'Roma', 'Torino', 'Napoli', 'Firenze', 'Genova', 'Bologna', 'Bari', 'Afragola']);
            $train->departure_time = $faker->dateTimeBetween('-1 day', '+1 day');
            $train->arrival_time = $faker->dateTimeBetween('+1 day', '+2 day');
            $train->train_code = 'AB'.$faker->randomNumber(4, false);
            $train->wagons_number = $faker->randomDigitNotNull();
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
        }
    }
}
