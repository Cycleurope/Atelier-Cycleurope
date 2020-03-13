<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
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
        $brands = Brand::all();
        return view('back.brands.index', [
            'brands' => $brands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->save();

        if($request->logo != null) {
            $brand->addMedia($request->logo)->toMediaCollection('logos');
        }

        return redirect()->route('admin.brands.index')
            ->with('class', 'success')
            ->with('message', 'La marque a bien été ajoutée.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        $brand = Brand::find($brand->id);
        return view('back.brands.edit', [
            'brand' => $brand
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        
        $brand = Brand::find($brand->id);
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->save();

        if($request->logo != null) {
            $brand->addMedia($request->logo)->toMediaCollection('logos');
        }

        return redirect()->route('admin.brands.index')
            ->with('class', 'info')
            ->with('message', 'La marque a bien été mise à jour.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        return redirect()->route('admin.brands.index')
            ->with('class', 'danger')
            ->with('message', 'La marque a bien été supprimée.');
    }
}
