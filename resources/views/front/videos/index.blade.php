@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Vidéos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3>Vidéos récemment ajoutées</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if(count($videos) > 0)
                    <div class="row">
                        @foreach($videos as $v)
                        <div id="video-{{ $v->youtubeID() }}" class="col-lg-3 video-item" data-videoid="{{ $v->youtubeID() }}">
                            <img src="{{ $v->getFirstMediaUrl('thumbnails') }}" alt="" width="100%;">
                            <h4>{{ $v->title }}</h4>
                            <a class="fav-video btn btn-xs {{$v->isFavorited() ? 'btn-danger' : 'btn-light'}}" data-video="{{ $v->id }}" href="#"><i class="mdi mdi-heart mdi-12px"></i></a>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="alert alert-info-full">Aucune vidéo n'est disponible actuellement.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div id="video-overlay" class="d-none">
    <div class="fullwidth-container">
        <div class="video-container">
            <iframe width="853" height="480" src="" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="caption">
            <h2>Lorem ipsum dolor sit amet.</h2>
        </div>
    </div>
    <button id="close-btn"></button>

</div>
@endsection