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
        $aziende = ['FrecciaRossa', 'TrenoSud', 'TreNord'];

        for ($i = 0; $i < 150; $i++){

            $new_train = new Train();

            $orario_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $orario_arrivo = $faker->dateTimeInInterval( $orario_partenza , '+1 days');

            $in_orario = $faker-> boolean();

            if($in_orario) {
                $cancellato = false;
            } else {
                $cancellato = $faker-> boolean();
            }

            $new_train->azienda = $faker-> randomElement($aziende);
            $new_train->stazione_partenza = $faker-> city();
            $new_train->stazione_arrivo = $faker-> city();
            $new_train->orario_partenza = $orario_partenza;
            $new_train->orario_arrivo = $orario_arrivo;
            $new_train->codice_treno = $faker-> bothify('#####');
            $new_train->n_carrozze = $faker-> numberBetween(1, 15);
            $new_train->ritardo = $in_orario;
            $new_train->cancellato = $cancellato;

            $new_train->save();
        }
    }
}
