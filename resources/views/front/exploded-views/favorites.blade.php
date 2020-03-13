@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Vues Eclatées Favorites</h1>
        </div>
    </div>
    <div class="row">
       @foreach($favorite_products as $p)
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