<?php

namespace App\Http\Controllers;

use App\Models\servicios;
use App\Models\usuarios;
use Illuminate\Http\Request;


class ServiciosController extends Controller
{
   
    public function index()
    {
        $servicios=servicios::all();
        return view('servicios.index',compact('servicios'));
    }

  
    public function create()
    {
    
    $usuarios = usuarios::all("id","nombre_completo");
    return view('Servicios.add', compact('usuarios'));
    }

   
    public function store(Request $request)
    {
        $input=$request->all();
        servicios::create($input);
        return redirect('servicios')->with('message',"Se ha creado correctamente el grupo");
    }

    
    public function show($id)
    {
        $servicio = servicios::find($id);
        return view('servicios.show' )->with( 'servicios' ,$servicio);
        
    }

  
    public function edit($id)
    {
        $usuarios = usuarios::all('id','nombre_completo');
        $servicios = servicios::findOrFail($id);
        return view ('servicios.edit', compact('usuarios','servicios'));
    }

   
    public function update(Request $request, $id)
    {
         
    $servicio = servicios::FindorFail($id);
    $input=$request->all();
    $servicio->update($input) ;
    return redirect('servicios')->with('info', "Se ha actualizado el registro correctamente");
    }

  
    public function destroy( $id)
    {     
    $servicio = servicios::FindOrFail($id);
    $servicio->delete();
    return redirect('servicios')->with('danger' ,"correctamente el grupo");
    }
}
