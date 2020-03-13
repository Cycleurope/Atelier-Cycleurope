@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>F.A.Q.</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="accordion custom-accordion" id="accordionExample">
                        @foreach($questions as $question)
                        <div class="card mb-2">
                            <div class="card-header bg-light collapsed" data-toggle="collapse" data-target="#collapse-{{ $question->id }}" aria-expanded="false" aria-controls="collapse-{{ $question->id }}">
                                <h5 class="card-title m-0">
                                    <a href="#" class="text-dark">
                                        {{ $question->question }}
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse-{{ $question->id }}" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    {!! $question->answer !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Vous avez une autre Question ?</h5>
                    <p>Contactez le Service Après-Vente au 03.25.39.39.39.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection