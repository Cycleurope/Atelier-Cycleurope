@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Editer {{ $doctype->name }}</h1>
        </div>
    </div>
</div>
<form id="brand-form" action="{{ route('admin.doctypes.update', ['doctype' => $doctype]) }}" method="POST">
@csrf
{{ method_field('PUT') }}
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $doctype->name }}" required>
                </div>
                <div class="form-group">
                    <label for="name">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $doctype->slug }}" required>
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
        <form action="{{ route('admin.doctypes.destroy', $doctype) }}">
            @csrf
            {{ method_field('DELETE') }}
            <a href="{{ route('admin.doctypes.index') }}" class="btn btn-rounded btn-secondary btn-sm">Retour</a>
            <button type="submit" class="btn btn-sm btn-danger btn-rounded width-sm float-right">Supprimer</button>
        </form>
    </div>
</div>
@endsection