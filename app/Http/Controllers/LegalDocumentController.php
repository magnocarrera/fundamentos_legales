<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLegalRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use App\LegalDocument;
use App\Regulation;


class LegalDocumentController extends Controller
{
    public function index()
    {
        $regulations = LegalDocument::orderBy('id', 'DESC')->paginate(10);
        return view('admin.doc_legales.index', compact('regulations'));
    }

    public function create()
    {
        $regulations = Regulation::orderBy('name', 'ASC')->pluck('name');
        return view('admin.doc_legales.create', compact('regulations'));

    }

    public function store(StoreLegalRequest $request)
    {
        //dd($request);
        $legal = LegalDocument::create($request->all());

        if ($request->file('file')) {
            $path = Storage::disk('public')->put('smb/upload_leyes', $request->file('file'));
            $legal->fill(['file' => $path])->save();
        }

        return redirect()->route('doc_legales.index', $legal->id)->with('info', 'Documento Legal Cargado con Éxito');
    }

    public function edit(LegalDocument $legal, $id)
    {
        $legal = LegalDocument::find($id);

        $regulations = Regulation::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.doc_legales.edit', compact('legal','regulations'));
    }

    public function update(Request $request, LegalDocument $doc_legale)
    {
        $data = request()->validate([
            'regulation_id'     =>  'required|integer',
            'nro_norma'         =>  'required',
            'ano'               =>  'required',
            'decreto'           =>  'required',
            'descripcion'       =>  'required',
            'file'              =>  'required|mimes:pdf',
        ]);

        $doc_legale->update($request->all());

        if ($request->file('file')) {
            $path = Storage::disk('public')->put('smb/upload_leyes', $request->file('file'));
            $doc_legale->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('doc_legales.index', $doc_legale->id)->with('info', 'Documento Actualizado con Éxito');
    }

    public function destroy(LegalDocument $legal, $id)
    {
        $legal = LegalDocument::find($id);

        $legal->delete();
        return back()->with('info', 'Documento Eliminado con Éxito');
    }
}
