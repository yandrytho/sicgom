<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TiposEstadosMetas;
use DB;
use Auth;
class TipoEstadoMetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TiposEstadosMetas= TiposEstadosMetas::All();
      return view('TiposEstadosMetas.GestionTiposEstadosMetas',compact('TiposEstadosMetas'));
    }

 public function lista()
    {
     $TiposEstadosMetas = TiposEstadosMetas::all();
     return view('tiposEstadosMetas.TablaTiposEstadosMetas',compact("TiposEstadosMetas"));
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
        tiposEstadosMetas::create(['tipoEstadoMeta'=>$request->input('tipoEstadoMeta'),
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
        $TiposEstadosMetas=TiposEstadosMetas::find($id);
        return response()->json($TiposEstadosMetas->toArray());
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
       $TiposEstadosMetas=tiposEstadosMetas::find($id);
       $TiposEstadosMetas->fill($request->all());
       $TiposEstadosMetas->save();
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
       $TiposEstadosMetas=tiposEstadosMetas::find($id);
       $TiposEstadosMetas=$TiposEstadosMetas->delete();
       return response()->json([
        "sms"=>"ok"
        ]);
    }
}
