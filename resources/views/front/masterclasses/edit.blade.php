@extends('layouts.front')
@section('content')
@include('partials/notifications-panel')
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <img src="{{ $masterclass->getFirstMediaUrl('desktop_covers') }}" alt="" width="100%">
        </div>
        <div class="col-6 px-4 py-4">
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
            @if($records->canBeCancelled())
            <form action="{{ route("front.masterclasses.update-register.post", $records->id) }}" method="POST">
                @csrf
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Je modifie mon inscription à cette session de formation</h3>
                    <div class="row">
                        <div class="col-6">
                            <h5>Participant 1</h5>
                            <input type="hidden" name="attendee1_id" value="{{ $records->attendees[0]->id }}">
                            <div class="form-group">
                                <label for="attendee1_lastname">Nom</label>
                                <input type="text" class="form-control" id="attendee1_lastname" name="attendee1_lastname" value="{{ $records->attendees[0]->lastname }}">
                            </div>
                            <div class="form-group">
                                <label for="attendee1_firstname">Prénom</label>
                                <input type="text" class="form-control" id="attendee1_firstname" name="attendee1_firstname" value="{{ $records->attendees[0]->firstname }}">
                            </div>
                            <div class="form-group">
                                <label for="attendee1_phone">Téléphone</label>
                                <input type="text" class="form-control" id="attendee1_phone" name="attendee1_phone" value="{{ $records->attendees[0]->phone }}">
                            </div>
                            <div class="form-group">
                                <label for="attendee1_email">Adresse e-mail</label>
                                <input type="text" class="form-control" id="attendee1_email" name="attendee1_email" value="{{ $records->attendees[0]->email }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <h5>Participant 2</h5>
                            @if($records->attendees->count() == 2)
                            <input type="hidden" name="attendee2_id" value="{{ $records->attendees[1]->id }}">
                            <div class="form-group">
                                <label for="attendee2_lastname">Nom</label>
                                <input type="text" class="form-control" id="attendee2_lastname" name="attendee2_lastname" value="{{ $records->attendees[1]->lastname }}">
                            </div>
                            <div class="form-group">
                                <label for="attendee2_firstname">Prénom</label>
                                <input type="text" class="form-control" id="attendee2_firstname" name="attendee2_firstname" value="{{ $records->attendees[1]->firstname }}">
                            </div>
                            <div class="form-group">
                                <label for="attendee2_phone">Téléphone</label>
                                <input type="text" class="form-control" id="attendee2_phone" name="attendee2_phone" value="{{ $records->attendees[1]->phone }}">
                            </div>
                            <div class="form-group">
                                <label for="attendee2_email">Adresse e-mail</label>
                                <input type="text" class="form-control" id="attendee2_email" name="attendee2_email" value="{{ $records->attendees[1]->email }}">
                            </div>
                            @else
                            <div class="form-group">
                                <label for="attendee2_lastname">Nom</label>
                                <input type="text" class="form-control" id="attendee2_lastname" name="attendee2_lastname" value="">
                            </div>
                            <div class="form-group">
                                <label for="attendee2_firstname">Prénom</label>
                                <input type="text" class="form-control" id="attendee2_firstname" name="attendee2_firstname" value="">
                            </div>
                            <div class="form-group">
                                <label for="attendee2_phone">Téléphone</label>
                                <input type="text" class="form-control" id="attendee2_phone" name="attendee2_phone" value="">
                            </div>
                            <div class="form-group">
                                <label for="attendee2_email">Adresse e-mail</label>
                                <input type="text" class="form-control" id="attendee2_email" name="attendee2_email" value="">
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-block btn-success btn-rounded">Je modifie mon inscription</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('front.masterclasses.deregister.post', $masterclass->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger btn-rounded float-right">Je ne souhaite plus participer à cette session de formation.</button>
                    </form>
                </div>
            </div>
            @else
            <div class="card bg-info text-light">
                <div class="card-body">
                    Votre inscription à cette session de formation est maintenant définitive. Si vous souhaitez malgré tout annuler, vous devez contacter le Service Formations au 03.25.39.39.39.
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