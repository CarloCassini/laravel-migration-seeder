<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


// implemento faker
use Faker\Generator as Faker;
// recupero i dati del model Train
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
        // questo è il ciclo della creazione dei dati fake
        for ($i = 0; $i < 10; $i++) {

            // creo un nuovo oggetto Train e lo carico coi dati fake
            $train = new Train();
            //
            $train->brand = $faker->words(2, true);
            $train->station_start = $faker->words(3, true);
            $train->station_arrive = $faker->words(3, true);
            $train->time_start_at = $faker->time('H:i');
            $train->time_arrive_at = $faker->time('H:i');
            $train->train_code = $faker->lexify();
            $train->train_carriages_num = $faker->randomDigitNot(0);
            $train->station_start = $faker->words(3, true);
            $train->status_ontime = $faker->numberBetween(0, 1);
            $train->status_deleted = $faker->numberBetween(0, 1);
            $train->date = $faker->date('Y_m_d');
            $train->test = $faker->words(2, true);

            $train->save();
        }

    }
}