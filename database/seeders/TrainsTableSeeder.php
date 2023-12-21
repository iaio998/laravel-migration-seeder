<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

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
            $newTrain = new Train();

            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_date = $faker->dateTimeBetween('-0 week', '+8 week');
            $newTrain->departure_time = $faker->dateTimeBetween('-0 week', '+8 week');
            $newTrain->arrival_date = $faker->dateTimeBetween('-0 week', '+8 week');
            $newTrain->arrival_time = $faker->dateTimeBetween('-0 week', '+8 week');
            $newTrain->train_code = $faker->bothify('???-###');
            $newTrain->carriages = $faker->numberBetween(1, 12);
            $newTrain->on_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();

            $newTrain->save();
        }
    }
}
