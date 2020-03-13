@extends('layouts.app')
@section('content')
<div id="app" class="py-5">
    @include('partials/notifications-panel')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Importer des mots de passe M3</h1>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form id="form-m3pin-import" action="{{ route('passwords.import') }}" method="POST" enctype="multipart/form-data" class="mb-4">
                            @csrf
                            <div class="form-group"><label for="file">Fichier</label><input id="file" name="file" type="file" class="form-control flatcontrol" required></div>
                            <input type="submit" value="Importer" class="btn btn-success btn-block">
                        </form>
                        <div id="alert-m3pin-import" class="alert alert-primary-full text-center py-4 d-none">
                            <div class="spinner-border text-light mb-2"></div><br/>
                            <span class="font-weight-bold">Importation des PIN M3 en cours ... </span><br />Ne quittez pas cette page avant la fin de l'opération.</div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <a href="{{ route('users.index') }}" class="btn btn-sm btn-secondary width-sm btn-rounded">Retour</a>
            </div>
        </div>
    </div>
</div>
@endsection