@extends('layouts.app')
@section('titulo', $blog->nombre)
@section('metas')
    <meta name="keywords" content="{{ $blog->keywords }}" />
    <meta name="description" content="{{ $blog->descripcion }}">
    <link rel="canonical" href="{{ request()->fullUrl() }}" />
    <meta property="og:image" content="{{ $blog->img }}" />
    <meta property="og:image:secure_url" content="{{ $blog->img }}" />
    <meta property="og:title" content="{{ $blog->nombre }}" />
    <meta property="og:description" content="{{ $blog->descripcion }}" />
    <meta property="og:locale" content="es" />
    <meta property="og:url" content="{{ request()->fullUrl() }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="robots" content="index,follow" />
@endsection
@section('contenido')
    @if (auth()->check())
        <a href="{{ route('djm.edit', $blog->id) }}" class="loggeado" target="_blank">Editar Blog</a>
    @endif
    <div class="blog-head"
        style="background-image: linear-gradient(to right, rgb(0 0 0 / 12%), rgb(0 0 0 / 22%)), url('{{ asset($blog->img) }}');">
        <div class="container texTours d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>{{ $blog->nombre }}</h1>
                    <div style="text-align: center;">
                        <hr style="width: 60px; border: none; border-top: 3px solid #fe5c24;">
                    </div>
                    <p class="date"><i class="fa fa-calendar datei"></i>
                        {{ $blog->updated_at->format('d, F - Y') }}
                    </p>
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
                    <a href="">Blog</a>
                    <span>⮞</span>
                    <span class="nombre">{{ $blog->nombre }}</span>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">

                <div class="col-lg-9 ingrid">
                    <div class="row">
                        <div class="col-lg-12 text-justify">
                            {!! $blog->cuerpo !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 suscribe">
                    <div class="card">
                        <h4>Pesquisar blog:</h4>
                        <form action="{{ route('blogsearch') }}" method="get">
                            @csrf
                            <div class="form-row">
                                <div class="form-outline">
                                    <input type="text" id="name" name="name" class="form-control form-control-sm"
                                        placeholder="Escreva tema..." required>
                                </div>
                                <input type="submit" id="buscar" class="search" value="Buscar">
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <h4>Postagens recentes:</h4>
                        @foreach ($djmblogs as $blog)
                            <a href="{{ route('muestrame', ['slug' => $blog->slug]) }}">
                                <div class="row thumb">
                                    <div class="col-4">
                                        <img src="{{ $blog->imgThumb }}" alt="{{ $blog->nombre }}" loading="lazy">
                                    </div>
                                    <div class="col-8 d-flex align-items-center">
                                        <h5 style="font-size: 14px; font-weight: bold;">{{ $blog->nombre }}</h5>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="card">
                        <h4>Tours:</h4>
                        <div class="toursBlog">
                            @foreach ($tours->take(4) as $tour)
                                <a href="{{ route('tours.show', ['slug' => $tour->slug]) }}">
                                    <i class="icon-arrow-right"></i>· {{ $tour->nombre }}
                                    <span>→ {{ $tour->dias }} días</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="card">
                        <div class="tagsDiv">
                            <h4>Tags do blog:</h4>
                            @foreach ($blog->categorias as $categoria)
                                <a href="{{ route('tag', $categoria->slug) }}"> #{{ $categoria->nombre }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
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
                <a href="https://wa.me/?text={{ request()->fullUrl() }}" target="_blank" rel="noopener" class="btn-social">
                    <i class="fa fa-whatsapp"></i>
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ request()->fullUrl() }}" target="_blank"
                    rel="noopener" class="btn-social">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a href="https://www.pinterest.com/pin/create/button/?url={{ request()->fullUrl() }}&description={{ urlencode($blog->descripcion) }}"
                    target="_blank" rel="noopener" class="btn-social">
                    <i class="fa fa-pinterest"></i>
                </a>
            </div>
        </div>
        <div class="container-fluid bannerindex d-flex mt-5 justify-content-center align-items-center">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4>Reserva Trilha Salkantay <span class="subrayado"> 2023</span></h4>
                    <a href="">Reservar</a>
                </div>
            </div>
        </div>
    </section>
@endsection
