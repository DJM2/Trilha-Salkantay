@extends('layouts.app')
@section('titulo', $destino->nombre)
@section('metas')
    <meta name="keywords" content="{{ $destino->keywords }}" />
    <meta name="description" content="{{ $destino->descripcion }}">
    <link rel="canonical" href="{{ request()->fullUrl() }}" />
    <meta property="og:image" content="{{ asset('img/destinos/' . $destino->img) }}" />
    <meta property="og:image:secure_url" content="{{ asset('img/destinos/' . $destino->img) }}" />
    <meta property="og:title" content="{{ $destino->nombre }}" />
    <meta property="og:description" content="{{ $destino->descripcion }}" />
    <meta property="og:locale" content="es" />
    <meta property="og:url" content="{{ request()->fullUrl() }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="robots" content="index,follow" />
@endsection
@section('contenido')
    <div class="blog-head"
        style="background-image: linear-gradient(to right, rgb(0 0 0 / 12%), rgb(0 0 0 / 22%)), url('{{ asset('img/destinos/' . $destino->img) }}');">
        <div class="container texTours d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>{{ $destino->nombre }}</h1>
                    <div style="text-align: center;">
                        <hr style="width: 60px; border: none; border-top: 3px solid #fe5c24;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-12">
                    <div style="text-align: justify" class="contenidoDestinos">
                        {!! $destino->descripcion !!}
                    </div>
                    <div class="share mt-4">
                        <h3 class="mb-4">Compartir: </h3>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}" target="_blank"
                            rel="nofollow noopener noreferrer" target="_blank" rel="noopener nofollow" class="btn-social">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}" target="_blank"
                            rel="nofollow noopener noreferrer" target="_blank" rel="noopener" class="btn-social">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="https://wa.me/?text={{ request()->fullUrl() }}" target="_blank" rel="noopener"
                            class="btn-social">
                            <i class="fa fa-whatsapp"></i>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ request()->fullUrl() }}"
                            target="_blank" rel="noopener" class="btn-social">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="https://www.pinterest.com/pin/create/button/?url={{ request()->fullUrl() }}"
                            target="_blank" rel="noopener" class="btn-social">
                            <i class="fa fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-4 mt-4">Passeios em {{$destino->nombre}}</h2>
                </div>
                @foreach ($toursRelacionados as $tour)
                    @php
                        $ubicaciones = preg_split('/\s*-\s*/', strtolower($tour->ubicacion));
                        $nombreDestino = strtolower($destino->nombre);
                    @endphp
                    @foreach ($ubicaciones as $ubicacion)
                        @if (trim($ubicacion) === $nombreDestino)
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
