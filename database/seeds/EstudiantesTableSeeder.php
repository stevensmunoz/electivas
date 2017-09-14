<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EstudiantesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		for ($i=0; $i < 10; $i++) { 
			
			$id = \DB::table('estudiante')->insertGetId([
				'nombre' => $faker->name,
				'codigo' => $faker->numberBetween(200000, 299999)
				]);
		}


		for ($i=0; $i < 50; $i++) { 
			
			$id = \DB::table('materia_estudiante')->insertGetId([
				'id_materia' => $faker->numberBetween(1, 10),
				'id_estudiante' => $faker->numberBetween(1, 10)
				]);
		}

	}

}