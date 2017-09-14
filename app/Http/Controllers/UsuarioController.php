<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Session\SessionManager;
use App\Http\Requests\CrearUsuarioRequest;


class UsuarioController extends Controller {

    protected $usuario, $session;

    function __construct(Usuario $usuario, SessionManager $session)
    {
        $this->usuario = $usuario;
        $this->session = $session;
        /* Buscar usuario para los siguientes metodos */
        $this->beforeFilter('@findUsuario', ['only' => ['edit', 'show', 'update', 'destroy']]);
    }
    /* Busca el usuario si no lo encuentra 404 */
    public function findUsuario(Route $route)
    {
        $this->usuario = Usuario::findOrFail($route->getParameter('usuario'));
    }

    public function index()
    {
        $usuarios = $this->usuario->paginate();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    /* Metodo que gestiona los datos */
    public function store(CrearUsuarioRequest $request)
    {
        $usuario = new Usuario;
        $usuario->fill($request->only('username', 'password'));
        if ($usuario->save()) {
            $this->session->flash('message', 'Usuario creado con éxito');
            return \Redirect::route('admin.usuario.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
