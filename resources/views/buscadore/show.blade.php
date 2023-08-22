@extends('layouts.app')
@section('contenido')
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex align-items-center justify-content-center" style="height: 50vh">
                    <h1 class="h1Blogs" style="text-transform: inherit">Blogs relacionados al Tag: #{{ $tag->nombre }}</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="container">
        <div class="row mb-5 mt-5">
            <div class="col-lg-10">
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6 blog-container">
                            <div class="card card-new mx-auto" style="width: 18rem;">
                                <a href="{{ route('muestrame', ['id' => $blog->id, 'slug' => $blog->slug]) }}">
                                    <div class="img-container">
                                        <img class="card-img-top" src="{{ $blog->img }}" alt="{{ $blog->nombre }}"
                                            loading="lazy">
                                    </div>
                                </a>
                                <div class="card-body text-center">
                                    <h5 class="card-title nombreBlog">{{ $blog->nombre }}</h5>
                                    <p class="date"><i class="fa fa-calendar datei"></i>
                                        {{ $blog->updated_at->format('d, F - Y') }}
                                    </p>
                                    <p class="text-card text-justify mb-4">{{ $blog->descripcion }}</p>
                                    <a href="{{ route('muestrame', ['slug' => $blog->slug]) }}" class="boton-card">
                                        Más detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-2 moreTags">
                <h2>Mais Tags: </h2>
                @foreach ($tags as $item)
                    <a href="{{ route('tag', $item->slug) }}">{{ $item->nombre }}</a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
