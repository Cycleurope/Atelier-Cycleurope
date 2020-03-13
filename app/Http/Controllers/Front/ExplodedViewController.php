<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;
use App\Models\Family;
use App\Models\Brand;

class ExplodedViewController extends Controller
{
    public function index()
    {
        $products = Product::whereHas('bomitems')->get();
        return view('front.exploded-views.index', [
            'products' => $products
        ]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('front.exploded-views.show', [
            'product' => $product
        ]);
    }

    public function byBrand($id)
    {
        $brand = Brand::find($id);
        $seasons = Season::all();
        $famililes = Family::all();
        $products = Product::where('brand_id', $id)->get();
        return view('front.exploded-views.by-brand', [
            'seasons' => $seasons,
            'families' => $famililes,
            'products' => $products,
            'brand' => $brand
        ]);
    }

    // Ajax
    public function toggleFavorite(Request $request)
    {
        $product = Product::find($request->id);
        $product->toggleFavorite();
        die();
    }
}
