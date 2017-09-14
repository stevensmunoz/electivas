<?php

Route::get('/', 'HomeController@index');
Route::get('/escritorio', ['as' => 'escritorio', 'uses' => 'PanelController@index']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function ()
{
	/* Gestion de usuarios */
	Route::resource('usuario', 'UsuarioController');
	Route::resource('electiva', 'ElectivaController');

	Route::get('estudiante/{id}/electivas', ['as' => 'estudiante_materia', 'uses' => 'EstudianteController@electivas']);
	Route::resource('estudiante', 'EstudianteController');

});

Route::group(['prefix' => 'estudiante', 'namespace' => 'Estudiante'], function ()
{
	Route::controllers([
		'panel' => 'PanelController'
	]);
	Route::get('inscribirse', ['as' => 'ajax_inscribirse', 'uses' => 'MateriaController@inscripcion']);
	Route::resource('materia', 'MateriaController');

});

Route::get('/prueba', function ()
{
	$estudiante = App\Estudiante::with('materia')->find(1);
	return $estudiante;
});