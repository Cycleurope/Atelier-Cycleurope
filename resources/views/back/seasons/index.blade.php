@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Saisons</h1>
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-8">
        <a href="{{ route('admin.seasons.create') }}" class="btn btn-success btn-rounded width-lg"><i class="mdi mdi-plus-circle-outline"></i> Nouvelle saison</a>

    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                @if(count($seasons) > 0)
                    <table class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Année</th>
                                <th class="text-right">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($seasons as $s)
                            <tr>
                                <th>{{ $s->name }}</th>
                                <td>{!! $s->year !!}</td>
                                <td class="text-right"><a href="{{ route('admin.seasons.edit', $s) }}" class="btn btn-purple btn-xs">Consulter</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                <div class="alert alert-info">No season.</div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-lg-4">
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="{{ route('dashboard') }}" class="btn btn-rounded btn-secondary btn-sm"><i class="mdi mdi-arrow-left-bold-circle-outline"></i> Tableau de bord</a>
    </div>
</div>
@endsection