@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Nouveau Document Technique</h1>
        </div>
    </div>
</div>
<form action="{{ route('admin.documents.store') }}" method="POST" enctype="multipart/form-data">
<div class="row">
    @csrf
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="doctype">Type de document</label>
                    <select name="doctype" id="doctype" class="form-control">
                        @foreach($doctypes as $dt)
                        <option value="{{ $dt->id }}">{{ $dt->name }}</option>
                        @endforeach
                    </select>
                    <small>
                    Aucun type de document ne correspond. 
                    <a href="{{ route('admin.doctypes.create') }}">Nouveau type de document.</a>
                </small>
                </div>
                
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="document">Document</label>
                    <input type="file" name="document" id="document" class="form-control">
                </div>
                <div class="form-group">
                    <label for="brand">Marque</label>
                    <select name="brand" id="brand" class="form-control">
                        @foreach($brands as $b)
                        <option value="{{ $b->id }}">{{ $b->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-success btn-rounded width-lg">Ajouter</button>
            </div>
        </div>
    </div>
</div>
</form>
<div class="row">
    <div class="col">
        <a href="{{ route('admin.documents.index') }}" class="btn btn-sm btn-secondary btn-rounded width-sm">Retour</a>
    </div>
</div>
@endsection