<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDocumentRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Document;
use App\Committe;

class DocumentController extends Controller
{
    public function index()
    {
        $doc_comite = Document::all();
        return view('admin.doc_comites.index', compact('doc_comite'));
    }

    public function create()
    {
        $committes = Committe::orderBy('comite', 'ASC')->pluck('comite', 'id');
        return view('admin.doc_comites.create', compact('committes'));
    }

    public function store(Request $request)
    {
        //dd($request);
        $doc_comite = Document::create($request->all());

        if ($request->file('file')) {
            $path = Storage::disk('public')->put('smb/upload_normas', $request->file('file'));
            $doc_comite->fill(['file' => $path])->save();

        }

        return redirect()->route('doc_comites.index', $doc_comite->id)->with('info', 'Documento Legal Cargado con Éxito');
    }

    public function edit(Document $legal, $id)
    {
        $doc_comite = Document::find($id);

        $committes = Committe::orderBy('comite', 'ASC')->pluck('comite', 'id');
        return view('admin.doc_comites.edit', compact('doc_comite','committes'));
    }





    public function destroy(Document $document, $id)
    {
        $document = Document::find($id);

        $document->delete();
        return back()->with('info', 'Documento Eliminado con Éxito');
    }

}
