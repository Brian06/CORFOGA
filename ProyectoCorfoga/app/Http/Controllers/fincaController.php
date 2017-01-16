<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fincaModel;
use App\propietarioModel;

class fincaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finca = fincaModel::all();
        $propietario = propietarioModel::all();

        return view('Finca.index', ['finca'=>$finca,'propietario'=>$propietario]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {

        $finca = fincaModel::all();
        $propietario = propietarioModel::all();
        
        return view('Finca.create', ['finca'=>$finca,'propietario'=>$propietario]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $finca = new fincaModel;
        $finca->propietario_id = $request->propietario_id;
        $finca->id = $request->id;
        $finca->nombre= $request->nombre;
        $finca->region= $request->region;
        $finca->save();

        return redirect('../finca/create')->with('message','data has been updated!');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $finca = fincaModel::find($id);
        $propietario = propietarioModel::where("id","=",$finca->propietario_id)->get()->first();
        return view('Finca.details', ['finca'=>$finca,'propietario'=>$propietario]);

     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

        $finca = fincaModel::find($id);
        $propietario = propietarioModel::all();
       
        return view('Finca.edit', ['finca'=>$finca,'propietario'=>$propietario]);
        
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
          $finca = fincaModel::find($id);
          $finca->propietario_id = $request->propietario_id;
          $finca->nombre= $request->nombre;
          $finca->region= $request->region;
          $finca->save();

      return redirect('../finca/')->with('message','data has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $finca = fincaModel::find($id);
        
        $finca->delete();
        return redirect('../finca/')->with('message','data has been deleted!');
    }
}
