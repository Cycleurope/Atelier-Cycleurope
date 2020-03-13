@extends('layouts.app')
@section('content')
@include('partials/notifications-panel')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h1 class="page-title">Editer {{ $product->brand->name }} {{ $product->reference }} {{ $product->name }}</h1>
        </div>
    </div>
</div>
<form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ method_field('PUT') }}
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Fiche d'identité Produit</h3>
                <div class="form-group">
                    <label for="reference">Référence</label>
                    <input type="text" class="form-control" id="reference" name="reference" value="{{ $product->reference }}" required>
                </div>
                <div class="form-group">
                    <label for="brand">Marque</label>
                    <select name="brand" id="brand" class="form-control">
                        @foreach($brands as $b)
                        <option value="{{ $b->id }}" {{ $b->id == $product->brand->id ? 'selected': ''}}>{{ $b->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Désignation</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                </div>
                <hr>
                <div class="form-group">
                    <label for="family">Famille</label>
                    <select name="family" id="family" class="form-control">
                        @foreach($families as $f)
                        <option value="{{ $f->id }}" {{ $f->id == $product->family->id ? 'selected': ''}}>{{ $f->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="season">Saison</label>
                    <select name="season" id="season" class="form-control">
                        @foreach($seasons as $s)
                        <option value="{{ $s->id }}" {{ $s->id == $product->season->id ? 'selected': ''}}>{{ $s->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Photo du produit</h3>
                <div class="form-group">
                    <img src="{{ $product->getFirstMediaUrl('photos')}}" alt="" style="width: 100%">
                    <label for="photo">Visuel Produit</label>
                    <input type="file" name="photo" id="photo" class="form-control">
                </div>
                <form action="">
                    <button type="submit" class="btn btn-sm float-right text-dark"><i class="mdi mdi-file-remove mdi-24px"></i></button>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Fiche Technique</h3>
                <div class="form-group">
                    <a href="{{ $product->getFirstMediaUrl('datasheets')}}" download class="btn btn-rounded btn-sm btn-danger width-sm"><i class="mdi mdi-file-pdf"></i> Télécharger la fiche technique</a>
                    <hr>
                    <label for="datasheet">Fiche Technique</label>
                    <input type="file" name="datasheet" id="datasheet" class="form-control">
                </div>
                <form action="" class="mb-4">
                    <button type="submit" class="btn btn-sm float-right text-dark"><i class="mdi mdi-file-remove mdi-24px"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <button type="submit" name="action" value="save" class="btn btn-success btn-rounded width-lg">Mettre à jour</button>
                <button type="submit" name="action" value="save_and_stay" class="btn btn-purple btn-rounded width-lg">Mettre à jour et Rester sur la fiche</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Vue éclatée</h3>
                <div class="form-group">
                    <label for="">Visuel Vue Eclatée</label>
                    <input type="file" name="explodedview" id="explodedview" class="form-control">
                </div>
                <div class="">
                    <form action="">
                        <button type="submit" class="btn btn-sm btn-secondary float-right"><i class="mdi mdi-file-remove mdi-12px mr-1"></i>Supprimer le visuel</button>
                    </form>
                </div>
                <div>
                    <a href="{{ route('admin.products.parts.import.get', $product->id) }}" class="btn btn-sm btn-purple mb-2">Importer la B.0.M.</a>
                    <a href="{{ route('admin.products.bom.empty', $product) }}" class="btn btn-sm btn-danger mb-2 float-right mr-1">Vider la BOM</a>
                </div>
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th>Référence<br/><small>(reference)</small></th>
                            <th>Désignation<br/><small>(designation)</small></th>
                            <th>Info<br /><small>(info)</small></th>
                            <th class="text-right">Quantité<br /><small>(quantity)</small></th>
                            <th class="text-right">Index<br /><small>(index)</small></th>
                            <th class="text-right">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product->bomitems as $bom)
                        <tr>
                            <th>{{ $bom->part->mmitno }}</th>
                            <td>{{ $bom->part->mmitds }}</td>
                            <td>{{ $bom->info }}</td>
                            <td width="10" class="text-right">{{ $bom->quantity }}</td>
                            <td width="10" class="text-right">{{ $bom->index }}</td>
                            <td width="30" class="text-right"><a href="" class="btn btn-xs btn-purple btn-rounded width-sm">Editer</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <button type="submit" name="action" value="save" class="btn btn-success btn-rounded width-lg">Mettre à jour</button>
                <button type="submit" name="action" value="save_and_stay" class="btn btn-purple btn-rounded width-lg">Mettre à jour et Rester sur la fiche</button>
            </div>
        </div>
    </div>
</div>
</form>
<div class="row">
    <div class="col-12 float-right">
        <form action="{{ route('products.destroy', $product) }}" method="POST">
        @csrf
        {{ method_field('DELETE')}}
        <button type="submit" class="btn btn-danger float-right btn-rounded btn-sm">Supprimer ce produit</button>
        </form>
    </div>
</div>
@endsection