@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Editer {{ $season->name }}</h1>
        </div>
    </div>
</div>
<form id="brand-form" action="{{ route('admin.brands.update', ['brand' => $season]) }}" method="POST">
@csrf
{{ method_field('PUT') }}
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $season->name }}" required>
                </div>
                <div class="form-group">
                    <label for="year">Année</label>
                    <input type="text" class="form-control" id="year" name="year" value="{{ $season->year }}">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
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
        <a href="{{ route('admin.seasons.index') }}" class="btn btn-rounded btn-secondary btn-sm">Retour</a>
    </div>
</div>
@endsection