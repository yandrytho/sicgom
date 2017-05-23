<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipoMetas;
use DB;
use Auth;

class tipoMetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tipoMetas = tipoMetas::All();
      return view('tipoMetas.GestionTiposMetas',compact('tipoMetas'));
    }

    public function lista()
    {
     $tipoMetas = tipoMetas::All();
      return view('tipoMetas.TablaTipoMeta',compact('tipoMetas'));
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
       tipoMetas::create([

                            'tipoMeta'=>$request->input('tipoMeta'),
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
        $tipoMetas = tipoMetas::find($id);
      return response()->json($tipoMetas->toArray());
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
        $tipoMetas = tipoMetas::find($id);
        $tipoMetas->fill($request->all());
        $tipoMetas->save();
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
       $tipoMetas = tipoMetas::find($id);
        $tipoMetas = $tipoMetas->delete();
        return response()->json([
            "sms"=>"ok" 
            ]);
    }
}
