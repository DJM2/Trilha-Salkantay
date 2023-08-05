@extends('layouts.app')
@section('contenido')
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 30vh;color:#fff">Resultados da sua pesquisa</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-5">
            <h3 class="mt-5">{{ $numCoincidencias }} coincidencias encontradas:</h3>
            @foreach ($respuestas as $respuesta)
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new mx-auto" style="width: 18rem;">
                        <a href="{{ route('tours.show', ['id' => $respuesta->id, 'slug' => $respuesta->slug]) }}">
                            <div class="img-container">
                                <img class="card-img-top" src="img/buscador/{{ $respuesta->img }}"
                                    alt="{{ $respuesta->nombre }}" loading="lazy">
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $respuesta->nombre }}</h5>
                            <p class="text-card">{{ $respuesta->descripcion }}</p>
                            <div class="row iconos-tours">
                                <div class="col-4" style="float: left">
                                    <span class="icon-clock-o"> {{ $respuesta->dias }} días</span>
                                </div>
                                <div class="col-4" style="float:right">
                                    <span class="icon-map-marker"> {{ $respuesta->ubicacion }}</span>
                                </div>
                                <div class="col-4" style="float:right">
                                    <span class="icon-usd"><strong>{{ $respuesta->precio }}</strong></span>
                                </div>
                            </div>
                            <a href="{{ route('tours.show', ['slug' => $respuesta->slug]) }}" class="boton-card">Más
                                detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
