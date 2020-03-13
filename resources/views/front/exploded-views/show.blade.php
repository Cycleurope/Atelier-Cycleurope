@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>{{ $product->reference }} {{ $product->name }} - Vue Eclatée</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <img src="{{ $product->getFirstMediaUrl('photos') }}" alt="" width="100%">
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="{{ $product->getFirstMediaUrl('datasheets') }}" class="btn btn-block btn-danger btn-rounded" download>Télécharger la fiche technique</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="" class="btn btn-bm width-sm btn-rounded btn-dark btn-block">Télécharger la B.O.M.</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th>Référence</th>
                            <th>Désignation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product->bomitems as $bomitem)
                <tr>
                    <th>{{ $bomitem->part->mmitno }}</th>
                    <td>{{ $bomitem->part->mmitds }}</td>
                </tr>
                @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="{{ route('front.explodedviews.brand', $product->brand) }}" class="btn btn-rounded btn-info">Retour</a>
        </div>
    </div>
</div>


@endsection