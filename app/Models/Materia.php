<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
	protected $fillable = ['nombre', 'descripcion', 'n_cupos', 'id_usuario', 'id_profesor'];
	protected $table = 'materia';

	public function usuario()
	{
		return $this->belongsTo('App\Models\Usuario', 'id_usuario');
	}

	public function profesor()
	{
		return $this->belongsTo('App\Models\Profesor', 'id_profesor');
	}

	public function estudiante()
	{
		return $this->belongsToMany('App\Models\Estudiante', 'materia_estudiante', 'id_materia', 'id_estudiante');
	}
}