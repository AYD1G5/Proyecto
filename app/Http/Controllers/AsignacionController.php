<?php

namespace App\Http\Controllers;
use App\User;
use App\Ciclo;
use App\Anio;
use App\Asignacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignaciones = Asignacion::all();
        return View('asignaciones.index')->with('asignaciones', $asignaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asignacion = new Asignacion();
        $estudiantes = User::all();
        $ciclos = Ciclo::all();
        return View('asignaciones.save')
            ->with('asignacion', $asignacion)
            ->with('ciclos', $ciclos)
            ->with('method', 'POST');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asignaciones = new Asignacion();
        $asignaciones->estudiante_id = $request->estudiante_id;
        $asignaciones->ciclo_id = $request->ciclo_id;
        $asignaciones->anio = $request->anio;
        $asignaciones->save();
        return Redirect::to('asignaciones')->with('notice', 'Tarea guardada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asignaciones = Asignacion::find($id);
        return View('asignaciones.show')
            ->with('asignaciones', $asignaciones);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignaciones = Asignacion::find($id);
        $estudiantes = User::all();
        $ciclos = Ciclo::all();
        return View('asignaciones.save')
            ->with('asignacion', $asignacion)
            ->with('ciclos', $ciclos)
            ->with('method', 'PUT');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $asignaciones = Asignacion::find($id);
        $asignaciones->estudiante_id = $request->estudiante_id;
        $asignaciones->ciclo_id = $request->ciclo_id;
        $asignaciones->anio = $request->anio;
        $asignaciones->save();
        return Redirect::to('asignaciones')->with('notice', 'Tarea guardada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
