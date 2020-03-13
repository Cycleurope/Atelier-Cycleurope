@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Nouveau compte</h1>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom et Prénom</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="username">Identifiant M3</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse e-mail</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="text" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <select name="role" id="role" class="form-control">
                            <option value="admin">Administrateur</option>
                            <option value="support">Support</option>
                            <option value="sales">Commercial</option>
                        </select>
                    </div>
                    <input type="submit" value="Créer le compte" class="btn btn-success btn-block">
                </form>
            </div>
        </div>
        <a href="{{ route('dashboard') }}">Tableau de bord</a>
    </div>
</div>
@endsection