@extends('layouts.app')
@section('titulo', 'Agência de viagens NC Travel Cusco')
@section('metas')

@endsection
@section('contenido')
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner">
                            <h1 style="text-shadow: -2px -2px #525252">Trilha Salkantay</h1>
                            <p>As melhores caminhadas pelo Peru, Cusco e Machu Picchu</p>
                            <a href="#inicio" class="btn_1">Descubra agora</a>
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                    O e-mail foi enviado com sucesso. Nós responderemos o mais rapidamente possível.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="booking_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="booking_menu">
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab"
                                    aria-controls="hotel" aria-selected="true">Solicitar
                                    informação</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tricket-tab" data-toggle="tab" href="#tricket" role="tab"
                                    aria-controls="tricket" aria-selected="false">Pesquisa Tour</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="place-tab" data-toggle="tab" href="#place" role="tab"
                                    aria-controls="place" aria-selected="false">Pesquisar blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12" id="inicio">
                    <div class="booking_content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="hotel" role="tabpanel"
                                aria-labelledby="hotel-tab">
                                <div class="booking_form">
                                    <form action="{{ route('form-index') }}" method="POST">
                                        @csrf 
                                        <div class="form-row">
                                            <div class="form_colum">
                                                <input tipe="text" class="gj-textbox-md" name="nombre"
                                                    placeholder="Nome completo" required>
                                            </div>
                                            <div class="form_colum">
                                                <input tipe="text" class="gj-textbox-md" name="email"
                                                    placeholder="Email:" required>
                                            </div>
                                            <div class="form_colum">
                                                <input type="date" class="gj-textbox-md" name="date"
                                                    placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <textarea style="height: 56px; margin-left:-30px" name="mensaje" class="gj-textbox-md" cols="25" rows="10"
                                                    placeholder="Escriba acá su mensaje"></textarea>
                                            </div>
                                            <div class="form_colum" style="display: none">
                                                <input type="text" class="gj-textbox-md" name="solicitud" placeholder="Escriba aca su mensaje">
                                            </div>
                                            <div class="form_btn">
                                                <button type="submit" class="btn_1"
                                                    style="border: none">Solicitar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tricket" role="tabpanel" aria-labelledby="tricket-tab">
                                <div class="booking_form">
                                    <form action="{{ route('search') }}" method="get">
                                        @csrf
                                        <div class="form-row">
                                            <div style="width:100%; height: 50px" class="mb-3">
                                                <input
                                                    style="width: 100%;height: 100%; border: 1px solid #2493e0; padding: 1em;"
                                                    id="name" name="name" placeholder="Pesquisar tour no Peru">
                                            </div>
                                            <input class="btn_1 mx-auto text-center" type="submit" value="Procurar"
                                                style="border: none;">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="place" role="tabpanel" aria-labelledby="place-tab">
                                <div class="booking_form">
                                    <form action="{{ route('blogsearch') }}" method="get">
                                        @csrf
                                        <div class="form-row">
                                            <div style="width:100%; height: 50px" class="mb-3">
                                                <input
                                                    style="width: 100%;height: 100%; border: 1px solid #2493e0; padding: 1em;"
                                                    id="name" name="name" placeholder="Pesquisar tópicos do blog do Peru">
                                            </div>
                                            <input class="btn_1 mx-auto text-center" type="submit" value="Procurar"
                                                style="border: none;">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="top_place mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2 class="mt-5">Principais lugares para visitar</h2>
                        <p>Explore as paisagens deslumbrantes do Peru em caminhadas cheias de emoção e descobertas. Cada
                            passo revela tesouros naturais e culturais para admirar e inspirar sua jornada</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($tours as $tour)
                    <div class="col-lg-6 col-md-6">
                        <div class="single_place">                            
                            <img src="../img/buscador/{{ $tour->img }}" alt="{{ $tour->nombre }}" loading="lazy">
                            <h3 class="tituloh3">{{ $tour->nombre }}</h3>
                            <div class="hover_Text d-flex align-items-end justify-content-between">
                                <div class="hover_text_iner">
                                    <a href="{{ route('tours.show', ['slug' => $tour->slug]) }}" class="place_btn">Ver
                                        tour</a>                                        
                                    <h3>{{ $tour->nombre }}</h3>
                                    <p>{{ $tour->descripcion }}</p>
                                    <div class="row iconos-tours mt-3">
                                        <div class="col-4" style="float: left">
                                            <span class="fa fa-clock-o"> {{ $tour->dias }} días</span>
                                        </div>
                                        <div class="col-4" style="float:right">
                                            <span class="fa fa-map-marker"> {{ $tour->ubicacion }}</span>
                                        </div>
                                        <div class="col-4" style="float:right">
                                            <span class="fa fa-usd"><strong>{{ $tour->precio }}.00</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="event_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="event_slider owl-carousel">
                        @foreach ($blogs as $blog)
                            <div class="single_event_slider">
                                <div class="row justify-content-end">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="event_slider_content">
                                            <h5>Blogs Peru</h5>
                                            <h2>{{ $blog->nombre }}</h2>
                                            <p>{{ $blog->descripcion }}</p>
                                            <p><span class="fa fa-calendar"></span>
                                                {{ $blog->updated_at->format('d/m/Y') }}</p>
                                            <p>
                                                @foreach ($blog->categorias as $categoria)
                                                    <a href="{{ route('tag', $categoria->slug) }}"> <span
                                                            class="tags">{{ $categoria->nombre }}</span></a>
                                                @endforeach
                                            </p>
                                            <a href="{{ route('muestrame', ['slug' => $blog->slug]) }}"
                                                class="btn_1">Ler blog</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hotel_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Hotéis com quem trabalhamos</h2>
                        <p>
                            Esta é uma lista dos principais hotéis com os quais trabalhamos
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div id="hotelCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-djm">
                    <li data-target="#hotelCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#hotelCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single_ihotel_list">
                                    <img src="{{ asset('img/Santuary-Lodge-Machu-Picchu.webp') }}"
                                        alt="Santuary Lodge Machu Picchu" loading="lazy">
                                    <div class="hotel_text_iner">
                                        <h3> <a href="https://www.belmond.com/hotels/south-america/peru/machu-picchu/belmond-sanctuary-lodge/"
                                                target="_blank" rel="nofollow">Santuary
                                                Lodge Machu Pichhu</a></h3>
                                        <div class="place_review" style="color: #ffe70b">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p>Aguas calientes, Machu Picchu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single_ihotel_list">
                                    <img src="{{ asset('img/Belmond-Palacio-Nazarenas-Cusco.webp') }}"
                                        alt="Belmond Palacio Nazaneras Cusco" loading="lazy">
                                    <div class="hotel_text_iner">
                                        <h3> <a href="https://www.belmond.com/es/hotels/south-america/peru/cusco/belmond-palacio-nazarenas/"
                                                rel="nofollow" target="_blank">Palacio Nazarenas Cusco</a>
                                        </h3>
                                        <div class="place_review" style="color: #ffe70b">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p>Cusco, Cusco</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single_ihotel_list">
                                    <img src="{{ asset('img/Inkaterra-Hacienda-Urubamba.webp') }}"
                                        alt="Inakterra Hacienda Urubamba" loading="lazy">
                                    <div class="hotel_text_iner">
                                        <h3> <a href="https://www.inkaterra.com/es/inkaterra/inkaterra-hacienda-urubamba/la-experiencia/"
                                                target="_blank" rel="nofollow">Inkaterra Hacienda Urubamba</a></h3>
                                        <div class="place_review" style="color: #ffe70b">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p>Cusco, Urubamba</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single_ihotel_list">
                                    <img src="{{ asset('img/Hotel-Aranwa-Vale-Sagrado-dos-Incas.webp') }}"
                                        alt="Hotel Aranwa" loading="lazy">
                                    <div class="hotel_text_iner">
                                        <h3> <a href="https://aranwahotels.com/" target="_blank" rel="nofollow">Hotel
                                                Aranwa Vale Sagrado dos Incas</a></h3>
                                        <div class="place_review" style="color: #ffe70b">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p>Cusco, Urubamba</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single_ihotel_list">
                                    <img src="{{ asset('img/Inkaterra-Pueblo-Hotel-Aguas-Calientes.webp') }}"
                                        alt="Inakterra Pueblo Hotel" loading="lazy">
                                    <div class="hotel_text_iner">
                                        <h3> <a href="https://www.inkaterra.com/inkaterra/inkaterra-machu-picchu-pueblo-hotel/the-experience/"
                                                target="_blank" rel="nofollow">Inkaterra Pueblo Hotel</a></h3>
                                        <div class="place_review" style="color: #ffe70b">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p>Cusco, Cusco</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single_ihotel_list">
                                    <img src="{{ asset('img/Casa-andina-premium-Valle-Sagrado.webp') }}"
                                        alt="Casa Andina Premium Valle Sagrado" loading="lazy">
                                    {{-- <div class="hover_text">
                                        <div class="hotel_social_icon">
                                            <ul>
                                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="share_icon">
                                            <i class="ti-share"></i>
                                        </div>
                                    </div> --}}
                                    <div class="hotel_text_iner">
                                        <h3> <a href="https://www.casa-andina.com/es/destinos/valle-sagrado/hoteles/casa-andina-premium-valle-sagrado-hotel-&-villas"
                                                rel="nofollow" target="_blank">Casa Andina Premium </a>
                                        </h3>
                                        <div class="place_review" style="color: #ffe70b">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p>Cusco, Cusco</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="client_review section_padding">
        <div class="container">
            <div class="row ">
                <div class="col-xl-6">
                    <div class="section_tittle">
                        <h2>What our customer said</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="client_review_slider owl-carousel">
                        <div class="single_review_slider">
                            <div class="place_review">
                                <i class="fa fa-star colorY"></i>
                                <i class="fa fa-star colorY"></i>
                                <i class="fa fa-star colorY"></i>
                                <i class="fa fa-star colorY"></i>
                                <i class="fa fa-star colorY"></i>
                            </div>
                            <p class="font-weight-bold mb-0">Camino del inca 4 días 3 noches.</p>
                            <p class="text-justify mt-1 font-weight-light">
                                Recién terminamos nuestro viaje de aventura de 7 amigos a Machu Picchu.
                                Contratamos a NCTravel con Hilario , el tour de 4 días por el camino del Inca y final en
                                Machu Picchu subiendo al Wayna Picchu.
                                Nada hubiera sido lo mismo sin nuestro Guía ( con mayúscula ) Darwin. Estuvo todo
                                ESPECTACULAR, mas allá de los paisajes, las vistas...etc, una suerte que nos halla
                                tocado, una excelente persona, excelente Guía, super educado e informado, nos sentimos
                                siempre cuidados, nos divertimos todos y nos contó todas las historias relacionadas con
                                nuestro viaje.
                                Nctravel ( Hilario ) cumplió con cada una de las cosas que nos había propuesto.
                                Sin lugar a dudas no cambiaria nada en nuestro viaje y recomendaría a Hilario y
                                obviamente a Darwin sin pensarlo dos veces.
                            </p>
                            <h5> - Lisandro K</h5>
                            <i class="text-white">Montevideo, Uruguay</i>
                        </div>
                        <div class="single_review_slider">
                            <div class="place_review">
                                <i class="fa fa-star colorY"></i>
                                <i class="fa fa-star colorY"></i>
                                <i class="fa fa-star colorY"></i>
                                <i class="fa fa-star colorY"></i>
                                <i class="fa fa-star colorY"></i>
                            </div>
                            <p class="font-weight-bold mb-0">Camino del inca 4 días 3 noches.</p>
                            <p class="text-justify mt-1 font-weight-light">
                                Recién terminamos nuestro viaje de aventura de 7 amigos a Machu Picchu.
                                Contratamos a NCTravel con Hilario , el tour de 4 días por el camino del Inca y final en
                                Machu Picchu subiendo al Wayna Picchu.
                                Nada hubiera sido lo mismo sin nuestro Guía ( con mayúscula ) Darwin. Estuvo todo
                                ESPECTACULAR, mas allá de los paisajes, las vistas...etc, una suerte que nos halla
                                tocado, una excelente persona, excelente Guía, super educado e informado, nos sentimos
                                siempre cuidados, nos divertimos todos y nos contó todas las historias relacionadas con
                                nuestro viaje.
                                Nctravel ( Hilario ) cumplió con cada una de las cosas que nos había propuesto.
                                Sin lugar a dudas no cambiaria nada en nuestro viaje y recomendaría a Hilario y
                                obviamente a Darwin sin pensarlo dos veces.
                            </p>
                            <h5> - Allen Miller</h5>
                            <i class="text-white">Buenos Aires, Argentina</i>
                        </div>
                        <div class="single_review_slider">
                            <div class="place_review">
                                <i class="fa fa-star colorY"></i>
                                <i class="fa fa-star colorY"></i>
                                <i class="fa fa-star colorY"></i>
                                <i class="fa fa-star colorY"></i>
                                <i class="fa fa-star colorY"></i>
                            </div>
                            <p class="font-weight-bold mb-0">Trekking Salkantay a Machu Picchu</p>
                            <p class="text-justify mt-1 font-weight-light">
                                Estuve por 5 dias e 4 noches en un trekking maravilloso organizado por NC Travel Cusco.
                                Fui muy bien atendido. El trekking con sus guias Paul e Marco, mui experimentados e
                                espertos nos llevo a montañas, lagunas e valles magnificos.
                                Me junte a un grupo muy internacional e diverso, con gente muy alegre e disposta a
                                caminadas, lo que me alegró muchissimo.
                                Dormimos en tiendas e la organización e comida estava de acuerdo a las expectativas.
                                Para quien desea un bon "custo-beneficio", recomendo !
                            </p>
                            <h5> - Allen Miller</h5>
                            <i class="text-white">Sao Paulo - Brasil</i>
                        </div>
                        <div class="single_review_slider">
                            <div class="place_review">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <p class="font-weight-bold mb-0">Cusco, Lima, Arequipa 6 dias</p>
                            <p class="text-justify mt-1 font-weight-light">
                                Excelente serviço oferecido pela empresa.
                                Fica meu agradecimento a equipe que nos acompanhou durante os 5 dias de travessia da
                                trilha Salkantay a Machu Picchu. E parabéns pelos excelentes profissionais que prestam
                                serviços para vocês.
                                Super recomendo como guia o Darwin Lovon, Evangelino (cozinheiro) e ao Raul (arrieiro)
                                Eu e meu grupo ficamos muito felizes com essa travessia e muito sastifeitos com o
                                serviço oferecido pela Nc Travel.
                                Gratidão sempre
                            </p>
                            <h5>- Day Michelle</h5>
                            <i class="text-white">Rio de Janeiro, Brasil</i>
                        </div>
                        <div class="single_review_slider">
                            <div class="place_review">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <p class="font-weight-bold mb-0">Pacote Cusco a Machu Picchu</p>
                            <p class="text-justify mt-1 font-weight-light">
                                Compramos o pacote no Brasil para Cusco passeios em Vale Sagrado, lago Titicaca, Puno e
                                rota do Sol, fomos muito bem recebidos, nos buscaram no hotel no horário combinado, os
                                guias são perfeito, apesar de não falar espanhol entendemos perfeitamente, são
                                atenciosos e prestativos!Não tenham medo, podem confiar!grata pela agência!
                                Kerolin Brasil
                            </p>
                            <h5> - Kerolin End Impassionato Dal Bianco</h5>
                            <i class="text-white">Puerto de Santos, Brasil</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="best_services section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section_tittle text-center">
                        <h2>Destinos Sugeridos no Peru</h2>
                        <p class="text-justify">
                            O Peru oferece atrações turísticas de classe mundial, com sítios arqueológicos misteriosos,
                            paisagens inspiradoras e fauna diversificada. Nesta vasta e histórica terra, tradições antigas,
                            coloniais e modernas se fundem para uma experiência cultural inesquecível. Não importa o tipo de
                            viajante - fã de história, aventureiro ou fã de gastronomia - o Peru oferece uma infinidade de
                            atividades para satisfazer todos os apetites.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="destinos">
                        <a href="https://www.trilhasalkantay.com/destino-Peru/ciudade-de-Cusco" target="_blank">
                            <img src="{{ asset('img/galeria/Machu-Picchu-Peru-Cusco.webp') }}" alt="Cusco"
                                loading="lazy">
                        </a>
                        <h3> <a href="https://www.trilhasalkantay.com/destino-Peru/ciudade-de-Cusco" target="_blank">
                                Cusco</a></h3>
                        <p>Trilha Inca, Choquequirao, Machu Picchu, Cusco.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="destinos">
                        <a href="https://www.trilhasalkantay.com/destino-Peru/Cidade-de-Lima-Peru" target="_blank">
                            <img src="{{ asset('img/galeria/Lima-cidade-Peru.webp') }}" alt="Lima" loading="lazy">
                        </a>
                        <h3> <a href="https://www.trilhasalkantay.com/destino-Peru/Cidade-de-Lima-Peru" target="_blank">
                                Lima</a></h3>
                        <p>Huacca Pucllana, Miraflores, Catacumbas</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="destinos">
                        <a href="https://www.trilhasalkantay.com/destino-Peru/Ciudade-de-Puno" target="_blank">
                            <img src="{{ asset('img/galeria/Puno-cidade-Peru.webp') }}" alt="Puno" loading="lazy">
                        </a>
                        <h3> <a href="https://www.trilhasalkantay.com/destino-Peru/Ciudade-de-Puno" target="_blank">
                                Puno</a></h3>
                        <p>Lago Titicaca, Ilha de Uros, Ayaviri</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="destinos">
                        <a href="https://www.trilhasalkantay.com/destino-Peru/Cidade-de-Arequipa-Peru" target="_blank">
                            <img src="{{ asset('img/galeria/Arequipa-cidade-Peru.webp') }}" alt="Arequipa"
                                loading="lazy">
                        </a>
                        <h3> <a href="https://www.trilhasalkantay.com/destino-Peru/Cidade-de-Arequipa-Peru"
                                target="_blank"> Arequipa</a></h3>
                        <p>Vulcão Misti, Mosteiro de Santa Catalina, Rota Sillar</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
