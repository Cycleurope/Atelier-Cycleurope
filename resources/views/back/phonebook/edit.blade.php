@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Annuaire</h1>
        </div>
    </div>
</div>
<form action="{{ route('admin.phonebook.update', $phonecard) }}" method="POST" enctype="multipart/form-data">
@csrf
{{ method_field('PUT')}}
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $phonecard->title }}" required>
                </div>
                <div class="form-group">
                    <label for="logo">Logo de remplacement</label>
                    <input type="file" name="logo" id="logo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $phonecard->phone }}">
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $phonecard->email }}">
                </div>
                <div class="form-group">
                    <label for="info">Information complémentaire</label>
                    <input type="text" class="form-control" id="info" name="info" value="{{ $phonecard->info }}">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <img src="{{ $phonecard->getFirstMediaUrl('logos') }}" alt="" width="100%">
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-info btn-rounded width-sm">Mettre à jour</button>
            </div>
        </div>
    </div>
</div>
</form>
<div class="row">
    <div class="col-8">
        <form id="form-phonecard-delete" action="{{ route('admin.phonebook.destroy', $phonecard) }}" method="POST">
        @csrf
        {{ method_field('DELETE') }}
        <a href="{{ route('admin.phonebook.index') }}" class="btn btn-sm btn-secondary btn-rounded width-sm">Retour</a>

        <button type="submit" class="btn btn-sm btn-rounded btn-danger width-md float-right">Supprimer</button>
        </form>
    </div>
</div>
@endsection