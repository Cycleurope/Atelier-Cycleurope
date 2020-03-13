@extends('layouts.app')
@section('content')
    @include('partials/notifications-panel')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title">{{ $page_title ?? 'Tous les comptes' }}</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Consulter directement le profil d'un compte client : </h5>
                    <form class="form-inline" action="{{ route('admin.users.by-username') }}" method="POST">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="" class="mr-4">Code Client : </label>
                          <input type="text" class="form-control form-control" id="username" name="username" value="">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 btn-info">Go !</button>
                      </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    {{ $users->links() }}
                    @if(count($users) > 0)
                    <table class="table table-sm" id="dealers-table">
                        <thead>
                            <tr>
                                <th>Identifiant</th>
                                <th>Nom</th>
                                <th>CP / Ville</th>
                                <th>Statut</th>
                                <th>Mot de passe</th>
                                <th class="text-right">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th>{{ $user->username }}</th>
                                <th>{{ $user->name }}</th>
                                <td>{{ $user->postalcode }} {{ $user->city }}</td>
                                <td>{!! $user->activeBadge() !!}</td>
                                <td>{!! $user->passwordState() !!}</td>
                                <td class="text-right"><a href="{{ route('admin.users.show', $user->username) }}" class="btn btn-xs btn-purple width-sm">Consulter</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class="alert alert-info-full">Aucun compte utilisateur.</div>
                    @endif
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection