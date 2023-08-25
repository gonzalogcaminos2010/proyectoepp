<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //mostrar empleados
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));

        


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //crear empleado
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'dni' => 'required|string|unique:empleados,dni',
            'posicion' => 'required|string',  // Añadir esta línea
        ]);
    
        $empleado = new Empleado();
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->dni = $request->dni;
        $empleado->posicion = $request->posicion;  // Añadir esta línea
        $empleado->save();
    
        return redirect()->route('empleados.index')->with('success', 'Empleado registrado exitosamente.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
