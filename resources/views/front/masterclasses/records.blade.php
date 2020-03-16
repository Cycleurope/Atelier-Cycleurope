@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-4">
            <h1>Mes inscriptions</h1>
        </div>
    </div>
    <div class="row">
        @if(count($records) == 0)
        <div class="col-12 mb-3">
            <span class="font-weight-bold">Je ne suis inscris à aucune session de formation actuellement.</span>
        </div>
        @endif
        @foreach($records as $record)
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    @foreach($record->attendees as $attendee)
                        <li class="list-group-item">
                            <h4>{{ $attendee->firstname }} {{ $attendee->lastname }}</h4>
                            Adresse e-mail : {{ $attendee->email }}
                            <br />Téléphone : {{ $attendee->phone }}
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-12">
            <a href="{{ route('front.masterclasses.index') }}" class="btn btn-sm btn-secondary btn-rounded width-sm">Retour</a>
        </div>
    </div>
</div>


@endsection