@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Retours de formations</h1>
        </div>
    </div>
    <div class="row">
        @if(count($feedbacks) > 0)
        @foreach($feedbacks as $fb)
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card">
                <a href="{{ route('front.feedbacks.show', $fb) }}">
                    <img src="{{ $fb->masterclass->getFirstMediaUrl('desktop_covers') }}" alt="" width="100%">
                </a>
                <div class="card-header bg-light collapsed">
                    <h2 class="card-title m-0">
                        {{ $fb->masterclass->title }}
                    </h2>
                </div>
                <div class="card-footer">
                    <a href="{{ route('front.feedbacks.show', $fb) }}" class="btn btn-sm btn-rounded width-sm btn-purple">Consulter</a>
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