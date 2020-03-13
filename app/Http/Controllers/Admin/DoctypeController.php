<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\DocumentType;
use App\Http\Controllers\Controller;

class DoctypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctypes = DocumentType::all();
        return view('back.doctypes.index', [
            'doctypes' => $doctypes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.doctypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctype = new DocumentType;
        $doctype->name = $request->name;
        $doctype->slug = $request->slug;
        $doctype->save();

        return redirect()->route('admin.doctypes.index')
            ->with('class', 'success')
            ->with('message', 'Le type de document a été crée.');
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
        $doctype = DocumentType::find($id);
        return view('back.doctypes.edit', ['doctype' => $doctype]);
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
        $doctype = DocumentType::find($id);
        $doctype->name = $request->name;
        $doctype->slug = $request->slug;
        $doctype->save();

        return redirect()->route('admin.doctypes.index')
            ->with('class', 'info')
            ->with('message', 'Le type de document a été mis à jour.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctype = DocumentType::find($id)->delete();

        return redirect()->route('admin.doctypes.index')
            ->with('class', 'danger')
            ->with('message', 'Le type de document a été supprimé.');

    }
}
