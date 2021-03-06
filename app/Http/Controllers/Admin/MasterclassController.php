<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masterclass;

class MasterclassController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masterclasses = Masterclass::where('starts_at', '>', date('Y-m-d'))->get();
        return view('back.masterclasses.index', [
            'masterclasses' => $masterclasses
        ]);
    }

    public function archives()
    {
        $masterclasses = Masterclass::where('ends_at', '<', date('Y-m-d'))->get();
        return view('back.masterclasses.archives', [
            'masterclasses' => $masterclasses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.masterclasses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $sa = $request->starts_at;
        $ea = $request->ends_at;

        $masterclass = Masterclass::create([
            'title'             => $request->title,
            'summary'           => $request->summary,
            'program'           => $request->program,
            'price'             => $request->price,
            'starts_at'         => substr($sa, 6, 4)."-".substr($sa, 0, 2)."-".substr($sa, 3, 2)." 00:00:00",
            'ends_at'           => substr($ea, 6, 4)."-".substr($ea, 0, 2)."-".substr($ea, 3, 2)." 00:00:00",
            'location'          => $request->location,
            'max_attendees'     => $request->max_attendees,
            'information'       => $request->information,
            'records_start_at'  => $request->records_start_at,
            'published_at'      => $request->published_at
        ]);

        if($request->desktop_cover != null) {
            $masterclass->addMedia($request->desktop_cover)->toMediaCollection('desktop_covers');
        }

        if($request->mobile_cover != null) {
            $masterclass->addMedia($request->mobile_cover)->toMediaCollection('mobile_covers');
        }

        return redirect()->route('admin.masterclasses.index')
            ->with('class', 'success')
            ->with('message', 'La formation a été créée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $masterclass = Masterclass::find($id);
        return view('back.masterclasses.show', [
            'mc' => $masterclass
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mc = Masterclass::find($id);
        return view('back.masterclasses.edit', [
            'mc' => $mc
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
        $sa = $request->starts_at;
        $ea = $request->ends_at;
        $rsa = $request->records_start_at;
        $pa = $request->published_at;

        $mc                     = Masterclass::find($id);
        $mc->title              = $request->title;
        $mc->summary            = $request->summary;
        $mc->program            = $request->program;
        $mc->price              = $request->price;
        $mc->starts_at          = $sa;
        $mc->ends_at            = $ea;
        $mc->max_attendees      = $request->max_attendees;
        $mc->information        = $request->information;
        $mc->records_start_at   = $rsa;
        $mc->published_at       = $pa;
        $mc->save();

        if($request->desktop_cover != null) {
            $mc->addMedia($request->desktop_cover)->toMediaCollection('desktop_covers');
        }

        if($request->mobile_cover != null) {
            $mc->addMedia($request->mobile_cover)->toMediaCollection('mobile_covers');
        }

        return redirect()->route('admin.masterclasses.index')
            ->with('class', 'info')
            ->with('message', 'La formation a été modifiée.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $masterclass = Masterclass::find($id)->delete();

        return redirect()->route('admin.masterclasses.index')
            ->with('class', 'danger')
            ->with('message', 'La formation a été supprimée.');
    }
}
