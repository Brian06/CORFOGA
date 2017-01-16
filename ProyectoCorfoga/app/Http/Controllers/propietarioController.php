<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\propietarioModel;

use App\usuarioModel;

class propietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propietario = propietarioModel::all();
        return view('Propietario.index', ['propietario'=>$propietario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $propietario = propietarioModel::all();
         $usuario = usuarioModel::all();
        
         return view('Propietario.create', ['propietario'=>$propietario,'usuario'=>$usuario]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $propietario = new propietarioModel;
        $propietario->id = $request->id;
        $propietario->usuario_cedula = $request->usuario_cedula;
        $propietario->save();

        return redirect('../propietario/')->with('message','data has been updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $propietario = propietarioModel::find($id);
        $usuario = usuarioModel::where("id","=",$propietario->usuario_cedula)->get()->first();
        return view('Propietario.detail', ['propietario'=>$propietario,'usuario'=>$usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $propietario = propietarioModel::find($id);
        $usuario = usuarioModel::all();
       
        return view('Propietario.edit', ['propietario'=>$propietario,'usuario'=>$usuario]);
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
          $propietario = propietarioModel::find($id);
          $propietario->usuario_cedula = $request->usuario_cedula;
          $propietario->id= $request->id;
        
          $propietario->save();

      return redirect('../propietario/')->with('message','Los datos han sido editados!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $propietario = propietarioModel::find($id);
         $propietario->delete();
         return redirect('../propietario/')->with('message','data has been deleted!');
    }
}
