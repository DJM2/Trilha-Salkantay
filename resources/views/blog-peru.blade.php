@extends('layouts.app')

@section('content')
    @include('layouts.menu-castellano')
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 250px;color:#fff">Temas de Blogs de Perú</h1>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="details">
                        <div class="location">
                            <p><a href="{{ route('inicio') }}">Inicio</a> / <a>Blog</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="blogs santaRosa">
                    <div class="black">
                        <h2>Santa Rosa de Lima</h2>
                        <div class="fecha"><i class="icon-calendar"></i><span> 17/09/2022</span></div>
                        <p>La vida completa de Santa Rosa de Lima y su canonización
                        </p>
                        <a href="{{ route('santa-rosa-de-lima-es') }}">Leer artículo</a>
                    </div>
                </div>
                <div class="blogs fiestasPatrias">
                    <div class="black">
                        <h2>Fiestas patrias en Perú</h2>
                        <div class="fecha"><i class="icon-calendar"></i><span> 17/09/2022</span></div>
                        <p>Cada 28 de julio se celebra la emancipación de Perú </p>
                        <a href="{{ route('fiestas-patrias-peru') }}">Leer artículo</a>
                    </div>
                </div>
                <div class="blogs playas">
                    <div class="black">
                        <h2>Las mejores playas de Perú</h2>
                        <div class="fecha"><i class="icon-calendar"></i><span> 17/09/2022</span></div>
                        <p>Tras una rigurosa busqueda, tenemos una lista de las mejores playas que Perú ofrece
                        </p>
                        <a href="{{ route('las-mejores-playas-peru') }}">Leer artículo</a>
                    </div>
                </div>
                <div class="blogs mistura">
                    <div class="black">
                        <h2>Mistura</h2>
                        <div class="fecha"><i class="icon-calendar"></i><span> 17/09/2022</span></div>
                        <p>La feria gastronómica más grande Perú
                        </p>
                        <a href="{{ route('mistura-es') }}">Leer artículo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div style="padding-bottom: 5em"></div>
@endsection
