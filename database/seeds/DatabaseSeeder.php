<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UsuariosTableSeeder');
        $this->call('ProfesorTableSeeder');
        $this->call('MateriasTableSeeder');
        $this->call('EstudiantesTableSeeder');
    }
}
