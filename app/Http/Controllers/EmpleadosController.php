<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Rubro;

class EmpleadosController extends Controller
{
    function __construc()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //este método ya se realiza en create, ya no es necesario implementar
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = Empleado::all();
        $rubros = Rubro::all();
        return view('empleados.create', compact('empleados'), compact('rubros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Empleado::create($request->all());

        return redirect()->route('empleados.create'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado = Empleado::findOrFail($id);
        //return view('empleado.show', compact('$empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        $rubros = Rubro::all();
        return view('empleados.edit', compact('empleado'), compact('rubros'));
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
        //return "LLEGO";
        //dd($request);
        
        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());
        // return redirect()->route('empleados.index'); //la misma cosa, se retorna empleados.create
        return redirect()->route('empleados.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //no se elimina de la bd, "se elimina" cambiando el estado nomas y se muestran solo los empleados activos o el estado equivalente y los que están de baja no se muestran
        
        $empleado = Empleado::findOrFail($id);
        //dd($empleado);
        $empleado->delete();
        return redirect()-> route('empleados.index');
    }
}