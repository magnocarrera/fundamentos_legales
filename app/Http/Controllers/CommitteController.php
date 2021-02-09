<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommitteRequest;
//use App\Http\Requests\UpdateCommitteRequest;
use Illuminate\Validation\Rule;

use App\Committe;

class CommitteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $committes = Committe::orderBy('id', 'ASC')->paginate(10);
        return view('admin.comites_tecnicos.index', compact('committes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comites_tecnicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommitteRequest $request)
    {
        $committe = Committe::create($request->all());
        return redirect()->route('comites_tecnicos.index', $committe->id)->with('info', 'Comite Técnico creado con Éxito');
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
    public function edit(Committe $committe, $id)
    {
        $committe = Committe::find($id);
        return view('admin.comites_tecnicos.edit', compact('committe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Committe $committe)
    {
        $request->validate([
            'id' => 'required|integer',
            'comite'=>'required',
        ]);

        $committe = $committe->findOrFail($request->id);
        $committe->comite = $request->comite;
        $committe->save();

        return redirect()->route('comites_tecnicos.index', $committe->id)->with('info', 'Comité Actualizado con Éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Committe $committe, $id)
    {
        $committe = Committe::find($id);

        $committe->delete();
        return back()->with('info', 'Comite Técnico Eliminado con Éxito');
    }
}
