<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EstudianteController extends Controller {

    protected $estudiante;

    public function __construct(Estudiante $estudiante)
    {
        $this->estudiante = $estudiante;
    }
    
    public function index()
    {
        $estudiantes = $this->estudiante->with('materia')->paginate();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function electivas($id)
    {
        $estudiante = $this->estudiante->with('materia')->findOrFail($id);
        return view('estudiantes.electivas', compact('estudiante'));
    }

}