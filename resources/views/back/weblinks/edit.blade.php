@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Editer le lien <span class="text-info">{{ $weblink->name }}</span></h1>
        </div>
    </div>
</div>
<form id="brand-form" action="{{ route('admin.weblinks.update', ['weblink' => $weblink]) }}" method="POST">
@csrf
{{ method_field('PUT') }}
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $weblink->name }}" required>
                </div>
                <div class="form-group">
                    <label for="name">URL</label>
                    <input type="text" class="form-control" id="url" name="url" value="{{ $weblink->url }}" required>
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
        <a href="{{ route('admin.weblinks.index') }}" class="btn btn-rounded btn-secondary btn-sm">Retour</a>
    </div>
</div>
@endsection