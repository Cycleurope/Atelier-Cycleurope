<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reason;

class ReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reasons = Reason::all();
        return view('back.reasons.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.reasons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reason = new Reason;
        $reason->name = $request->name;
        $reason->save();

        return redirect()->route('admin.reasons.index')
            ->with('class', 'success')
            ->with('message', 'Le motif a bien été crée.');
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
        $reason = Reason::find($id);
        return view('back.reasons.edit', [
            'reason' => $reason
        ]);
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
        $reason = Reason::find($id);
        $reason->name = $request->name;
        $reason->save();

        return redirect()->route('admin.reasons.index')
            ->with('class', 'info')
            ->with('message', 'Le motif a bien été mis à jour.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reason = Reason::find($id)->delete();

        return redirect()->route('admin.reasons.index')
            ->with('class', 'danger')
            ->with('message', 'Le motif a bien été supprimé.');
    }
}
