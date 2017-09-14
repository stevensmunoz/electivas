<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsuariosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		for ($i=0; $i < 10; $i++) { 
			
			$id = \DB::table('usuario')->insertGetId([
				'username' => $faker->userName,
				'password' => \Hash::make('123456')
				]);
		}

	}

}