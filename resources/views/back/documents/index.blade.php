@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Documents Techniques</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col mb-4">
        <a href="{{ route('admin.documents.create') }}" class="btn btn-info btn-rounded">Ajouter un document</a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @if(count($documents) > 0)
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th>Document</th>
                            <th>Marque Associée</th>
                            <th>Type de document</th>
                            <td class="text-right">Taille</td>
                            <th class="text-right">&nbsp;</th>
                            <th class="text-right">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($documents as $doc)
                        <tr>
                            <th>{{ $doc->title }}</th>
                            <td>{{ $doc->brand->name }}</td>
                            <td>{{ $doc->type->name }}</td>
                            <td class="text-right">{{ $doc->getFirstMedia('documents')->human_readable_size }}</td>
                            <td class="text-right"><a download href="{{ $doc->getFirstMediaUrl('documents') }}" class="btn btn-xs btn-primary">Télécharger le document</a></td>
                            <td class="text-right"><a href="{{ route('admin.documents.edit', $doc) }}" class="btn btn-xs btn-purple">Consulter</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="alert alert-info-full">Aucun document</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection