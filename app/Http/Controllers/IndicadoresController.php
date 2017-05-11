<?php

namespace App\Http\Controllers;
use App\indicadores;
use Illuminate\Http\Request;
use DB;
use Auth;

class IndicadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicadores=indicadores::All();
        return view('indicadores.GestionIndicadores',compact('indicadores')); 
    }

    public function lista(){
        $indicadores=indicadores::All();
        return view('indicadores.TablaIndicadores',compact('indicadores'));
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
        indicadores::create(['indicador'=>$request->input('indicador'),
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
      $indicadores=indicadores::find($id);
      return response()->json($indicadores->toArray());
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
       $indicadores=indicadores::find($id);
       $indicadores->fill($request->all());
       $indicadores->save();
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
       $indicadores=indicadores::find($id);
       $indicadores=$indicadores->delete();
       return response()->json([
        "sms"=>"ok"
        ]);
    }
}
