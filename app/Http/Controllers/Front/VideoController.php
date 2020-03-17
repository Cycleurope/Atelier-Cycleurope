<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Brand;

class VideoController extends Controller
{
    
    public function __construct()
    {

    }

    public function index()
    {
        $brands = Brand::all();
        $videos = Video::all();
        return view('front.videos.index', [
            'videos' => $videos,
            'brands' => $brands,
        ]);
    }

    // Ajax
    public function toggleFavorite(Request $request)
    {
        $video = Video::find($request->id);
        $video->toggleFavorite();
        die();
    }
    
    
}
