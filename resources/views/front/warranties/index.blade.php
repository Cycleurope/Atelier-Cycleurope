@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Espace Garantie</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 py-3"><a href="{{ route('front.warranties.create') }}" class="btn btn-rounded btn-info width-sm">Nouvelle demande</a></div>
    </div>
@endsection