@extends('layouts.app')

@section('contenido')
    <div class="peru">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 250px;color:#fff">
                        Passeios pelo Peru
                    </h1>
                    <p style="color: #fff" class="text-center">
                        Esta é uma lista de todos os nossos passeios que percorrem o Peru
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 pt-5 pb-4">
                    <h2>Lista de passeios pelo Peru:</h2>
                </div>
                <!-----Fin orueba--->
                @foreach ($tours as $tour)
                    @if ($tour->categoria=='hikes')
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-new" style="width: 18rem;">
                            <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}">
                                <div class="img-container">
                                    <img class="card-img-top" src="../img/buscador/{{ $tour->img }}" alt="Camino Inca 4 dias"
                                    loading="lazy">
                                </div>
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $tour->nombre }}</h5>
                                <p class="text-card">{{ $tour->descripcion }}</p>
                                <div class="row iconos-tours">
                                    <div class="col-4" style="float: left">
                                        <span class="icon-clock-o"> {{ $tour->dias }} días</span>
                                    </div>
                                    <div class="col-4" style="float:right">
                                        <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                    </div>
                                    <div class="col-4" style="float:right">
                                        <span class="icon-usd"><strong>{{ $tour->precio }}</strong></span>
                                    </div>

                                </div>
                                <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}"
                                    class="boton-card">Más Info</a>

                            </div>
                        </div>
                    </div>
                        
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
