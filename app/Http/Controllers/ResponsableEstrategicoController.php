<?php

namespace App\Http\Controllers;
use App\responsablesEstrategicos;
use Illuminate\Http\Request;
use DB;
use Auth;

class ResponsableEstrategicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $responsablesEstrategicos=responsablesEstrategicos::All();
        return view('responsablesEstrategicos.GestionResponsablesEstrategico',compact('responsablesEstrategicos'));
    }

    public function lista(){
        $responsablesEstrategicos=responsablesEstrategicos::All();
        return view('responsablesEstrategicos.TablaResponsablesEstrategicos',compact('responsablesEstrategicos'));
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
        responsablesEstrategicos::create([
                            'responsableEstrategico'=>$request->input('responsableEstrategico'),
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
        $responsablesEstrategicos=responsablesEstrategicos::find($id);
      return response()->json($responsablesEstrategicos->toArray());
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
       $responsablesEstrategicos=responsablesEstrategicos::find($id);
       $responsablesEstrategicos->fill($request->all());
       $responsablesEstrategicos->save();
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
       $responsablesEstrategicos=responsablesEstrategicos::find($id);
       $responsablesEstrategicos=$responsablesEstrategicos->delete();
       return response()->json([
        "sms"=>"ok"
        ]);
    }
}
