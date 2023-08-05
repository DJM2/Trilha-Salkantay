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
                        <a href="{{ route('muestrame', $respuesta->slug) }}">
                            <div class="img-container">
                                <img class="card-img-top" src="{{ $respuesta->img }}" alt="{{ $respuesta->nombre }}"
                                    loading="lazy">
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $respuesta->nombre }}</h5>
                            <p class="text-card">{{ $respuesta->descripcion }}</p>
                            <div class="tagsDiv">
                                @foreach ($respuesta->categorias as $categoria)
                                    <a href="{{ route('tag', $categoria->slug) }}"> #{{ $categoria->nombre }}</a>
                                @endforeach
                            </div>
                            <a href="{{ route('muestrame', $respuesta->slug) }}" class="boton-card">Más
                                detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
