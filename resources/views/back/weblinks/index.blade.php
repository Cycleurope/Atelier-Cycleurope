@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Liens Web</h1>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-8">
        <a href="{{ route('admin.weblinks.create') }}" class="btn btn-info btn-rounded width-sm"><i class="mdi mdi-plus-circle-outline"></i> Ajouter</a>

    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                @if(count($weblinks) > 0)
                <ul id="weblinks-sortable" class="list-group list-group-flush">
                    @foreach($weblinks as $w)
                    <li id="weblinks-{{ $w->id }}" class="list-group-item">
                        <div class="row">
                            <div class="col-6"><span class="font-weight-bold">{{ $w->name }}</span> / <a href="{{ $w->url }}">{{ $w->url }}</a></div>
                            <div class="col-6 text-right"><a href="{{ route('admin.weblinks.edit', $w) }}" class="btn btn-purple btn-xs">Consulter</a></div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @else
                <div class="alert alert-info-full">Il n'y a aucun lien web.</div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-lg-4">
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="{{ route('admin.dashboard') }}" class="btn btn-rounded btn-secondary btn-sm"><i class="mdi mdi-arrow-left-bold-circle-outline"></i> Tableau de bord</a>
    </div>
</div>
@endsection