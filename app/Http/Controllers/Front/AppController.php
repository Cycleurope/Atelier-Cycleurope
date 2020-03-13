<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Masterclass;
use App\Models\Document;
use Auth;

class AppController extends Controller
{

    public function __construct()
    {

    }
    
    public function index()
    {

        $videos = Video::orderBy('id', 'desc')->limit(2)->get();
        $masterclasses = Masterclass::orderBy('id', 'desc')->limit(2)->get();
        $last_documents = Document::orderBy('id', 'desc')->limit(5)->get();

        return view('front.home', [
            'videos' => $videos,
            'masterclasses' => $masterclasses,
            'last_documents' => $last_documents,
        ]);
        
    }

    public function profile()
    {

        return view('front.me.index');

    }

    public function favorites()
    {
        $masterclasses = Auth::user()->favorite(Masterclass::class);
        $documents = Auth::user()->favorite(Document::class);
        $videos = Auth::user()->favorite(Video::class);
        return view('front.me.favorites', [
            'favorite_masterclasses' => $masterclasses,
            'favorite_documents' => $documents,
            'favorite_videos' => $videos
        ]);
    }

}
