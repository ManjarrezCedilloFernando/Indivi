<?php

namespace App\Http\Controllers;

use App\Models\veterinarias;
use App\Models\servicios;
use Illuminate\Http\Request;
use App\Http\Requests\StoreveterinariasRequest;
use App\Http\Requests\UpdateveterinariasRequest;

class VeterinariasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $veterinaria=veterinarias::get();
        return view('veterinarias.index',compact('veterinaria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicios = servicios::all('id','descripcion');
        return view('veterinarias.add',compact('servicios'));
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreveterinariasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        veterinarias::create($input);
        return redirect('veterinarias') ->with('message','Se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\veterinarias  $veterinarias
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $veterinaria = veterinarias::find($id);
        return view('veterinarias.show')->with('veterinarias',$veterinaria);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\veterinarias  $veterinarias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicios = servicios::all('id','nombre_completo');
        $veterinarias = veterinarias::findOrFail($id);
        return view('veterinarias.edit',compact('servicios','veterinarias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateveterinariasRequest  $request
     * @param  \App\Models\veterinarias  $veterinarias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $veterinaria=veterinarias::findOrFail($id);
        $input=$request->all();
        $veterinaria->update($input);
        return redirect('veterinarias')->with('info','se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\veterinarias  $veterinarias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veterinaria = veterinarias::findOrFail($id);
        $veterinaria->delete();
        return redirect('veterinarias')->with('danger','correctamente');
    }
}
