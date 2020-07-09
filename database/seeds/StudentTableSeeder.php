<?php

use Illuminate\Database\Seeder;
use App\Student;
use Faker\Generator as Faker;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $nuovo_studente = new Student();
            $nuovo_studente->name=$faker->sentence(1);
            $nuovo_studente->surname=$faker->sentence(1);
            $nuovo_studente->freshman=$faker->ean8();
            $nuovo_studente->mail=$faker->email();
            $nuovo_studente->save();
        }
    }
}
