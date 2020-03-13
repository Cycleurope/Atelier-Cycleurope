@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Editer la Question/Réponse</h1>
        </div>
    </div>
</div>
<form id="form-question" action="{{ route('admin.faq.update', $qa) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Question</label>
                    <input type="text" class="form-control" name="question" id="question" value="{{ $qa->question }}" required>
                </div>
                <div class="form-group">
                    <label for="">Réponse</label>
                    <div id="quill-answer">{!! html_entity_decode($qa->answer, ENT_QUOTES, 'UTF-8') !!} </div>
                    <input type="hidden" name="answer" id="input-answer">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
            <button type="submit" class="btn btn-info width-xl btn-rounded">Enregistrer les modifications.</button>
            </div>
        </div>
    </div>
</div>
</form>
<div class="row">
    <div class="col-lg-8">
        <form id="form-question-delete" action="{{ route('faq.destroy', $qa) }}" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <a href="{{ route('admin.faq.index') }}" class="btn btn-rounded btn-secondary btn-sm"><i class="mdi mdi-arrow-left-bold-circle-outline"></i> Retour</a>
            <button type="submit" class="btn btn-rounded btn-danger btn-sm float-right">Supprimer</button>
        </form>
    </div>
</div>
@endsection