@extends('layouts.app')

@section('contenido')
    <div class="trilhas">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 destinosh1">
                    <h1>
                        Pacotes da Trilha Inca
                    </h1>
                    <p>
                        Esta é a nossa lista de passeios que incluem a Trilha Inca
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 pt-5 pb-4">
                    <h2>Lista de passeios Trilha Inca:</h2>
                </div>
                <!-----Fin orueba--->
                @foreach ($tours as $tour)
                    @foreach ($tour->categorias as $categoria)
                        @if ($categoria->nombre === 'Trilha Inca')
                            <div class="col-lg-4 col-md-6 img-container mb-4">
                                <div class="card card-new">
                                    <a href="{{ route('tours.show', ['slug' => $tour->slug]) }}">
                                        <div class="">
                                            <img class="card-img-top" src="../img/buscador/{{ $tour->img }}"
                                                alt="Camino Inca 4 dias" loading="lazy">
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
                                        <a href="{{ route('tours.show', ['slug' => $tour->slug]) }}" class="btn2">Más
                                            Info</a>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
@endsection
