<?php

namespace App\Http\Controllers;
use App\programas;
use Illuminate\Http\Request;
use DB;
use Auth;

class ProgramasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $programas=programas::All();
       return view('programas.GestionProgramas',compact('programas'));
    }

     public function lista(){
       $programas=programas::All();
       return view('programas.tablaProgramas',compact('programas'));
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
      programas::create([
                            'programa'=>$request->input('programa'),
                            'fechaModificacion'=>date('Y-m-d'),
                            'presupuesto'=>$request->input('presupuesto'),
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
      $programas=programas::find($id);
      return response()->json($programas->toArray());
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
       $programas=programas::find($id);
       $programas->fill($request->all());
       $programas->save();
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
       $programas=programas::find($id);
       $programas=$programas->delete();
       return response()->json([
        "sms"=>"ok"
        ]);
    }
}
