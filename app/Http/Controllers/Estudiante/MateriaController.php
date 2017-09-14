<?php

namespace App\Http\Controllers\Estudiante;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use App\Models\Materia;
use Illuminate\Session\SessionManager;
use Illuminate\Http\Request;

class MateriaController extends Controller {

    protected $estudiante;
    protected $session;
    protected $materia;

    public function __construct(Estudiante $estudiante, Materia $materia, SessionManager $session)
    {
        $this->estudiante = $estudiante;
        $this->session = $session;
        $this->materia = $materia;

        $this->middleware('is_estudiante');
    }

    public function show($id)
    {
        $materia = $this->materia->findOrFail($id);
        return view('estudiante.electivas.show', compact('materia'));
    }

    public function inscripcion()
    {
        $materia = $this->materia->findOrFail(\Request::get('materia'));

        if ($materia->n_cupos > 0) {            
            $estudiante = $this->estudiante->findOrFail(session('estudiante')->id);

            $materia->estudiante()->attach($estudiante);

            $materia->n_cupos = $materia->n_cupos - 1;
            $materia->save();

            return response()->json(['value' => true, 'message' => 'Se ha inscrito con éxito']);
        }else{
            return response()->json(['value' => false, 'message' => 'No hay cupos']);

        }
    }


}
