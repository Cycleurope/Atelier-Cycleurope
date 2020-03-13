@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Nouvelle Q.R.</h1>
        </div>
    </div>
</div>
<form id="form-question" action="{{ route('admin.faq.store') }}" method="POST">
    @csrf
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Question</label>
                    <input type="text" class="form-control" name="question" id="question" required>
                </div>
                <div class="form-group">
                    <label for="">Réponse</label>
                    <div id="quill-answer" style="min-height:300px"></div>
                    <input type="hidden" name="answer" id="input-answer">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
            <button type="submit" class="btn btn-success btn-rounded width-sm"><i class="mdi mdi-check-circle-outline"></i> Ajouter la Question / Réponse</button>
            </div>
        </div>
    </div>
</div>
</form>
<div class="row">
    <div class="col">
        <a href="{{ route('admin.faq.index') }}" class="btn btn-rounded btn-secondary btn-sm"><i class="mdi mdi-arrow-left-bold-circle-outline"></i> Retour</a>
    </div>
</div>
@endsection