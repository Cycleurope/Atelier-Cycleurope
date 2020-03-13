@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">{{ $product->brand->name }} {{ $product->reference }} {{ $product->name }} - <span class="text-info">Importer des composants</span></h1>
        </div>
    </div>
</div>
<form action="{{ route('admin.products.parts.import.post', $product) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Fichier d'import</label>
                        <input type="file" name="file" id="file">
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Importer</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection