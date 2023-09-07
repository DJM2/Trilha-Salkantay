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
                <h3 class="mt-5 mb-5">{{ $numCoincidencias }} coincidencias encontradas:</h3>
            </div>            
            @foreach ($respuestas as $blog)
                <div class="col-lg-3 col-md-6 blog-container">
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
@endsection
