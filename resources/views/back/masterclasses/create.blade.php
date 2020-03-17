@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Nouvelle formation</h1>
        </div>
    </div>
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <form id="form-masterclass" action="{{ route('admin.masterclasses.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" class="form-control" name="title" id="title" required>
                    </div>
                    <div class="form-group">
                        <label for="summary">Description courte</label>
                        <input type="text" class="form-control" id="summary" name="summary" required>
                    </div>
                    <div class="form-group">
                        <label for="input-masterclass-program">Programme</label>
                        <textarea name="program" id="input-masterclass-program" cols="30" rows="10" class="form-control d-none"></textarea>
                        <div id="quill-masterclass-program" style="min-height:200px"></div>
                    </div>
                    <div class="form-group">
                        <label for="price">Tarif</label>
                        <input type="text" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="starts_at" class="control-label">Date</label>
                        <div class="input-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Du</span>
                                </div>
                                <input type="date" class="form-control" name="starts_at" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Au</span>
                                </div>
                                <input type="date" class="form-control" name="ends_at" required>
-                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="location">Lieu</label>
                        <input type="text" class="form-control" name="location" id="location" required>
                    </div>
                    <div class="form-group">
                        <label for="max_attendees">Nombre de participants maximum</label>
                        <input type="text" class="form-control" name="max_attendees" id="max_attendees" required>
                    </div>
                    <div class="form-group">
                        <label for="input-masterclass-info">Informations supplémentaires</label>
                        <textarea name="information" id="input-masterclass-info" cols="30" rows="10" class="form-control d-none"></textarea>
                        <div id="quill-masterclass-info" style="min-height: 200px"></div>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Visuels</h4>
                <div class="form-group">
                    <label for="">Visuel Desktop</label>
                    <input type="file" class="form-control" 
                        id="desktop_cover" 
                        name="desktop_cover">
                </div>
                <div class="form-group">
                    <label for="">Visuel Mobile</label>
                    <input type="file" class="form-control" 
                        id="mobile_cover" 
                        name="mobile_cover">
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Publication</h4>

                <div class="form-group">
                    <label for="published_at">Date de publication</label>
                    <input type="date" class="form-control" 
                        name="published_at" 
                        required>
                </div>

                <div class="form-group">
                    <label for="records_start_at">Début des inscriptions</label>
                    <input type="date" class="form-control" 
                        name="records_start_at" 
                        required>
                </div>
            </div>
        </div>
        <div class="card">
                <div class="card-body">
                    <input type="submit" value="Valider" class="btn btn-success btn-block btn-rounded">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-8">
        <a href="{{ route('admin.masterclasses.index') }}" class="btn btn-rounded btn-sm btn-secondary"><i class="mdi mdi-arrow-left-bold-circle-outline"></i> Retour</a>
    </div>
</div>
@endsection