@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Sessions de Formation</h1>
        </div>
    </div>
    <div class="row">
        @if(count($masterclasses) > 0)
        @foreach($masterclasses as $mc)
        <div class="col-4">
            <div class="card">
                <a href="{{ route('front.masterclasses.show', $mc) }}">
                    <img src="{{ $mc->getFirstMediaUrl('desktop_covers') }}" alt="" width="100%">
                </a>
                <div class="card-header bg-light collapsed">
                    <h2 class="card-title m-0">
                        <a href="{{ route('front.masterclasses.show', $mc) }}" class="text-dark">
                            {{ $mc->title }}
                        </a>
                    </h2>
                    <h4>
                        <i class="mdi mdi-calendar-blank"></i> {{ $mc->starts_at }} | <i class="mdi mdi-map-marker"></i> {{ $mc->location }}
                    </h4>
                </div>
                <div class="card-body py-4 px-4">
                    {{ $mc->summary }}
                </div>
                <div class="card-footer">
                    <a class="fav-masterclass btn btn-xs {{$mc->isFavorited() ? 'text-danger' : 'text-secondary'}}" data-masterclass="{{ $mc->id }}" href="#"><i class="mdi mdi mdi-heart-outline mdi-18px px-1 py-1"></i></a>

                    @if(!$mc->hasAttendeesFromMine())
                    Encore {{ $mc->max_attendees - $mc->attendees()->count() }} places disponibles
                    <a href="{{ route('front.masterclasses.show', $mc->id) }}" class="btn btn-sm btn-rounded btn-purple width-sm float-right">S'inscrire</a>
                    @else
                    <span class="badge badge-pill badge-success"><i class="mdi mdi-check"></i> Je participe déjà à cette session de formation.</span>
                    @endif

                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="alert alert-primary-full">Aucune formation n'est disponible actuellement.</div>
        @endif
    </div>
</div>


@endsection