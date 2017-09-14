<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PanelController extends Controller {

protected $usuario;

    public function __construct(Usuario $usuario)
    {
        $this->middleware('auth');
        $this->usuario = $usuario;
    }

    public function index()
    {
        $usuarios = $this->usuario->paginate()->total();
        return view('escritorio', compact('usuarios'));
    }

}
