@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Nouveau Produit</h1>
        </div>
    </div>
</div>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="reference">Référence</label>
                    <input type="text" class="form-control" id="reference" name="reference" required>
                </div>
                <div class="form-group">
                    <label for="brand">Marque</label>
                    <select name="brand" id="brand" class="form-control mb-2">
                        @foreach($brands as $b)
                        <option value="{{ $b->id }}">{{ $b->name }}</option>
                        @endforeach
                    </select>
                    <a href="{{ route('admin.brands.create') }}">Ajouter une nouvelle marque</a>
                </div>
                <div class="form-group">
                    <label for="name">Désignation</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="family">Famille</label>
                    <select name="family" id="family" class="form-control mb-2">
                        @foreach($families as $f)
                        <option value="{{ $f->id }}">{{ $f->name }}</option>
                        @endforeach
                    </select>
                    <a href="{{ route('admin.families.create') }}">Ajouter une nouvelle famille</a>
                </div>
                <div class="form-group">
                    <label for="season">Marque</label>
                    <select name="season" id="season" class="form-control mb-2">
                        @foreach($seasons as $s)
                        <option value="{{ $s->id }}">{{ $s->name }}</option>
                        @endforeach
                    </select>
                    <a href="{{ route('admin.seasons.create') }}">Ajouter une nouvelle saison</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-success btn-rounded width-lg" name="action" value="save">Enregistrer</button>
                <button type="submit" class="btn btn-purple btn-rounded width-lg" name="action" value="save_and_edit">Enregistrer et Editer la fiche produit</button>
            </div>
        </div>
    </div>
</div>
</form>
<div class="row">
    <div class="col">
        <a href="{{ route('products.index') }}" class="btn btn-rounded btn-secondary btn-sm">Retour</a>
    </div>
</div>
@endsection