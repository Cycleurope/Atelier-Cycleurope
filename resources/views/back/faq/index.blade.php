@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">F.A.Q.</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="{{ route('admin.faq.create') }}" class="btn btn-info width-lg btn-rounded width-lg mb-4"><i class="mdi mdi-plus-circle-outline"></i> Nouvelle Question/Réponse</a>
    </div>
</div>
<div class="row">
    <div class="col-lg-8"><div class="card">
        <div class="card-body">
            @if(count($qas) > 0)
            <ul id="faq-sortable" class="list-group">
                @foreach($qas as $qa)
                <li class="list-group-item" id="question-{{ $qa->id }}">
                    <span class="font-weight-bold">{{ $qa->question }}</span>
                    <a href="{{ route('admin.faq.edit', $qa) }}" class="float-right btn btn-xs btn-purple">Consulter</a>
                </li>
                @endforeach
            </ul>
            @else
            <div class="alert alert-info-full">Il n'y a aucune Question / Réponse.</div>
            @endif
        </div>
    </div></div>
    <div class="col-lg-4">

    </div>
</div>
<div class="row">
    <div class="col">
        <a href="{{ route('admin.dashboard') }}" class="btn btn-rounded btn-secondary btn-sm"><i class="mdi mdi-arrow-left-bold-circle-outline"></i> Retour à l'accueil</a>
    </div>
</div>
@endsection