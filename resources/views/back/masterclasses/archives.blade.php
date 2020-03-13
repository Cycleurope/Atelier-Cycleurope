@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title">Formations passées</h1>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if(count($masterclasses) > 0)
                        <table class="table table-sm table-hover">
                            <thead>
                                <tr>
                                    <th>Formation</th>
                                    <th class="text-right">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($masterclasses as $mc)
                                <tr>
                                    <th>{{ $mc->title }}</th>
                                    <td class="text-right"><a href="{{ route('admin.masterclasses.show', $mc) }}" class="btn btn-purple btn-xs">Consulter</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                    <div class="alert alert-info-full">Aucune masterclass planifiée.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection