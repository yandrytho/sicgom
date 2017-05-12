<?php

namespace App\Http\Controllers;
use App\politicasInstitucionales;
use Illuminate\Http\Request;
use DB;
use Auth;

class PoliticasInstitucionalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $politicasInstitucionales=politicasInstitucionales::All();
        return view('politicasInstitucionales.GestionPoliticasInstitucionales',compact('politicasInstitucionales'));
    }

    public function lista(){
        $politicasInstitucionales=politicasInstitucionales::All();
        return view('politicasInstitucionales.TablaPoliticasInstitucionales',compact('politicasInstitucionales'));
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
        politicasInstitucionales::create([
                            'politicaInstitucional'=>$request->input('politicaInstitucional'),
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
      $politicasInstitucionales=politicasInstitucionales::find($id);
      return response()->json($politicasInstitucionales->toArray());
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
       $politicasInstitucionales=politicasInstitucionales::find($id);
       $politicasInstitucionales->fill($request->all());
       $politicasInstitucionales->save();
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
       $politicasInstitucionales=politicasInstitucionales::find($id);
       $politicasInstitucionales=$politicasInstitucionales->delete();
       return response()->json([
        "sms"=>"ok"
        ]);
    }
}
