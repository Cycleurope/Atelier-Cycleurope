<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Masterclass;
use App\Models\Document;
use App\Models\Product;
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
        $favorite_explodedviews = Auth::user()->favorite(Product::class);

        return view('front.home', [
            'videos' => $videos,
            'masterclasses' => $masterclasses,
            'last_documents' => $last_documents,
            'favorite_explodedviews' => $favorite_explodedviews,
        ]);
        
    }

    public function profile()
    {

        return view('front.me.index');

    }

    public function favorites()
    {
        $products = Auth::user()->favorite(Product::class);
        $masterclasses = Auth::user()->favorite(Masterclass::class);
        $documents = Auth::user()->favorite(Document::class);
        $videos = Auth::user()->favorite(Video::class);
        return view('front.me.favorites', [
            'favorite_masterclasses' => $masterclasses,
            'favorite_documents' => $documents,
            'favorite_videos' => $videos,
            'favorite_products' => $products
        ]);
    }

}
