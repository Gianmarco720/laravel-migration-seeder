<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_no = $faker->bothify('??-####');
            $train->carriage_no = $faker->randomDigitNotNull();
            $train->in_time = $faker->boolean();
            $train->deleted = $faker->boolean();
        }
    }
}
