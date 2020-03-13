@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-4">
            <h1>Documents favoris</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    @if(count($favorite_documents) == 0)
                    <div class="alert alert-primary-full">Aucun document dans vos favoris.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>


@endsection