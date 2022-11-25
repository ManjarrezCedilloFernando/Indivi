<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;



class UsuariosController extends Controller
{
  
    public function index()
    {
        $usuarios=usuarios::all();
        return view('usuarios.index',compact('usuarios'));
    }
   
    public function create()
    {
        return view('usuarios.add');
    }

    public function store(Request $request)
    {
        $input=$request->all();
        usuarios::create($input);
        return redirect('usuarios') ->with('message','Se ha creado correctamente');
    }

    public function show($id)
    {
         $usuarios = usuarios::find($id);
         return view('usuarios.show',compact('usuarios'));

    }

    public function edit($id)
    {
        
        $usuarios = usuarios::findOrFail($id);
        return view('usuarios.edit',compact('usuarios'));
    }

    public function update(Request $request, $id)
    {
        $usuarios=usuarios::findOrFail($id);
        $input=$request->all();
        $usuarios->update($input);
        return redirect('usuarios')->with('info','se ha actualizado correctamente');
    }

    
    public function destroy( $id)
    {
        $usuario = usuarios::findOrFail($id);
        $usuario->delete();
        return redirect('usuarios')->with(' danger', 'correctamente ');
    }
}
