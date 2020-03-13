@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Vues Eclatées</h1>
        </div>
    </div>
    <div class="row">
        @foreach($brands as $b)
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('front.explodedviews.brand', $b) }}"><img src="{{ $b->getFirstMediaUrl('logos') }}" alt="" width="100%"></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
       @foreach($products as $p)
       <div class="col-lg-3">
        <a href="{{ route('front.explodedviews.show', $p) }}">
           <div class="card">
               <div class="card-body">
                <h3>{{ $p->name }}</h3>
                <img src="{{ $p->getFirstMediaUrl('photos') }}" alt="" width="100%">
                <a class="fav-ev btn btn-xs {{$p->isFavorited() ? 'btn-danger' : 'btn-light'}}" data-ev="{{ $p->id }}" href="#"><i class="mdi mdi-heart mdi-12px"></i></a>
               </div>
           </div>
        </a>
       </div>
       @endforeach
    </div>
</div>


@endsection