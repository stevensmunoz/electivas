<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;
	protected $table = 'usuario';
	protected $fillable = ['username', 'password'];
	protected $hidden = ['password', 'remember_token'];
	protected $perPage = 50;

	public function materia()
	{
		return $this->hasMany('App\Models\Materia', 'id_usuario');
	}

}
