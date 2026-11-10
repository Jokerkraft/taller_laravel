@extends('layout.layout')

@section('contenido')
<div class="row g-4 mt-3">
    @if($existenJuegos)
        @foreach($games as $game)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm border-0">
                    @if(!empty($game['img']))
                        <img src="{{ $game['img'] }}" class="card-img-top" alt="{{ $game['name'] }}" style="aspect-ratio: 1 / 1; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $game['name'] }}</h5>
                        <p class="card-text text-muted mb-0">{{ $game['genre'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="col-12">
            <div class="alert alert-warning">No hay juegos disponibles.</div>
        </div>
    @endif
</div>
@endsection