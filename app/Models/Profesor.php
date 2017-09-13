<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
	protected $fillable = ['nombre'];
	protected $table = 'profesor';
	protected $dates = ['deleted_at'];

	public function materia()
	{
		return $this->hasMany('App\Models\Materia', 'id_profesor');
	}
}
