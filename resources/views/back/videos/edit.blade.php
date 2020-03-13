@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Editer la vidéo <span class="text-info">{{ $video->title }}</span></h1>
        </div>
    </div>
</div>
<form action="{{ route('admin.videos.update', $video) }}" method="POST"  method="POST" enctype="multipart/form-data">
    {{ method_field('PUT')}}
@csrf
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $video->title }}" required>
                </div>
                <div class="form-group">
                    <label for="brand">Marque</label>
                    <select name="brand" id="brand" class="form-control">
                        @foreach($brands as $b)
                        <option value="{{ $b->id }}" {{ $b->id == $video->brand->id ? 'selected': ''}}>{{ $b->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $video->description }}">
                </div>
                <div class="form-group">
                    <label for="">URL</label>
                    <input type="text" class="form-control" id="url" name="url" value="{{ $video->url }}" required>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="thumbnail"></label>
                            <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="{{ $video->getFirstMediaUrl('thumbnails')}}" alt="" width="100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                {!! $video->embed() !!}
                <h2>{{ $video->title }}</h2>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                Postée le {{ $video->created_at }} - Dernière mise à jour le {{ $video->updated_at }}
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <button type="submit" name="action" value="save_and_edit" class="btn btn-purple width-lg btn-rounded mb-1">Enregistrer et vérifier le lien Youtube</button>
                <button type="submit" name="action" value="save" class="btn btn-primary width-lg btn-rounded mb-1">Enregistrer les modifications</button>
            </div>
        </div>
    </div>
</div>
</form>
<div class="row">
    <div class="col-lg-8">
        <form id="form-video-delete" action="{{ route('admin.videos.destroy', $video) }}" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <a href="{{ route('admin.videos.index') }}" class="btn btn-secondary btn-sm btn-rounded btn-lg">Retour</a>
            <button type="submit" class="btn btn-sm btn-danger btn-rounded width-sm float-right">Supprimer</button>
        </form>
    </div>
</div>
@endsection