<?php

namespace App\Http\Controllers;
use App\categoriaEvidencias;
use Illuminate\Http\Request;
use DB;
use Auth;

class CategoriasEvidenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categoriaEvidencias=categoriaEvidencias::All();
       return view('categoriaEvidencias.GestionCategoriaEvidencia',compact('categoriaEvidencias'));
    }

     public function lista(){
       $categoriaEvidencias=categoriaEvidencias::All();
       return view('categoriaEvidencias.TablaCategoriaEvidencia',compact('categoriaEvidencias'));
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
         categoriaEvidencias::create([
                            'categoria_evidencia'=>$request->input('categoriaEvidencia')
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
      $categoriaEvidencias=categoriaEvidencias::find($id);
      return response()->json($categoriaEvidencias->toArray());
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
       $categoriaEvidencias=categoriaEvidencias::find($id);
       $categoriaEvidencias->fill($request->all());
       $categoriaEvidencias->save();
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
       $categoriaEvidencias=categoriaEvidencias::find($id);
       $categoriaEvidencias=$categoriaEvidencias->delete();
       return response()->json([
        "sms"=>"ok"
        ]);
    }
}
