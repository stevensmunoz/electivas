<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
	protected $fillable = ['nombre', 'codigo'];
	protected $table = 'estudiante';
	protected $dates = ['deleted_at'];

	public function materia()
	{
		return $this->belongsToMany('App\Models\Materia', 'materia_estudiante', 'id_estudiante', 'id_materia');
	}
}
