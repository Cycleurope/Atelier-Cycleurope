<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DocumentType;
use App\Models\Brand;
class DocumentController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $brands = Brand::wherehas('documents')->orderBy('name', 'ASC')->get();
        $doctypes = DocumentType::wherehas('documents')->orderBy('name', 'ASC')->get();
        
        return view('front.documents.index', [
            'doctypes' => $doctypes,
            'brands' => $brands
        ]);
    }

    public function byBrand($id)
    {
        $brand = Brand::find($id);
        $doctypes = DocumentType::wherehas('documents', function($q) use ($id) {
            $q->where('brand_id', $id);
        })->orderBy('name', 'ASC')->get();

        return view('front.documents.by-brand', [
            'doctypes' => $doctypes,
            'brand' => $brand,
        ]);
    }

    // Ajax
    public function toggleFavorite(Request $request)
    {
        $document = Document::find($request->id);
        $document->toggleFavorite();
        die();
    }
    

    
    
}
