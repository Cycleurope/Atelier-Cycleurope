<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Weblink;

class WeblinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weblinks = Weblink::orderBy('position', 'ASC')->get();
        return view('back.weblinks.index', ['weblinks' => $weblinks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.weblinks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $weblink = new Weblink;
        $weblink->name = $request->name;
        $weblink->url = $request->url;
        $weblink->save();

        return redirect()->route('admin.weblinks.index')
            ->with('class', 'success')
            ->with('message', 'Le lien web a été crée.');
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
        $weblink = Weblink::find($id);
        return view('back.weblinks.edit', ['weblink' => $weblink]);
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
        $weblink = Weblink::find($id);
        $weblink->name = $request->name;
        $weblink->url = $request->url;
        $weblink->save();

        return redirect()->route('admin.weblinks.index')
            ->with('class', 'info')
            ->with('message', 'Le lien web a été mis à jour.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $weblink = Weblink::find($id)->delete();

        return redirect()->route('admin.weblinks.index')
            ->with('class', 'danger')
            ->with('message', 'Le lien web a été supprimé.');
    }

    public function sortWeblinks(Request $request)
    {
        $weblinks = $request->weblinks;

        for($i = 0; $i < sizeof($weblinks); $i++) {
            $weblink = Weblink::find($weblinks[$i]);
            $weblink->position = $i;
            $weblink->save();
        }

        return $weblinks;
        die();
    }
    
}
