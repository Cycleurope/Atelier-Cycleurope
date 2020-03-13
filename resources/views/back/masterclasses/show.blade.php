@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">{{ $mc->title }}</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                @if($mc->feedback == null)
                <div class="alert alert-info">Aucun retour de formation</div>
                <a href="{{ route('admin.feedbacks.create', $mc) }}" class="btn btn-info btn-xs">Nouveau retour de formation</a>
                @else
                <a href="{{ route('admin.feedbacks.edit', $mc->feedback->id) }}" class="btn btn-sm btn-purple">Consulter le retour de formation</a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection