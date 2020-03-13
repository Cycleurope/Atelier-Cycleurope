<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Brand;
use App\Models\DocumentType;
use Illuminate\Http\Request;
use File;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::all();
        return view('back.documents.index', [
            'documents' => $documents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctypes = DocumentType::all();
        $brands = Brand::orderBy('name', 'asc')->get();
        return view('back.documents.create', [
            'brands' => $brands,
            'doctypes' => $doctypes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $document = new Document;
        $document->title = $request->title;
        $document->brand_id = $request->brand;
        $document->doctype_id = $request->doctype;
        $document->save();

        if($request->document != null) {
            $document->addMedia($request->document)->toMediaCollection('documents');
        }

        return redirect()->route('admin.documents.index')
            ->with('class', 'success')
            ->with('message', 'Le document <span class="font-weight-bold">'.$document->title.'</span> ('.$document->type->name.') a été ajouté.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        $document = Document::find($document->id);
        return view('back.documents.show', ['document' => $document]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        $brands = Brand::orderBy('name', 'asc')->get();
        $document = Document::find($document->id);
        return view('back.documents.edit', ['document' => $document, 'brands' => $brands]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        $document = Document::find($document->id);
        $document->title = $request->title;
        $document->brand_id = $request->brand;
        $document->doctype_id = $request->doctype;
        $document->save();

        if($request->document != null) {
            $document->addMedia($request->document)->toMediaCollection('documents');
            $document->mimetype = File::mimeType($request->document);
        }


        return redirect()->route('admin.documents.index')
            ->with('class', 'info')
            ->with('message', 'le document a été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {

        $document->getFirstMedia('documents')->delete();
        Document::find($document->id)->delete();
        return redirect()->route('admin.documents.index')
            ->with('class', 'danger')
            ->with('message', 'Le document '.$document->title.' a été supprimé.');

    }
}
