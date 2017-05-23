<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mediosVerificaciones;
use DB;
use Auth;


class medioVerificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $mediosVerificaciones = mediosVerificaciones::All();
      return view('mediosVerificaciones.GestionMedioVerificacion',compact('mediosVerificaciones'));
    }

    public function lista(){
      $mediosVerificaciones = mediosVerificaciones::All();
      return view('mediosVerificaciones.TablaMedioVerificacion',compact('mediosVerificaciones'));
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
       mediosVerificaciones::create([

                            'medioVerificacion'=>$request->input('medioVerificacion')
                     ]);
        return response()->json(["registro"=>true]);
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
       $mediosVerificaciones = mediosVerificaciones::find($id);
      return response()->json($mediosVerificaciones->toArray());
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
        $mediosVerificaciones = mediosVerificaciones::find($id);
        $mediosVerificaciones->fill($request->all());
        $mediosVerificaciones->save();
        return response()->json([
            "sms"=>"ok" 
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mediosVerificaciones = mediosVerificaciones::find($id);
        $mediosVerificaciones = $mediosVerificaciones->delete();
        return response()->json([
            "sms"=>"ok" 
            ]);
    }
}
