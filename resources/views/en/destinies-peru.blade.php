@extends('layouts.appen')

@section('content') 
    @include('layouts.menu')
    <div class="blog-temas">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">Find destinations to discover Peru</h1>
            </div>
        </div>
    </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <br><br>
                    <h2>Peru as a tourist destination</h2>
                    <i>Peru, country of traditions, mixed country, strong country</i><br><br>
                    <p>
                        Tourism in<strong> Peru</strong> is directed towards archaeological monuments, as it has more
                        than one hundred thousand sites of interest, ecotourism in the Peruvian Amazon, cultural tourism
                        in colonial cities, gastronomic tourism, adventure tourism and beach tourism.<br><br>
                        According to a study by the Peruvian government, the satisfaction rate of tourists after
                        visiting Peru is 94%. It is the fastest growing industry in Peru.
                    </p>
                    <h3>Do you want to know why visit Peru?</h3>
                    <p>
                        The answer is simple and complex, like Peru itself. Visiting Peru is getting in touch with an
                        amazing culture, with people capable of showing you the best of themselves in any circumstance,
                        with landscapes that generate emotions, with emotions that are never forgotten. Peru is rich
                        because its wealth is not based on material things, but is found in the smile of a child from
                        Cusco, in the tip of a fork, in your feet on the sand, in the brush of some leaves in the
                        jungle, in the breeze when you reach the top of that mountain, in the heat on your face when the
                        sun hits you.
                    </p>
                    <h2>Tourist information and assistance</h2>
                    <p>
                        Peru has a free state service that works 7 days a week throughout the year, called <a
                            target="_blanck" rel="no-follow" class="enlaces-tours"
                            href="https://www.peru.travel/es/datos-utiles/iperu">Iperú</a>,
                        Information and Tourist Assistance. This service is of great help to the national or foreign
                        traveler before, during and after a trip to Peru. Likewise, it receives complaints and
                        suggestions concerning tourist companies, attractions and in general about Peruvian tourism.

                    </p>
                    <h3>Most popular tourist destinations in Peru</h3>
                    <p>
                        This country full of charm and mysticism has 3 natural regions Costa, Sierra and Selva that
                        allow tourists to perform endless activities ranging from sports and outdoor activities to
                        visits to cultural and natural sites, without a doubt an unmissable destination. . Below is a
                        list of the 7 main tourist places in Peru.
                    </p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('cusco-navel-of-the-world') }}">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/City-Tour-en-Sacsayhuaman-Cusco-Peru.webp') }}"
                                alt="Ciudad del Cusco" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Cusco</h5>
                            <p class="text-card">Navel of the world</p>
                            <a href="{{ route('cusco-navel-of-the-world') }}" class="boton-card">More details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('lima-city-of-kings') }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/ceviche-peruano-gastronomy.webp') }}"
                                alt="Ceviche peruano" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Lima</h5>
                            <p class="text-card">The city of kings</p>
                            <a href="{{ route('lima-city-of-kings') }}" class="boton-card">More details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('arequipa-the-white-city') }}">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/arequipa-ciudad-blanca-pacha-mama.webp') }}"
                                alt="Arequipa ciudad blanca" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Arequipa</h5>
                            <p class="text-card">The white city</p>
                            <a href="{{ route('arequipa-the-white-city') }}" class="boton-card">More details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{route('puno-city')}}">
                            <img class="card-img-top" src="{{ asset('img/thumb/lago-titicaca.webp') }}"
                                alt="lago Titicaca Puno" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Puno</h5>
                            <p class="text-card">Capital of folklore</p>
                            <a href="{{route('puno-city')}}" class="boton-card">More details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('ica-city') }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/Lineas-de-Nazca.webp') }}"
                                alt="Ica city, Nazca" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Ica</h5>
                            <p class="text-card">The city of the eternal sun</p>
                            <a href="{{ route('ica-city') }}" class="boton-card">More details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('pisco-city') }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/leon-marino.webp') }}"
                                alt="Leon marino Ica - Paracas" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Pisco</h5>
                            <p class="text-card">City that gave birth to its homonymous drink</p>
                            <a href="{{ route('pisco-city') }}" class="boton-card">More details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('puerto-maldonado-en') }}">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/rio-amazonas-selva-de-peru-pacha-mama-spirit.webp') }}"
                                alt="Amazonas river - Puerto Maldonado" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Puerto Maldonado</h5>
                            <p class="text-card">The exotic Peruvian jungle</p>
                            <a href="{{ route('puerto-maldonado-en') }}" class="boton-card">More details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
