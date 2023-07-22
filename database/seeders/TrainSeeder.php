<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<50;$i++){
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_di_partenza=$faker->city();
            $newTrain->stazione_di_arrivo=$faker->city();
            $newTrain->orario_di_partenza=$faker->time();
            $newTrain->orario_di_arrivo=$faker->time();
            $newTrain->codice_treno=$faker->unique()->bothify('??-####');
            $newTrain->numero_carrozze=$faker->randomDigit();
            $newTrain->in_orario=$faker->numberBetween(0,1);
            $newTrain->cancellato=$faker->numberBetween(0,1);

            $newTrain->save();
        }


    }
}
