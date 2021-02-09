<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Regulation;
use App\LegalDocument;
use App\Document;
use App\Committe;

class PageController extends Controller
{
    public function index()
    {
        $legaldocuments = LegalDocument::with('regulation')->get();
        $documents = Document::with('committe')->get();

        return view('web.vista_documentos', compact('legaldocuments','documents'));
    }
}
