<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;
use App\Models\Materia;
use App\Models\Profesor;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearElectivaRequest;



class ElectivaController extends Controller {

    protected $electiva;
    protected $profesor;
    protected $session;

    public function __construct(Materia $electiva, Profesor $profesor, SessionManager $session)
    {
        $this->electiva = $electiva;
        $this->session = $session;
        $this->profesor = $profesor;
    }

    public function index()
    {
        $electivas = $this->electiva->with('usuario', 'profesor')->paginate();
        return view('electivas.index', compact('electivas'));
    }

    public function create()
    {
        $profesores = $this->profesor->lists('nombre', 'id');
        return view('electivas.create', compact('profesores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CrearElectivaRequest $request)
    {
        $electiva = new Materia;
        $electiva->fill($request->only('nombre', 'descripcion', 'n_cupos', 'id_profesor', 'id_usuario'));
        if ($electiva->save()) {
            $this->session->flash('message', 'Electiva creada con éxito');
            return \Redirect::route('admin.electiva.index');
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
        $electiva = $this->electiva->findOrFail($id);
        $nombre = $electiva->nombre;
        
        if ($electiva->delete()) {
            $this->session->flash('message', "'".$nombre."' fue eliminada de la lista de Electivas.");
            return \Redirect::route('admin.electiva.index');
        }
    }

}
