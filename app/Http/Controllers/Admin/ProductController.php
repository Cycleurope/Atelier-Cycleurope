<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Family;
use App\Models\Season;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BikePartsImport;
use DB;

class ProductController extends Controller
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
        $products = Product::all();
        //$products->addToIndex();
        return view('back.products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seasons = Season::orderBy('year', 'desc')->get();
        $families = Family::orderBy('name', 'asc')->get();
        $brands = Brand::orderBy('name', 'asc')->get();
        return view('back.products.create', [
            'brands' => $brands,
            'seasons' => $seasons,
            'families' => $families
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = new Product;
        $product->reference = $request->reference;
        $product->name = $request->name;
        $product->brand_id = $request->brand;
        $product->family_id = $request->family;
        $product->season_id = $request->season;
        $product->save();


        if($request->photo != null) {
            $product->addMedia($request->photo)->toMediaCollection('photos');
        }

        if($request->datasheet != null) {
            $product->addMedia($request->datasheet)->toMediaCollection('datasheets');
        }

        if($request->explodedview != null) {
            $product->addMedia($request->explodedview)->toMediaCollection('exploded-views');
        }

        switch($request->action):
            case 'save':
                return redirect()->route('admin.products.index')
                    ->with('class', 'success')
                    ->with('message', 'Le produit a bien été ajouté.');
            break;
            case 'save_and_edit':
                return redirect()->route('admin.products.edit', $product->id)
                    ->with('class', 'success')
                    ->with('message', 'Le produit a bien été ajouté. Continuez à éditer la fiche produit.');
            break;
            default:
            return redirect()->route('admin.products.index')
                ->with('class', 'success')
                ->with('message', 'Le produit a bien été ajouté.');
        endswitch;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('back.products.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brand::orderBy('name', 'asc')->get();
        $families = Family::orderBy('name', 'asc')->get();
        $seasons = Season::orderBy('year', 'desc')->get();
        $product = Product::find($id);

        return view('back.products.edit', [
            'product' => $product,
            'brands' => $brands,
            'families' => $families,
            'seasons' => $seasons
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

        $product = Product::find($id);;
        $product->reference = $request->reference;
        $product->name = $request->name;
        $product->brand_id = $request->brand;
        $product->family_id = $request->family;
        $product->season_id = $request->season;
        $product->save();

        if($request->photo != null) {
            $product->addMedia($request->photo)->toMediaCollection('photos');
        }

        if($request->datasheet != null) {
            $product->addMedia($request->datasheet)->toMediaCollection('datasheets');
        }

        if($request->explodedview != null) {
            $product->addMedia($request->explodedview)->toMediaCollection('exploded-views');
        }

        switch($request->action):
            case 'save':
                return redirect()->route('admin.products.index')
                    ->with('class', 'info')
                    ->with('message', 'Le produit a bien été mis à jour.');
            case 'save_and_stay':
                return redirect()->route('admin.products.edit', $id)
                    ->with('class', 'info')
                    ->with('message', 'Le produit a bien été mis à jour.');
            break;
            default:
            return redirect()->route('admin.products.index')
                ->with('class', 'info')
                ->with('message', 'Le produit a bien été mis à jour.');
        endswitch;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function importPartsForm($id)
    {
        $product = Product::find($id);
        return view('back.products.import-parts-form', [
            'product' => $product
        ]);
    }

    public function importParts(Request $request, $id)
    {
        Excel::import(new BikePartsImport($id), $request->file);
        return redirect()->route('admin.products.edit', $id)
            ->with('class', 'success')
            ->with('message', 'Import Success');
    }

    public function emptyBOM($id)
    {
        DB::table('bom_items')->where('product_id', $id)->delete();
        return redirect()->route('admin.products.edit', $id)
            ->with('class', 'info')
            ->with('message', 'La BOM a été vidée.');
    }
}
