@extends('layouts.app')
@section('titulo', 'Destinos e rotas no Peru, pacotes Peru, visita Peru')
@section('metas')
    <meta name="keywords" content="Lista de destinos, destinos Peru, destinos e rotas no Peru, pacotes Peru, visita Peru" />
    <meta name="description"
        content="Esta é uma lista dos destinos turísticos que o Peru tem que visitar, viaje pelo Peru com a agência de viagens NC Travel Cusco">
    <link rel="canonical" href="{{ request()->fullUrl() }}" />
    <meta property="og:image" content="" />
    <meta property="og:image:secure_url" content="" />
    <meta property="og:title" content="Destinos e rotas no Peru, pacotes Peru, visita Peru" />
    <meta property="og:description"
        content="Esta é uma lista dos destinos turísticos que o Peru tem que visitar, viaje pelo Peru com a agência de viagens NC Travel Cusco" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:url" content="{{ request()->fullUrl() }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="robots" content="index,follow" />
@endsection
@section('contenido')
    <section class="destinosPeru d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner">
                            <h1>Destinos no Peru</h1>
                            <div class="text-center">
                                <span
                                    style="width: 80px; height: 3px; background: #fe5c24; display: block; margin: 0 auto;"></span>
                            </div>
                            <p class="mt-2">Esta é uma lista dos melhores destinos turísticos para visitar o Peru</p>
                            {{-- <a href="#" class="btn_1">Descubra agora</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="topDestinos">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2>Destinos turísticos do Peru:</h2>
                </div>
                @foreach ($destinos as $destino)
                    <div class="col-lg-6 col-md-6">
                        <div class="single_place">
                            <img src="{{ asset('img/destinos/thumb/' . $destino->imgThumb) }}" alt="{{ $destino->nombre }}"
                                loading="lazy">
                                <h3 class="tituloh3">{{$destino->nombre}}</h3>
                            <div class="hover_Text d-flex align-items-end justify-content-between">
                                <div class="hover_text_iner">
                                    <h2>{{ $destino->nombre }}</h2>
                                    <a href="{{ route('destino.show', $destino->slug) }}" class="place_btn">Veja o destino</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
