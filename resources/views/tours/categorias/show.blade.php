@extends('layouts.app')
@section('titulo', $categoria->nombre)
@section('metas')
    <meta name="keywords" content="{{ $categoria->keywords }}" />
    <meta name="description" content="{{ $categoria->descripcion }}">
    <link rel="canonical" href="{{ request()->fullUrl() }}" />
    <meta property="og:image" content="{{ $categoria->img }}" />
    <meta property="og:image:secure_url" content="{{ $categoria->img }}" />
    <meta property="og:title" content="{{ $categoria->nombre }}" />
    <meta property="og:description" content="{{ $categoria->descripcion }}" />
    <meta property="og:locale" content="es" />
    <meta property="og:url" content="{{ request()->fullUrl() }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="robots" content="index,follow" />
@endsection
@section('contenido')
    <div class="blog-head"
        style="background-image: linear-gradient(to right, rgb(0 0 0 / 12%), rgb(0 0 0 / 22%)), url('{{ asset('img/panoramico/Sacsayhuaman-Cusco-pacote-peru.webp') }}');">
        <div class="container texTours d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>{{ $categoria->nombre }}</h1>
                    <div style="text-align: center;">
                        <hr style="width: 60px; border: none; border-top: 3px solid #fe5c24;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container text-center mt-4">
            <div class="col-lg-12">
                <div class="migas">
                    <a href="{{ route('index') }}">Home</a>
                    <span>⮞</span>                    
                    <span class="nombre">{{ $categoria->nombre }}</span>
                </div>
            </div>
        </div>

        <section class="container">
            <div class="row mb-5 mt-5">
                <div class="col-lg-10">
                    <div class="row"> 
                        @foreach ($relacionados as $tour)
                            <div class="col-lg-4 col-md-6 blog-container">
                                <div class="card card-new mx-auto" style="width: 18rem;">
                                    <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}">
                                        <div class="img-container">
                                            <img class="card-img-top" src="{{asset('img/buscador/' . $tour->img )}}" alt="{{ $tour->nombre }}"
                                                loading="lazy">
                                        </div>
                                    </a>
                                    <div class="card-body text-center">
                                        <h5 class="card-title nombreBlog">{{ $tour->nombre }}</h5>
                                        <p class="date"><i class="fa fa-calendar datei"></i>
                                            {{ $tour->updated_at->format('d, F - Y') }}
                                        </p>
                                        <p class="text-card text-justify mb-4">{{ $tour->descripcion }}</p>
                                        <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}" class="boton-card">
                                            Más detalles
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-2 moreTags">
                    <h2>Mais categorias: </h2>
                    @foreach ($categorias as $item)
                        <a href="{{ route('categoria.show', $item->slug) }}">{{ $item->nombre }}</a>
                    @endforeach
                </div>
            </div>
        </section>
    </section>
@endsection
