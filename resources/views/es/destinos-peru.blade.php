@extends('layouts.app')

@section('content')
    @include('layouts.menu-castellano')
    <div class="blog-temas">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">Encuentra destinos para conocer Perú</h1>
            </div>
        </div>
    </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <br><br>
                    <h2>Perú como destino turístico</h2>
                    <i>Perú. País de tradiciones. País mestizo. País fuerte</i><br><br>
                    <p>
                        El turismo en el <a target="_blanck" rel="no-follow" class="enlaces-tours" href="">Perú</a> está
                        dirigida hacia los monumentos arqueológicos, pues cuenta con más de
                        cien mil sitios de interés, el ecoturismo en la Amazonía peruana, el turismo cultural en las
                        ciudades coloniales, turismo gastronómico, turismo de aventura y turismo de playa.<br><br>

                        De acuerdo con un estudio del gobierno peruano, el índice de satisfacción de los turistas
                        después de visitar el Perú es del 94%. Es la industria de más rápido crecimiento en el Perú
                    </p>
                    <h3>¿Quieres saber por qué visitar Perú?</h3>
                    <p>
                        La respuesta es sencilla y compleja, como el Perú mismo. Visitar Perú es ponerte en contacto con
                        una cultura asombrosa, con gente capaz de mostrarte lo mejor de sí misma en cualquier
                        circunstancia, con paisajes que generan emociones, con emociones que no se olvidan nunca. Perú
                        es rico porque su riqueza no está puesta en cosas materiales, sino que se halla en la sonrisa de
                        un niño cusqueño, en la punta de un tenedor, en tus pies sobre la arena, en el roce de unas
                        hojas en la selva, en la brisa al llegar a la cima de esa montaña, en el calor sobre tu rostro
                        cuando el sol te da de frente.
                    </p>
                    <h2>Información y asistencia al turista</h2>
                    <p>
                        Perú cuenta con un servicio estatal, gratuito que trabaja los 7 días de la semana durante todo
                        el
                        año, llamado <a target="_blanck" rel="no-follow" class="enlaces-tours"
                            href="https://www.peru.travel/es/datos-utiles/iperu">
                            Iperú,</a> Información y Asistencia al Turista. Este servicio es de gran ayuda para el
                        viajero nacional o extranjero antes, durante y después de un viaje al Perú. Asimismo, recibe
                        reclamos y sugerencias concernientes a empresas turísticas, atractivos y en general sobre el
                        turismo
                        peruano.
                    </p>
                    <h3>Destinos turísticos más populares en Perú</h3>
                    <p>Este país lleno de encanto y misticismo posee 3 regiones naturales Costa, Sierra y Selva que
                        permite al turista poder realizar un sinfín de actividades que van de los deportes y actividades
                        al aire libre hasta las visitas a sitios culturales y naturales, sin duda un destino imperdible.
                        A continuación una lista con los 7 principales lugares turísticos del Perú.</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('cusco-ombligo-del-mundo') }}">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/City-Tour-en-Sacsayhuaman-Cusco-Peru.webp') }}"
                                alt="Ciudad del Cusco" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Cusco</h5>
                            <p class="text-card">Ombligo del mundo</p>
                            <a href="{{ route('cusco-ombligo-del-mundo') }}" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('lima-ciudad-de-reyes') }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/ceviche-peruano-gastronomy.webp') }}"
                                alt="Ceviche peruano" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Lima</h5>
                            <p class="text-card">La ciudad de los reyes</p>
                            <a href="{{ route('lima-ciudad-de-reyes') }}" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('arequipa-la-ciudad-blanca') }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/arequipa-ciudad-blanca-pacha-mama.webp') }}"
                                alt="Arequipa ciudad blanca" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Arequipa</h5>
                            <p class="text-card">La ciudad blanca</p>
                            <a href="{{ route('arequipa-la-ciudad-blanca') }}" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('la-ciudad-de-puno') }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/lago-titicaca.webp') }}"
                                alt="lago Titicaca Puno" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Puno</h5>
                            <p class="text-card">Capital del folklore</p>
                            <a href="{{ route('la-ciudad-de-puno') }}" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('ciudad-de-ica') }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/Lineas-de-Nazca.webp') }}"
                                alt="Ciudad de Ica, Nazca" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Ica</h5>
                            <p class="text-card">La ciudad del eterno sol</p>
                            <a href="#" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('ciudad-de-pisco') }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/leon-marino.webp') }}"
                                alt="Leon marino Ica - Paracas" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Pisco</h5>
                            <p class="text-card">Ciudad que vio nacer a su homónima bebida</p>
                            <a href="{{ route('ciudad-de-pisco') }}" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('puerto-maldonado') }}">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/rio-amazonas-selva-de-peru-pacha-mama-spirit.webp') }}"
                                alt="Rio Amazonas - Puerto Maldonado" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Puerto Maldonado</h5>
                            <p class="text-card">La exótica selva peruana</p>
                            <a href="{{ route('puerto-maldonado') }}" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
