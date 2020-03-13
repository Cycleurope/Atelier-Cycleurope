@extends('layouts.front')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title">Mes Favoris</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @if((count($favorite_masterclasses) == 0) && (count($favorite_documents) == 0) && (count($favorite_videos) == 0))
            <div class="alert alert-primary-full">Vous n'avez aucun favoris.</div>
            @else
            @endif
        </div>
    </div>
@endsection