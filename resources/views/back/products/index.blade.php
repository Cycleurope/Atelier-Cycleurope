@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Produits</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-4">
        <a href="{{ route('admin.products.create') }}" class="btn btn-info btn-rounded width-sm"><i class="mdi mdi-plus-circle-outline"></i> Ajouter</a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                @if(count($products) > 0)
                <h3 class="mb-3">Il y a {{ count($products) }} références dans la librairie.</h3>
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th>Référence</th>
                            <th>Désignation</th>
                            <th>Marque</th>
                            <th>Famille</th>
                            <th>Saison</th>
                            <th>BOM</th>
                            <th class="text-right">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $p)
                        </tr>
                            <th width="80">{{ $p->reference }} </th>
                            <td><span class="font-weight-bold text-dark">{{ $p->name }}</span></td>
                            <td>{{ $p->brand->name }}</td>
                            <th>{{ $p->family->name }}</th>
                            <th>{{ $p->season->name }}</th>
                            <td>{!! $p->hasBOM() !!}</td>
                            <td class="text-right"><a href="{{ route('admin.products.edit', $p) }}" class="btn btn-xs btn-purple">Consulter</a></td>
                        <tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="alert aert-info">Aucun produit</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection