<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicamentos=Medicamento::all();
        return view('medicamento.index',compact('medicamentos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $medicamentos= new Medicamento;
        $medicamentos->nombre=$request->input('nombre');
        $medicamentos->descripcion=$request->input('descripcion');
        $medicamentos->fecha_caducidad=$request->input('fecha_caducidad');
        $medicamentos->precio=$request->input('precio');
        $medicamentos->id_proveedor=$request->input('id_proveedor');
        $medicamentos->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $medicamentos=Medicamento::find($id);
        $medicamentos->show();
        return redirect()->back();
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $medicamentos=Medicamento::find($id);
        $medicamentos->nombre=$request->input('nombre');
        $medicamentos->descripcion=$request->input('descripcion');
        $medicamentos->fecha_caducidad=$request->input('fecha_caducidad');
        $medicamentos->precio=$request->input('precio');
        $medicamentos->id_proveedor=$request->input('id_proveedor');
        $medicamentos->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $medicamentos=Medicamento::find($id);
        $medicamentos->delete();
        return redirect()->back();
        //
    }
}
