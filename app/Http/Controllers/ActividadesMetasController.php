<?php

namespace App\Http\Controllers;
use App\actividadesMetas;
use DB;
use Auth;
use Illuminate\Http\Request;

class ActividadesMetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $actividadesMetas=actividadesMetas::All();
       return view('actividadesMetas.GestionActividadesMetas',compact('actividadesMetas'));
    }

    public function lista(){
      $actividadesMetas=actividadesMetas::All();
       return view('actividadesMetas.TablaActividadesMetas',compact('actividadesMetas'));
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
       actividadesMetas::create([
                            'actividadMeta'=>$request->input('actividadMeta'),
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
        $actividadesMetas=actividadesMetas::find($id);
      return response()->json($actividadesMetas->toArray());
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
        $actividadesMetas=actividadesMetas::find($id);
       $actividadesMetas->fill($request->all());
       $actividadesMetas->save();
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
        $actividadesMetas=actividadesMetas::find($id);
       $actividadesMetas=$actividadesMetas->delete();
       return response()->json([
        "sms"=>"ok"
        ]);
    }
}
