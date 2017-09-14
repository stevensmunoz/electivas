<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MateriasTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		for ($i=0; $i < 10; $i++) { 
			
			$id = \DB::table('materia')->insertGetId([
				'nombre' => $faker->sentence(3),
				'descripcion' => $faker->text(),
				'n_cupos' => $faker->randomNumber(2),
				'id_profesor' => $faker->numberBetween(1, 10),
				'id_usuario' => $faker->numberBetween(1, 10)
				]);
		}

	}

}