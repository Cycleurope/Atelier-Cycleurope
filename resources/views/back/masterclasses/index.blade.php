@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title">Formations</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <a href="{{ route('admin.masterclasses.create') }}" class="btn btn-info btn-rounded width-sm"><i class="mdi mdi-plus-circle-outline"></i> Ajouter</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if(count($masterclasses) > 0)
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Formation</th>
                            <th>Date</th>
                            <th>Lieu</th>
                            <th class="text-right">Tarif</th>
                            <th class="text-right">Participants</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($masterclasses as $mc)
                        <tr style="border-top: 2px solid #aaaaaa;">
                            <th>{{ $mc->title }}</th>
                            <td><i class="mdi mdi-calendar-blank"></i> {{ $mc->starts_at }} / {{ $mc->ends_at }}</td>
                            <td><i class="mdi mdi-map-marker"></i> {{ $mc->location }}</td>
                            <td class="text-right"><i class="mdi mdi-cash-multiple"></i> {{ $mc->price }}€</td>
                            <td class="text-right"><i class="mdi mdi-account-badge-outline"></i> <span class="font-weight-bold">0</span>/{{ $mc->max_attendees }}</td>
                        </tr>
                        <tr>
                            <td colspan="4">{{ $mc->summary }}</td>
                            <td class="text-right"><a href="{{ route('admin.masterclasses.edit', $mc) }}" class="btn btn-xs btn-rounded btn-purple width-sm">Consulter</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
            <div class="alert alert-info-full">Il n'y a aucune formation planifiée.</div>
            @endif
                </div>
            </div>
        </div>
    </div>
@endsection