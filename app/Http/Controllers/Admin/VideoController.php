<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\Brand;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {

        $this->middleware('can:isAdmin');
        
    }
    public function index()
    {
        $videos = Video::all();
        return view('back.videos.index', ['videos' => $videos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::orderBy('name', 'asc')->get();
        return view('back.videos.create', ['brands' => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = new Video;
        $video->title = $request->title;
        $video->description = $request->description;
        $video->url = $request->url;
        $video->brand_id = $request->brand;
        $video->save();

        if($request->thumbnail != null) {
            $video->addMedia($request->thumbnail)->toMediaCollection('thumbnails');
        }

        switch($request->action):
            case 'save':
                return redirect()->route('admin.videos.index')
                    ->with('class', 'success')
                    ->with('message', 'La vidéo a été ajoutée.');
            break;
            case 'save_and_edit':
                return redirect()->route('admin.videos.edit', $video->id)
                    ->with('class', 'success')
                    ->with('message', 'La vidéo a été ajoutée.');
            break;
            default:
            return redirect()->route('admin.videos.index')
                ->with('class', 'success')
                ->with('message', 'La vidéo a été ajoutée.');
        endswitch;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        $brands = Brand::orderBy('name', 'asc')->get();
        $video = Video::find($video->id);
        return view('back.videos.edit', [
            'video' => $video,
            'brands' => $brands
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $video = Video::find($video->id);
        $video->title = $request->title;
        $video->description = $request->description;
        $video->url = $request->url;
        $video->brand_id = $request->brand;
        $video->save();

        if($request->thumbnail != null) {
            $video->addMedia($request->thumbnail)->toMediaCollection('thumbnails');
        }

        switch($request->action):
            case 'save':
                return redirect()->route('admin.videos.index')
                    ->with('class', 'success')
                    ->with('message', 'La vidéo a été modifiée.');
            break;
            case 'save_and_edit':
                return redirect()->route('admin.videos.edit', $video->id)
                    ->with('class', 'success')
                    ->with('message', 'Les modification ont été enregistrées.');
            break;
            default:
            return redirect()->route('admin.videos.index')
                ->with('class', 'success')
                ->with('message', 'La vidéo a été modifiée.');
        endswitch;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video = Video::find($video->id)->delete();
        return redirect()->route('admin.videos.index')
        ->with('class', 'danger')
        ->with('message', 'Vidéo supprimée.');
    }
}
