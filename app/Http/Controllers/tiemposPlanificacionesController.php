<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tiemposPlanificaciones;
use DB;
use Auth;

class tiemposPlanificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiemposPlanificaciones=tiemposPlanificaciones::All();
       return view('tiemposPlanificaciones.GestionTiemposPlanificaciones',compact('tiemposPlanificaciones'));
    }

     public function lista(){
      $tiemposPlanificaciones=tiemposPlanificaciones::All();
       return view('tiemposPlanificaciones.TablaTiemposPlanificaciones',compact('tiemposPlanificaciones'));
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
        tiemposPlanificaciones::create([
                            'tiempoPlanificacion'=>$request->input('tiempoPlanificacion'),
                            'descripcion'=>$request->input('descripcion')
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
      $tiemposPlanificaciones=tiemposPlanificaciones::find($id);
      return response()->json($tiemposPlanificaciones->toArray());
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
       $tiemposPlanificaciones=tiemposPlanificaciones::find($id);
       $tiemposPlanificaciones->fill($request->all());
       $tiemposPlanificaciones->save();
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
       $tiemposPlanificaciones=tiemposPlanificaciones::find($id);
       $tiemposPlanificaciones=$tiemposPlanificaciones->delete();
       return response()->json([
        "sms"=>"ok"
        ]);
    }
}
