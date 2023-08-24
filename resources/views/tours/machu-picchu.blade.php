@extends('layouts.app')

@section('contenido')
    <div class="mapi1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 destinosh1">
                    <h1>Pacotes Machu Picchu</h1>
                    <p>
                        Uma lista de nossos pacotes que incluem Machu Picchu
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 pt-5 pb-4">
                    <p>
                        Se o seu sonho é conhecer a cidade perdida dos incas deixe em nossas mãos para montarmos seu pacote
                        Machu Picchu. Nos vamos garantir uma viagem inesquecível e personalizado para que seu pacote para
                        Machu Picchu seja do seu agrado e satisfação. Machu Picchu é uma das 7 maravilhas do mundo moderno e
                        considerado um dos principais destinos turísticos no Peru.<br><br>

                        Em seu entorno formam parte a imponente cadeia de montanhas do Peru e os Apus tutelares da região de
                        Cusco, localizado a 2400 metros acima do nível do mar. Em sua área podem ser encontrados monte de
                        terraços, fontes, templos, palácios e tambem a Montanha Huayna Picchu e Montanha Machu Picchu. Com
                        certeza, voce não pode deixar de conhecer estes ponto importante em sua viagem para Machu Picchu na
                        cidade sagrada dos incas.
                    </p>
                    <h2 class="mt-5">Lista de passeios pelo Peru:</h2>
                </div>

                @foreach ($tours as $tour)
                    @foreach ($tour->categorias as $categoria)
                        @if ($categoria->nombre === 'Machu Picchu')
                            <div class="col-lg-4 col-md-6 img-container">
                                <div class="card card-new">
                                    <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}">
                                        <div class="">
                                            <img class="card-img-top" src="../img/buscador/{{ $tour->img }}"
                                                alt="Camino Inca 4 dias" loading="lazy">
                                        </div>
                                    </a>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $tour->nombre }}</h5>
                                        <p class="text-card">{{ $tour->descripcion }}</p>
                                        <div class="row iconos-tours">
                                            <div class="col-4" style="float: left">
                                                <span class="fa fa-clock-o"></span> {{ $tour->dias }} días
                                            </div>
                                            <div class="col-4" style="float:right">
                                                <span class="fa fa-map-marker"></span> {{ $tour->ubicacion }}
                                            </div>
                                            <div class="col-4" style="float:right">
                                                <span class="fa fa-usd"></span> <strong>{{ $tour->precio }}</strong>
                                            </div>
                                        </div>
                                        <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}" class="btn2">Más
                                            Info</a>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
@endsection
