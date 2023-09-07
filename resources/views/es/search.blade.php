@extends('layouts.app')
@section('contenido')
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 destinosh1">
                    <h1>Resultados da sua pesquisa</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <h3 class="mt-5 mb-4">{{ $numCoincidencias }} coincidencias encontradas:</h3>
            </div>
            @foreach ($tours as $tour)
                <div class="col-lg-4 col-md-6 img-container">
                    <div class="card card-new">
                        <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}">
                            <div class="">
                                <img class="card-img-top" src="../img/buscador/{{ $tour->img }}" alt="Camino Inca 4 dias"
                                    loading="lazy">
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $tour->nombre }}</h5>
                            <p class="text-card">{{ $tour->descripcion }}</p>
                            <div class="row iconos-tours">
                                <div class="col-4" style="float: left">
                                    <span class="fa fa-clock-o"></span> {{ $tour->dias }} días
                                </div>
                                <div class="col-4" style="float:right">
                                    <span class="fa fa-map-marker"></span> {{ $tour->ubicacion }}
                                </div>
                                <div class="col-4" style="float:right">
                                    <span class="fa fa-usd"></span> <strong>{{ $tour->precio }}</strong>
                                </div>
                            </div>
                            <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}"
                                class="btn2">Más
                                Info</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
