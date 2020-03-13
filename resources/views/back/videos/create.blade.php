@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Nouvelle vidéo</h1>
        </div>
    </div>
</div>
<form action="{{ route('admin.videos.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" required>
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
                    <label for="">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="form-group">
                    <label for="">URL</label>
                    <input type="text" class="form-control" id="url" name="url" required>
                </div>
                <div class="form-group">
                    <label for="thumbnail"></label>
                    <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <button type="submit" name="action" value="save_and_edit" class="btn btn-success width-lg btn-rounded">Ajouter et Rester</button>
                <button type="submit" name="action" value="save" class="btn btn-success width-lg btn-rounded">Ajouter et Retourer à la liste</button>
            </div>
        </div>
    </div>
</div>
</form>
<div class="row">
    <div class="col">
        <a href="{{ route('admin.videos.index') }}" class="btn btn-secondary btn-sm btn-rounded btn-lg"><i class="mdi mdi-arrow-left-bold-circle-outline"></i> Retour</a>
    </div>
</div>
@endsection