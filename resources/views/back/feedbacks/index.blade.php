@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title">Retours de formation</h1>
            </div>
        </div>
    </div>
    @if(App\Models\Masterclass::archive()->count() > 0)
    <div class="row">
        <div class="col">
            Si il y a des formations passées ...
            <br /><a href="{{ route('admin.feedbacks.create') }}" class="btn btn-success mb-2 btn-rounded mb-4">Nouveau feedback</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if(count($feedbacks) > 0)
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Formation</th>
                                <th>Crée le</th>
                                <th>Mise à jour</th>
                                <th class="text-right">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($feedbacks as $fb)
                            <tr>
                                <th>{{ $fb->masterclass->title }}</th>
                                <td> {{ $fb->created_at }}</td>
                                <td> {{ $fb->updated_at }}</td>
                                <td class="text-right"><a href="{{ route('admin.feedbacks.edit', $fb) }}" class="btn btn-xs btn-purple">Consulter</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class="alert alert-warning-full">Aucun feedback. <a href="{{ route('admin.feedbacks.create') }}" class="text-success">Ajoutez votre premier feedback</a>.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="alert alert-warning-full">Aucun retour de formation ne peut être ajouté actuellement.</div>
    @endif

@endsection