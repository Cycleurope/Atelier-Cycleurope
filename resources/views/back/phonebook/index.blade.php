@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Annuaire</h1>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col"><a href="{{ route('admin.phonebook.create') }}" class="btn btn-info btn-rounded width-sm px-2"><i class="mdi mdi-plus-circle-outline mr-1"></i>Ajouter</a></div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                @if(count($phonecards) > 0)
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th>Info Comp.</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($phonecards as $card)
                        <tr>
                            <th>{{ $card->title }}</th>
                            <td>{{ $card->phone }}</td>
                            <td>{{ $card->email }}</td>
                            <td>{{ $card->info }}</td>
                            <td class="text-right"><a href="{{ route('admin.phonebook.edit', $card) }}" class="btn btn-xs btn-purple width-sm">Consulter</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="alert alert-info">Aucune carte enregistrée.</div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-lg-4"></div>
</div>
<div class="row"></div>
@endsection