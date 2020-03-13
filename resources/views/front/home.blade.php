@extends("layouts.front")
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Tableau de bord</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12"><h3>Mes favoris</h3></div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h3>Formations</h3>
                    {{ Auth::user()->favorite(App\Models\Masterclass::class) }}
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h3>Vues Eclatées</h3>
                    {{ Auth::user()->favorite(App\Models\Product::class) }}
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h3>Vidéos</h3>
                    @foreach(Auth::user()->favorite(App\Models\Video::class) as $fav_video)
                    <li>{{ $fav_video->title }}</li>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <a href="{{ route('favorites') }}" class="btn btn-info">Gérer mes favoris</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Nouvelles formations disponibles</h3>
                    @foreach($masterclasses as $mc)
                    <li>{{ $mc->title }}</li>
                    @endforeach
                    <hr>
                    <a href="{{ route('front.masterclasses.index') }}" class="btn btn-sm btn-info">Toutes les formations</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Mes inscription aux formations</h3>
                    @foreach(Auth::user()->records as $record)
                    <div>
                        <h6><a href="{{ route('front.masterclasses.show', $record->masterclass) }}">{{ $record->masterclass->title }}</a></h6>
                        <ul>
                            @foreach($record->attendees as $attendee)
                            <li>{{ $attendee->firstname }} {{ $attendee->lastname }} - {{ $attendee->email }} {{ $attendee->phone }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Derniers documents techniques</h3>
                    @if(count($last_documents) > 0)
                    <ul class="list-group">
                        @foreach($last_documents as $doc)
                        <li class="list-group-item">{{ $doc->title }} <small class="float-right">{{ $doc->type->name }} | {{ $doc->brand->name }}</small></li>
                        @endforeach
                    </ul>
                    @else
                    <div class="alert alert-purple">Aucun document technique ajouté récemment.</div>
                    @endif
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Dernières vidéos ajoutées</h3>
                    @foreach($videos as $v)
                    <li>{{ $v->title }}</li>
                    @endforeach
                    <hr>
                    <a href="{{ route('front.videos.index') }}" class="btn btn-sm btn-info">Toutes les vidéos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection