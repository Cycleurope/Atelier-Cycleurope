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
<form action="{{ route('admin.phonebook.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" name="logo" id="logo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="info">Information complémentaire</label>
                    <input type="text" class="form-control" id="info" name="info">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-success btn-rounded width-sm">Ajouter</button>
            </div>
        </div>
    </div>
</div>
</form>
<div class="row">
    <div class="col-8">
        <a href="{{ route('admin.phonebook.index') }}" class="btn btn-sm btn-secondary btn-rounded width-sm"><i class="mdi mdi-arrow-left-bold-circle-outline"></i> Retour</a>
    </div>
</div>
@endsection