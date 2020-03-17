@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title"><span class="text-info">Editer</span> le retour de formation associé à <span class="text-info">{{ $feedback->masterclass->title }}</span></h1>
            </div>
        </div>
    </div>
    <form id="form-feedback" action="{{ route('admin.feedbacks.update', $feedback) }}" method='POST'>
    @csrf
    {{ method_field('PUT') }}
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Formation</label>
                        <select name="masterclass" id="masterclass" class="form-control">
                            @foreach($masterclasses as $mc)
                            <option value="{{ $mc->id }}" {{ $feedback->masterclass_id == $mc->id ? 'selected': '' }}>{{ $mc->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Contenu</label>
                        <input type="hidden" name="content" id="input-feedback-content">
                        <div id="quill-feedback-content">
                            {!! html_entity_decode($feedback->content, ENT_QUOTES, 'UTF-8') !!} 
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
                    <input type="submit" value="Update" class="btn btn-purple btn-block">
                </div>
            </div>
        </div>
    </div>
</form>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.feedbacks.destroy', $feedback) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Supprimer" class="btn btn btn-danger btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection