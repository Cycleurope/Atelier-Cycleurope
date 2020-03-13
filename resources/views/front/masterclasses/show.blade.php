@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>{{ $masterclass->title }}</h1>
            <span class="sub-header">{{ $masterclass->summary }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! $masterclass->program !!}
                </div>
            </div>
            @if( !$masterclass->hasAttendeesFromMine() )
            <form action="{{ route("front.masterclasses.register.post", $masterclass->id) }}" method="POST">
                @csrf
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Je m'inscris à cette formation</h3>
                    <div class="row">
                        <div class="col-6">
                            <h5>Participant 1</h5>
                            <div class="form-group">
                                <label for="attendee1_lastaname">Nom</label>
                                <input type="text" class="form-control" id="attendee1_lastname" name="attendee1_lastname">
                            </div>
                            <div class="form-group">
                                <label for="attendee1_firstname">Prénom</label>
                                <input type="text" class="form-control" id="attendee1_firstname" name="attendee1_firstname">
                            </div>
                            <div class="form-group">
                                <label for="attendee1_phone">Téléphone</label>
                                <input type="text" class="form-control" id="attendee1_phone" name="attendee1_phone">
                            </div>
                            <div class="form-group">
                                <label for="attendee1_email">Adresse e-mail</label>
                                <input type="text" class="form-control" id="attendee1_email" name="attendee1_email">
                            </div>
                        </div>
                        <div class="col-6">
                            <h5>Participant 2</h5>
                            <div class="form-group">
                                <label for="attendee2_lastname">Nom</label>
                                <input type="text" class="form-control" id="attendee2_lastname" name="attendee2_lastname">
                            </div>
                            <div class="form-group">
                                <label for="attendee2_firstname">Prénom</label>
                                <input type="text" class="form-control" id="attendee2_firstname" name="attendee2_firstname">
                            </div>
                            <div class="form-group">
                                <label for="attendee2_phone">Téléphone</label>
                                <input type="text" class="form-control" id="attendee2_phone" name="attendee2_phone">
                            </div>
                            <div class="form-group">
                                <label for="attendee2_email">Adresse e-mail</label>
                                <input type="text" class="form-control" id="attendee2_email" name="attendee2_email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-block btn-success btn-rounded">Je valide mon inscription</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            @else
            <div class="alert alert-primary-full">Je participe déjà à cette formation.</div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mes inscriptions à cette formation</h5>
                    <ul class="list-group mb-2">
                    @foreach($masterclass->attendeesFromMine() as $my_attendee)
                    <li class="list-group-item">{{ $my_attendee->firstname }} {{ $my_attendee->lastname }} - {{ $my_attendee->email }} - {{ $my_attendee->phone }}</li>
                    @endforeach
                    </ul>
                    <form action="">
                        <button type="submit" class="btn btn-sm btn-danger btn-rounded width-sm float-right">Me désinscrire de la formation</button>
                    </form>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="{{ route('front.masterclasses.index') }}" class="btn btn-sm btn-secondary btn-rounded width-sm">Retour</a>
        </div>
    </div>
</div>


@endsection