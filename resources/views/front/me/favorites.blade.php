@extends('layouts.front')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h1 class="page-title">Mes Favoris</h1>
            </div>
        </div>
    </div>
    <div class="row">
        @if((count($favorite_masterclasses) == 0) && (count($favorite_products) == 0) && (count($favorite_documents) == 0) && (count($favorite_videos) == 0))

        <div class="col-12">
            <div class="alert alert-primary-full">Vous n'avez aucun favoris.</div>
        </div>
        @else
        @if(count($favorite_masterclasses)> 0)
        <div class="col-12">
            aeagaegae
        </div>
        @endif
        @if(count($favorite_products) > 0)
        <div class="col-12">

        <div id="favorite-products-grid">
                <div class="grid-sizer col-lg-2"></div>
                @foreach($favorite_products as $p)
                    <div class="col-lg-2 grid-item">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $p->name }}</h5>
                                <img src="{{ $p->getFirstMediaUrl('photos') }}" alt="" width="100%">
                                <a class="btn btn-light remfav-ev" data-ev="{{ $p->id }}" ><i class="mdi mdi-close"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
        @if(count($favorite_documents)> 0)
        <div class="col-12">
aaegeaae
        </div>
        @endif
        @endif
    </div>
@endsection