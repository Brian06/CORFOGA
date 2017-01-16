<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\animalModel;
use App\Http\Requests;
//use App\Animales;
use Storage;
use Illuminate\Support\Facades\Validator;
use Excel;



class animalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //IMPORTANTE: ruta de prueba localhost:8000/animal(nombre ruta)
        $animal = animalModel::all();
        return json_encode($animal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           //dd($request);
       $archivo = $request->file('archivo');
       $nombre_original=$archivo->getClientOriginalName();
       $extension=$archivo->getClientOriginalExtension();
       $r1=Storage::disk('archivos')->put($nombre_original,  \File::get($archivo) );
       $ruta  =  storage_path('archivos') ."/". $nombre_original;
       if($r1){
           
            Excel::selectSheetsByIndex(0)->load($ruta, function($hoja) {
                $hoja->skip(1);
                $hoja->each(function($fila) {
                 
                      $usersemails=animalModel::where("registro","=",$fila->registro)->first();
                    if(count( $usersemails)==0){
                        
                      // dd($fila);
                            
                        $animal=new animalModel;
                    
                      
                        $animal->registro= $fila->registro;
                        $animal->codigo= $fila->codigo;
                        $animal->nombre= $fila->nombre;
                        $animal->raza= $fila->raza;
                        
                        $animal->fecha_nacimiento= $fila->fecnac ;
                        $animal->sexo= $fila->sx;
                        $animal->origen_reproductivo= null;
                        $animal->fecha_destete= null;
                        $animal->foto= null;
                    
                        $animal->save();

                        
                    }
             
                });

            });

            
       }
       
       return redirect('../cargar')->with('message','Los datos se han cargado éxitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
