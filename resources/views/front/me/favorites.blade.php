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
                <div class="col-md-4 col-lg-3 col-xl-2 grid-item">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="card-title">
                                        <span class="text-primary">{{ $p->brand->name }}</span><br />{{ $p->name }}
                                        <a class="btn btn-light remfav-ev float-right " data-ev="{{ $p->id }}" ><i class="mdi mdi-close"></i></a>
                                    </h5>
                                </div>
                                <div class="col-lg-12">
                                    <img src="{{ $p->getFirstMediaUrl('photos') }}" alt="" width="100%">
                                </div>
                            </div>
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