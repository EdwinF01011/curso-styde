<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;//   Permite borrar imágenes


class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['empleados']=Empleado::paginate(30);
        return view('empleado.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleado.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $datosEmpleado = request()->all();
        $datosEmpleado = request()->except('_token');//Ignora el token para insertar el resto en la bd
        if ($request->hasFile('Foto')) {
            //convierte la foto de .tmp (archivo temporal)  a .png
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Empleado::insert($datosEmpleado);
        return response()->json($datosEmpleado);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleado=Empleado::findOrFail($id);
        return view('empleado.edit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //
        // echo $request;
        $datosEmpleado = request()->except(['_token','_method']);//Ignora el token para insertar el resto en la bd
        if ($request->hasFile('Foto')) {
            $empleado=Empleado::findOrFail($id);
            Storage::delete('public/'.$empleado->foto);
            //convierte la foto de .tmp (archivo temporal)  a .png
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Empleado::where('id','=','$id')->update($datosEmpleado);
        $empleado=Empleado::findOrFail($id);
        // echo $datosEmpleado;
        
        // return view('empleado.edit',compact('empleado'));
        return response()->json($datosEmpleado);
        //---------------

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Empleado::destroy($id);
        return redirect('empleado');
    }
}
