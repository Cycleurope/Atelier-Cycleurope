@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-9 py-3 offset-3">
            <h1>Vues Eclatées par marque<br /><span class="text-info">{{ $brand->name }}</span></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h4>Familles</h4>
                    <ul id="family-selector" class="list-group">
                        @foreach($families as $family)
                        <li class="list-group-item" data-slug="{{ $family->slug }}">{{ $family->name }}</li>
                        @endforeach
                    </ul>
                    <h4>Saisons</h4>
                    <ul id="season-selector" class="list-group">
                        @foreach($seasons as $season)
                        <li class="list-group-item" data-year="{{ $season->year }}">{{ $season->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card">
                    <div class="card-body">
                        <h4>Vélos</h4>
                        <div class="row">
                            @foreach($products as $product)
                        <div class="product col-12 col-md-6 col-lg-4 col-xl-3 s-{{ $product->season->year }} f-{{ $product->family->slug }}">
                                <img src="{{ asset('img/default_product.jpg') }}" alt="" width="100%">
                                <h5>{{ $product->reference }}<br />{{ $product->name }}</h5>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection