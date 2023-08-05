@extends('layouts.app')

@section('content')
    @include('layouts.menu-castellano')
    <div class="hero">
        <!------- formulario---------->
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="form-index">
                        <div class="contenidoindex">
                            <h1 style="color: #fff" class="text-center">Descubre los lugares mas impresionantes que tiene Perú
                            </h1>
                            <p style="color: #fff" class="text-center">Walks, gastronomy, archaeological sites, nature
                                reserves, customs, traditions, landscapes and much more...
                            </p>
                            <a href="{{ route('caminata') }}">Caminatas</a>
                            <a href="{{ route('luxury') }}">Lujo</a>
                            <a href="{{ route('mapi') }}">Machu Picchu</a>
                            <a href="{{ route('peru') }}">Alrededor de Perú</a>
                        </div>
                        <a href="#pachamama">
                            <div class="circulo">
                                <i class="icon-chevron-down desvanecer"></i>
                                <i class="icon-chevron-down"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--------Fin formulario ---------->
    </div>
    <section>
        <div class="container" id="pachamama">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h1 class="h1-index">
                        <beige>Pacha Mama Spirit</beige>
                    </h1>
                    <p>
                        <strong>Pacha Mama Spirit</strong> es una agencia de viajes peruana y nacida en Cusco, que se le
                        conoce como el ombligo del mundo, antigua capital del imperio Inca.
                        Nuestro equipo ha desarrollado una lista de tours que permite al visitante disfrutar lo mejor que
                        Perú tiene para ofrecer como aventura, cultura, caminatas, historia, gastronomia, exclusividad y un
                        equipo de Pacha Mama Spirit, que ama Perú y todo lo que nos brinda.
                        Perú tiene una de las biodiversidades más ricas en el mundo, esto gracias a la
                        coordillera
                        de los andes, que atraviesa el país formando costa, sierra y selva en su camino, y con cada region
                        natural trae consigo otra considerable cantidad de microclimas. Esto convierte a Perú en un país
                        rico en diversidad de productos naturales, paisajes únicos, y una extensa gastronomia entre
                        otros.<br><br>
                        Perú tambien fué la cede principal del <strong>Tahuantinsuyo</strong>, que fue erigido por
                        los <strong>Incas</strong>, la cultura más desarrollada y grande
                        de suramerica. Estos hombres edificaron fortalezas hechas de piedras gigantescas, que han perdurado
                        en el tiempo y
                        hoy forman parte de la actualidad, conservando su grandeza. Perú de esta manera se convierte en un
                        país que tiene mucho que ofrecer a sus
                        visitantes.
                    </p>
                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Top tours mas vendidos:</h2>
                </div>

                <!-----Prueba--->
                @foreach ($tours as $tour)
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-new" style="width: 18rem;">
                            <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}">
                                <img class="card-img-top" src="img/buscador/{{ $tour->img }}" alt="Camino Inca 4 dias"
                                    loading="lazy">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $tour->nombre }}</h5>
                                <p class="text-card">{{ $tour->descripcion }}</p>
                                <div class="enlacesCategoria">
                                    @if (Str::contains($tour->categoria, 'machupicchu'))
                                        <p style="display:none">
                                            {{ $mapi = 'Machu Picchu' }}
                                        </p>
                                        <a class="enlaceMapi" href="{{ route('mapi') }}">{{ $mapi }}
                                        </a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'hikes'))
                                        <p style="display:none">
                                            {{ $hike = 'Caminata' }}
                                        </p>
                                        <a class="enlaceHike" href="{{ route('caminata') }}">
                                            {{ $hike }}</a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'around'))
                                        <p style="display: none">
                                            {{ $peru = 'Perú' }}
                                        </p>
                                        <a class="enlaceAround" href="{{ route('peru') }}">
                                            {{ $peru }}
                                        </a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'luxury'))
                                        <p style="display:none">
                                            {{ $luxury = 'Privado' }}
                                        </p>
                                        <a class="enlaceLuxury" href="{{ route('luxury') }}"> {{ $luxury }}</a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'fullday'))
                                        <p style="display:none">
                                            {{ $fullday = 'Full Day' }}
                                        </p>
                                        <a class="enlaceFullday" href="{{ route('fullday') }}"> {{ $fullday }}</a>
                                    @endif
                                </div>

                                <div class="row iconos-tours">
                                    <div class="col-4" style="float: left">
                                        <span class="icon-clock-o"> {{ $tour->dias }}días</span>
                                    </div>
                                    <div class="col-4" style="float:right">
                                        <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                    </div>
                                    <div class="col-4" style="float:right">
                                        <span class="icon-usd"><strong>{{ $tour->precio }}</strong></span>
                                    </div>
                                </div>
                                <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}"
                                    class="boton-card">Más detalles</a>

                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="space"></div>
            </div>
        </div>
    </section>
    <!-----Prueba full img------>
    <div class="full-img">
        <div class="full-img-card uno">
            <div class="oscuro">
                <h5>Caminatas</h5>
                <p>Excursiones con caminatas por Perú</p>
                <a href="{{ route('hikes') }}">Ver Tours</a>
            </div>
        </div>
        <div class="full-img-card dos">
            <div class="oscuro">
                <h5>Machu Picchu</h5>
                <p>Tours en Machu Pïcchu</p>
                <a href="{{ route('mapi') }}">Ver Tours</a>
            </div>
        </div>
        <div class="full-img-card tres">
            <div class="oscuro">
                <h5>Perú</h5>
                <p>Tours para conocer Perú</p>
                <a href="{{ route('around') }}">Ver Tours</a>
            </div>
        </div>
        <div class="full-img-card cuatro">
            <div class="oscuro">
                <h5>Mountain Lodge</h5>
                <p>Pacha Mama Spirit Lodge</p>
                <a href="{{ route('lodges') }}">Ver Tours</a>
            </div>
        </div>
    </div>
    <!------Fin Full img---------->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Perú Aventura:</h2>
                    <p>
                        Pacha Mama Spirit es una agencia de viajes con bastante experiencia en viajes de aventura y
                        caminatas por las principales rutas turisticas que Perú tiene para ofrecer. Ya que los viajeros se
                        mueven a menudo a pie por las zonas rurales, el senderismo les brinda una vista de cerca de paisajes
                        increíbles durante su recorrido. El Camino Inca, que lleva a Machu Picchu, es una de las mejores
                        caminatas que existe en Suraemrica y debe ser una de tus opciones principales de senderismo.
                    </p>
                </div>
                <div class="space"></div>
                @foreach ($tours as $tour)
                    @if (Str::contains($tour->categoria, 'hikes'))
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-new" style="width: 18rem;">
                                <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}">
                                    <img class="card-img-top" src="img/buscador/{{ $tour->img }}"
                                        alt="Camino Inca 4 dias" loading="lazy">
                                </a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $tour->nombre }}</h5>
                                    <p class="text-card">{{ $tour->descripcion }}</p>
                                    <div class="enlacesCategoria">
                                        @if (Str::contains($tour->categoria, 'machupicchu'))
                                            <p style="display:none">
                                                {{ $mapi = 'Machu Picchu' }}
                                            </p>
                                            <a class="enlaceMapi" href="{{ route('mapi') }}">{{ $mapi }}
                                            </a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'hikes'))
                                            <p style="display:none">
                                                {{ $hike = 'Caminata' }}
                                            </p>
                                            <a class="enlaceHike" href="{{ route('caminata') }}">
                                                {{ $hike }}</a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'around'))
                                            <p style="display: none">
                                                {{ $peru = 'Perú' }}
                                            </p>
                                            <a class="enlaceAround" href="{{ route('peru') }}">
                                                {{ $peru }}
                                            </a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'luxury'))
                                            <p style="display:none">
                                                {{ $luxury = 'Privado' }}
                                            </p>
                                            <a class="enlaceLuxury" href="{{ route('luxury') }}">
                                                {{ $luxury }}</a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'fullday'))
                                            <p style="display:none">
                                                {{ $fullday = 'Full Day' }}
                                            </p>
                                            <a class="enlaceFullday" href="{{ route('fullday') }}">
                                                {{ $fullday }}</a>
                                        @endif
                                    </div>

                                    <div class="row iconos-tours">
                                        <div class="col-4" style="float: left">
                                            <span class="icon-clock-o"> {{ $tour->dias }}días</span>
                                        </div>
                                        <div class="col-4" style="float:right">
                                            <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                        </div>
                                        <div class="col-4" style="float:right">
                                            <span class="icon-usd"><strong>{{ $tour->precio }}</strong></span>
                                        </div>
                                    </div>
                                    <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}"
                                        class="boton-card">Más detalles</a>

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="space"></div>
            </div>
        </div>
    </section>
    {{-- @include('layouts.banner-es') --}}
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="space"></div>
                <div class="space"></div>
            </div>
        </div>
    </section>{{-- 
    @include('layouts.foot-castellano') --}}
@endsection
