@extends('layouts.app')
@section('contenido')
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 30vh;color:#fff">Blogs relacionados al Tag: {{ $tag->nombre }}</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <h2>Blogs relacionados al Tag: #{{ $tag->nombre }}</h2>
            </div>

            @foreach ($blogs as $blog)
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new mx-auto" style="width: 18rem;">
                        <a href="{{ route('muestrame', $blog->slug) }}">
                            <div class="img-container">
                                <img class="card-img-top" src="{{ $blog->img }}" alt="{{ $blog->nombre }}"
                                    loading="lazy">
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $blog->nombre }}</h5>
                            <p class="text-card">{{ $blog->descripcion }}</p>
                            <div class="tagsDiv">
                                @foreach ($blog->categorias as $tag)
                                    <a href="{{ route('tag', $tag->slug) }}">#{{ $tag->nombre }}</a>
                                @endforeach
                            </div>
                            <a href="{{ route('muestrame', $blog->slug) }}" class="boton-card">Más
                                detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection
