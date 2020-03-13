@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Editer {{ $brand->name }}</h1>
        </div>
    </div>
</div>
<form id="brand-form" action="{{ route('admin.brands.update', ['brand' => $brand]) }}" method="POST" enctype="multipart/form-data">
@csrf
{{ method_field('PUT') }}
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $brand->name }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $brand->description }}">
                </div>
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" name="logo" id="logo" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <img src="{{ $brand->getFirstMediaUrl('logos')}}" alt="" style="width: 100%">
                <a href="#" class="btn btn-sm width-sm btn-danger btn-rounded">Supprimer l'image</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <input type="submit" value="Enregistrer les modifications" class="btn btn-info btn-rounded width-lg">
            </div>
        </div>
    </div>
</div>
</form>
<div class="row">
    <div class="col">
        <a href="{{ route('admin.brands.index') }}" class="btn btn-rounded btn-secondary btn-sm">Retour</a>
    </div>
</div>
@endsection