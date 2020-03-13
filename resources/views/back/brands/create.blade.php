@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Nouvelle marque</h1>
        </div>
    </div>
</div>
<form id="brand-form" action="{{ route('admin.brands.store') }}" method="POST">
@csrf
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <input type="submit" value="Ajouter" class="btn btn-success btn-rounded width-lg">
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