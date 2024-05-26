<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 12; $i++) {
            $newTrain= new Train();
            $newTrain->brand = $faker->word();
            $newTrain->station = $faker->city();
            $newTrain->destination = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->arrival_date_time = $faker->dateTime();
            $newTrain->code = $faker->randomDigit();
            $newTrain->carriege = $faker->randomDigit();
            $newTrain->on_time =  $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->save();
        }
    }
}
