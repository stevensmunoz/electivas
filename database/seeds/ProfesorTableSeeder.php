<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProfesorTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		for ($i=0; $i < 10; $i++) { 
			
			$id = \DB::table('profesor')->insertGetId([
				'nombre' => $faker->name
				]);
		}

	}

}