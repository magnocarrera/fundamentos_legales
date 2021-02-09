<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegulationRequest;
use Illuminate\Validation\Rule;
use App\Regulation;

class RegulationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regulations = Regulation::orderBy('id', 'ASC')->paginate(10);
        return view('admin.regulaciones.index', compact('regulations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.regulaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegulationRequest $request)
    {
        $regulation = Regulation::create($request->all());
        return redirect()->route('regulaciones.index', $regulation->id)->with('info', 'Categoría de ley creada con Éxito');
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
    public function edit(Regulation $regulation, $id)
    {
        $regulation = Regulation::find($id);
        return view('admin.regulaciones.edit', compact('regulation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regulation $regulation)
    {
        $request->validate([
            'name'=>'required',
            'id' => 'required|integer',
        ]);

        $regulation = $regulation->findOrFail($request->id);
        $regulation->name = $request->name;
        $regulation->save();
        return redirect()->route('regulaciones.index', $regulation->id)->with('info', 'Categoría Actualizada con Éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regulation $regulation, $id)
    {
        $regulation = Regulation::find($id);
        $regulation->delete();

        return back()->with('info', 'Categoría Eliminada con Éxito');
    }
}
