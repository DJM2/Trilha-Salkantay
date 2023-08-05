@extends('layouts.app')
@section('metas')
    <meta name="title"
        content="Preguntas frecuentes para viajar a Perú, Conoce las preguntas más frecuentes antes de viajar a Perú." />
    <meta name="keywords"
        content="preguntas frecuentes para viajar a Perú, preguntas frecuentes peru, precio de dolar en peru, como viajar por peru, viajar por peru, que debes saber para viajar a perú" />
    <meta rel="canonical" content="{{ request()->fullUrl() }}">

    <meta name="og_image" content="{{ asset('img/machu-picchu-travel.webp') }}" />
    <meta name="og_secureImage" content="{{ asset('img/pacha-mama-spirit-logo.png') }}" />

    <meta property="og:title"
        content="Sobre la agencia de viajes Pacha Mama Spirit, viajes a Perú, reserva tu viaje a Perú" />
    <meta property="og:description"
        content="Preguntas frecuentes para viajar a Perú, Conoce las preguntas más frecuentes antes de viajar a Perú." />
    <meta property="og:locale" content="es" />
    <meta property="og:url" content="{{ request()->fullUrl() }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="robots" content="index,follow" />
@endsection
@section('content')
    @include('layouts.menu')
    <div class="preguntas">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 250px;color:#fff">Preguntas frecuentes antes de viajar a Perú</h1>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container" id="pachamama">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h1 class="h1-index">
                        <beige>Lo que necesitas saber antes de viajar a Perú</beige>
                    </h1>
                    <h2>1- ¿Es necesario hablar español para viajar por Perú?</h2>
                    <p>
                        En Perú el idioma oficial es el español y lo habla el 82% de la población y solo el 5% habla
                        español-inglés. Si Ud. visita Perú por su cuenta es indispensable que tenga al menos una base en
                        español, ya que lo necesitara para poder viajar y moverse dentro del país, pero si Ud. viaja con una
                        agencia de viajes, lo mas probable es que no tenga problemas con no saber hablar español ya que
                        durante todo su recorrido estará rodeado de personas que hablan el inglés. Las agencias de viaje
                        también otorgan en sus tours guías exclusivos que sepan hablar el idioma que el pasajero requiera,
                        los idiomas mas comunes son: inglés, francés, chino, alemán e italiano.
                    </p>
                    <h2>2- ¿Qué tan seguro es viajar por Perú?</h2>
                    <p>
                        Perú es un país tranquilo y sereno con respecto a la delincuencia en sus zonas turísticas, se
                        recomienda a los visitantes conocer siempre la ciudad a la que viajan o ayudarse con una aplicación
                        que le ayude a ubicarse bien, no transitar por zonas muy alejadas o desoladas, ya que existen como
                        en todo país zonas de riesgo delictivo. Igualmente te aconsejamos mostrarse discreto y no cargar
                        muchas sumas de dinero cuando se va por la calle. Tener a la mano el número de emergencia de la
                        policía turística o policía local. Y lo más seguro es viajar con agente de viaje que te guie todo el
                        tiempo de su visita.
                    </p>
                    <h2>3- ¿Es caro viajar a Perú?</h2>
                    <p>
                        Perú ofrece mucha variedad con respecto a lo económico para los viajeros, en general Perú tiene
                        productos muy económicos para ofrecer si sabes donde buscar
                    </p>
                </div>

                <div class="space"></div>
                <div class="space"></div>
            </div>
        </div>
    </section>
@endsection
