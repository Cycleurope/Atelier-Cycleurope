<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;
use App\Models\Family;
use App\Models\Brand;
use Auth;

class ExplodedViewController extends Controller
{
    public function index()
    {
        $brands = Brand::whereHas('products', function($q) {
            $q->whereHas('bomitems');
        })->get();

        $products = Product::whereHas('bomitems')->get();
        return view('front.exploded-views.index', [
            'products' => $products,
            'brands' => $brands
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

    public function favorites()
    {
        $favorite_products = Auth::user()->favorite(Product::class);
        return view('front.exploded-views.favorites', [
            'favorite_products' => $favorite_products
        ]);
    }

    // Ajax
    public function toggleFavorite(Request $request)
    {
        $product = Product::find($request->id);
        $product->toggleFavorite();
        die();
    }

    public function removeFavorite(Request $request)
    {
        $product = Product::find($request->id);
        $product->removeFavorite();
        return json_encode($product);
    }
}
