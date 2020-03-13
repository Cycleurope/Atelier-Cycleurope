@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-4">
        <h1>Documents {{ $brand->name }}</h1>
        </div>
    </div>
    <div class="row">
        @foreach($doctypes as $doctype)
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h3>{{ $doctype->name }}</h3>
                    <ul class="list-group">
                    @foreach($doctype->documents()->withBrand($brand->id) as $doc)
                        <li class="list-group-item list-group-item-sm">
                            <small><a href="{{ $doc->getFirstMediaUrl('documents') }}" download>{{ $doc->title }}</a></small>
                        </li>
                    @endforeach
                    </ul>

                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>


@endsection