@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Annuaire</h1>
        </div>
    </div>
    <div class="row">
        @if(count($cards) > 0)
            @foreach($cards as $card)
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                <div class="card">
                    <div class="card-body" style="min-height:500px">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ $card->getFirstMediaUrl('logos') }}" alt="" width="100%">
                            </div>
                            <div class="col-12">
                                <h3>{{ $card->title }}</h3>
                                {{ $card->phone}}
                                <br />{{ $card->email}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </div>
</div>


@endsection