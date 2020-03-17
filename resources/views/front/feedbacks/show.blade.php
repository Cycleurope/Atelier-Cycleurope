@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>{{ $feedback->masterclass->title }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    {!! $feedback->content !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{ route('front.feedbacks.index') }}" class="btn btn-sm btn-rounded btn-info width-sm">Retour</a>
        </div>
    </div>
</div>
@endsection