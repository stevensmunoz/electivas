<?php

namespace App\Http\Controllers\Estudiante;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use App\Models\Materia;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;

class PanelController extends Controller {

    protected $estudiante;
    protected $session;
    protected $materia;

    public function __construct(Estudiante $estudiante, Materia $materia, SessionManager $session)
    {
        $this->estudiante = $estudiante;
        $this->session = $session;
        $this->materia = $materia;

        $this->middleware('is_estudiante', ['only' => 'getEscritorio']);
    }

    public function getEscritorio()
    {
        $mis_electivas = $this->estudiante->with('materia')
            ->where('codigo', session('estudiante')->codigo)
            ->first()->materia;

        $electivas = $this->materia->where('n_cupos', '>', 0)->get();

        return view('estudiante.escritorio', compact('mis_electivas', 'electivas'));
        // $this->session->forget('estudiante');
    }

    public function postLogin()
    {
        $estudiante = $this->estudiante->where('codigo', \Request::get('codigo'))->first();

        if (!is_null($estudiante)) {
            session(['estudiante' => $estudiante]);
            return redirect()->to('/estudiante/panel/escritorio');
        }else{
            return redirect()->to('/');
        }
    }

    public function getLogout()
    {
        $this->session->forget('estudiante');
        return redirect()->to('/');
    }

    public function getElectivas()
    {
        $estudiante = $this->estudiante->where('codigo', session('estudiante')->codigo)->first();

        return view('estudiante.electivas.mi', compact('estudiante'));
    }


}
