@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title">Retours de Formation :: <span class="text-info">Nouveau</span></h1>
            </div>
        </div>
    </div>
    <form id="feedback-form" action="{{ route('admin.feedbacks.store') }}" method='POST'>
    @csrf
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Formation rattachée</label>
                        @if($masterclass != null)
                        <h3>{{ $masterclass->title }}</h3>
                        <input type="hidden" name="masterclass" value="{{ $masterclass->id }}">
                        @else
                        <select name="masterclass" id="masterclass" class="form-control">
                            @foreach($masterclasses as $mc)
                            <option value="{{ $mc->id }}">{{ $mc->title }}</option>
                            @endforeach
                        </select>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="content">Contenu</label>
                        <input type="hidden" name="content" id="feedback-content">
                        <div id="feedback-quill-content">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Publication</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <input type="submit" value="Ajouter" class="btn btn-success btn-rounded width-sm">
                </div>
            </div>
        </div>
    </div>
</form>
<div class="row">
    <div class="col">
        <a href="{{ route('admin.feedbacks.index') }}" class="btn btn-rounded btn-sm btn-secondary">Retour</a>
    </div>
</div>

@endsection