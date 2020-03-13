@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Editer le Document Technique</h1>
        </div>
    </div>
</div>
<form action="{{ route('admin.documents.update', $document) }}" method="POST" enctype="multipart/form-data">
<div class="row">
    @csrf
    {{ method_field('PUT')  }}
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $document->title }}" required>
                </div>
                <div class="form-group">
                    <label for="document">Document de remplacement</label>
                    <input type="file" name="document" id="document" class="form-control">
                </div>
                <div class="form-group">
                    <label for="brand">Marque</label>
                    <select name="brand" id="brand" class="form-control">
                        @foreach($brands as $b)
                        <option value="{{ $b->id }}" {{ $document->brand_id == $b->id ? "selected": ""}}>{{ $b->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Document actuel</h3>
                <a href="{{ $document->getFirstMediaUrl('documents') }}" download class="btn btn-secondary btn-rounded width-sm">Télécharger le document</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-purple btn-rounded width-lg">Mettre à jour</button>
            </div>
        </div>
    </div>
</div>
</form>

<div class="row">
    <div class="col">
        <form action="{{ route('admin.documents.destroy', $document) }}" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <a href="{{ route('admin.documents.index') }}" class="btn btn-sm btn-secondary btn-rounded width-sm">Retour</a>

            <button type="submit" class="btn btn-danger btn-rounded btn-sm width-sm float-right">Supprimer</button>
        </form>
    </div>
</div>
@endsection