@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Formations</h1>
        </div>
    </div>
    <div class="row">
        @if(count($masterclasses) > 0)
        @foreach($masterclasses as $mc)
        <div class="col-12">
            <div class="card">
                <div class="card mb-2">
                    <div class="card-header bg-light collapsed">
                        <h5 class="card-title m-0">
                            <a href="#" class="text-dark">
                                {{ $mc->title }} | <i class="mdi mdi-calendar-blank"></i> {{ $mc->starts_at }} | <i class="mdi mdi-map-marker"></i> {{ $mc->location }}
                                <div class="badge float-right badge-info">{{ $mc->attendees()->count() }}/{{$mc->max_attendees }}</div>
                                @if($mc->hasAttendeesFromMine())
                                <span class="badge badge-primary-full float-right mr-1">Je participe déja à cette formation.</span>
                                @endif
                            </a>
                        </h5>
                    </div>
                    <div>
                        <div class="card-body">
                            {{ $mc->summary }}
                            <hr>
                            <a href="{{ route('front.masterclasses.show', $mc->id) }}" class="btn btn-rounded btn-info width-sm">Plus d'informations</a>
                            <a href="#" class="btn btn-rounded btn-purple width-sm">S'inscrire</a>
                        </div>
                    </div>
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