<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        for ($i=0; $i<20; $i++) {
            /*$train = new Train();
            $train->azienda = $faker->name();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->dateTime();
            $train->orario_arrivo = $faker->dateTime();
            $train->codice_treno = $faker->randomNumber(5, true);
            $train->ritardo = $faker->time();
            $train->cancellato = $faker->boolean();
            $train->save();*/

        }
    }
}
