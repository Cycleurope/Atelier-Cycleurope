@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Marques</h1>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-8">
        <a href="{{ route('brands.create') }}" class="btn btn-info btn-rounded width-sm"><i class="mdi mdi-plus-circle-outline"></i> Ajouter</a>

    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                @if(count($brands) > 0)
                    <table class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Nom</th>
                                <th>Documents</th>
                                <th>Vidéos</th>
                                <th class="text-right">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($brands as $b)
                            <tr>
                                <th>
                                    @if($b->hasLogo())
                                    <span class="badge badge-pill badge-success">&nbsp;</span>
                                    @else
                                    <span class="badge badge-pill badge-secondary">&nbsp;</span>
                                    @endif
                                </th>
                                <th>{{ $b->name }}</th>
                                <td>{!! $b->documentsBadge() !!}</td>
                                <td>{!! $b->videosBadge() !!}</td>
                                <td class="text-right"><a href="{{ route('admin.brands.edit', $b) }}" class="btn btn-purple btn-xs">Consulter</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                <div class="alert alert-info">No brand.</div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-lg-4">
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="{{ route('admin.dashboard') }}" class="btn btn-rounded btn-secondary btn-sm"><i class="mdi mdi-arrow-left-bold-circle-outline"></i> Tableau de bord</a>
    </div>
</div>
@endsection