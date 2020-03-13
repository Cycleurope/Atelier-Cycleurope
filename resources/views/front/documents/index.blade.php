@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-4">
            <h1>Documents</h1>
        </div>
    </div>

    <div class="row">
        @foreach($brands as $brand)
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('front.documents.brand', $brand) }}"><img src="{{ $brand->getFirstMediaUrl('logos') }}" alt="" width="100%"></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>


@endsection