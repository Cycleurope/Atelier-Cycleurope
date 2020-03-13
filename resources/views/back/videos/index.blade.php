@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Vidéos</h1>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col"><a href="{{ route('admin.videos.create') }}" class="btn btn-info btn-rounded width-lg"><i class="mdi mdi-plus-circle-outline"></i> Nouvelle vidéo</a></div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                @if(count($videos) > 0)
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th>Vidéo</th>
                            <th>Postée le</th>
                            <th>Mise à jour</th>
                            <th class="text-right">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($videos as $v)
                        <tr>
                            <th>{{ $v->title }}</th>
                            <td>{{ $v->created_at }}</td>
                            <td>{{ $v->updated_at }}</td>
                            <td class="text-right"><a href="{{ route('admin.videos.edit', $v) }}" class="btn btn-purple btn-xs width-sm">Consulter</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="alert alert-info-full">Il n'y a aucune vidéo.</div>
                @endif

            </div>
        </div>
    </div>
    <div class="col-lg-4"></div>
</div>
<div class="row"></div>
@endsection