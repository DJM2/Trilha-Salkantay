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
                            <a href="#" class="btn_1">Descubra agora</a>
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
                <div class="col-lg-12">
                    <div class="booking_content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="hotel" role="tabpanel"
                                aria-labelledby="hotel-tab">
                                <div class="booking_form">
                                    <form action="#">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form_colum">
                                                <input tipe="text" class="gj-textbox-md" placeholder="Nome completo">
                                            </div>
                                            <div class="form_colum">
                                                <input tipe="text" class="gj-textbox-md" placeholder="Email:">
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_2" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <textarea style="height: 50px" name="mensaje" class="gj-textbox-md" cols="30" rows="10"
                                                    placeholder="Escriba acá su mensaje"></textarea>
                                            </div>
                                            <div class="form_btn">
                                                <a href="#" class="btn_1">search</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tricket" role="tabpanel" aria-labelledby="tricket-tab">
                                <div class="booking_form">
                                    <form action="#">
                                        <div class="form-row">
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Choosace place </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_3" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_4" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Persone </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_btn">
                                                <a href="#" class="btn_1">search</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="place" role="tabpanel" aria-labelledby="place-tab">
                                <div class="booking_form">
                                    <form action="#">
                                        <div class="form-row">
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Choosace place </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_5" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_6" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Persone </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_btn">
                                                <a href="#" class="btn_1">search</a>
                                            </div>
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

    <section class="top_place mt-5">
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
                @foreach ($toursTrilhas as $tour)
                    @if ($tour->categoria == 'machupicchu')
                        <div class="col-lg-6 col-md-6">
                            <div class="single_place">
                                <img src="../img/buscador/{{ $tour->img }}" alt="{{ $tour->nombre }}" loading="lazy">
                                <div class="hover_Text d-flex align-items-end justify-content-between">
                                    <div class="hover_text_iner">
                                        <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}"
                                            class="place_btn">Ver tour</a>
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
                    @endif
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
                                                    <a> <span class="tags">{{ $categoria->nombre }}</span></a>
                                                @endforeach
                                            </p>
                                            <a href="#" class="btn_1">Ler blog</a>
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
                                    <img src="{{ asset('img/Santuary-Lodge-Machu-Picchu.webp') }}" alt="">
                                    <div class="hover_text">
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
                                    </div>
                                    <div class="hotel_text_iner">
                                        <h3> <a href="#">Santuary Lodge Machu Pichhu</a></h3>
                                        <div class="place_review">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <p>Aguas calientes, Machu Picchu</p>
                                        <h5>From <span>$500</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single_ihotel_list">
                                    <img src="{{ asset('img/Belmond-Palacio-Nazarenas-Cusco.webp') }}" alt="">
                                    <div class="hover_text">
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
                                    </div>
                                    <div class="hotel_text_iner">
                                        <h3> <a href="#">Palacio Nazarenas Cusco</a></h3>
                                        <div class="place_review">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <p>Cusco, Cusco</p>
                                        <h5>From <span>$500</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single_ihotel_list">
                                    <img src="{{ asset('img/Inkaterra-Hacienda-Urubamba.webp') }}" alt="">
                                    <div class="hover_text">
                                        <div class="hover_text">
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
                                        </div>
                                    </div>
                                    <div class="hotel_text_iner">
                                        <h3> <a href="#">Inkaterra Hacienda Urubamba</a></h3>
                                        <div class="place_review">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <p>Cusco, Urubamba</p>
                                        <h5>From <span>$500</span></h5>
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
                                        alt="">
                                    <div class="hover_text">
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
                                    </div>
                                    <div class="hotel_text_iner">
                                        <h3> <a href="#">Hotel Aranwa Vale Sagrado dos Incas</a></h3>
                                        <div class="place_review">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <p>Cusco, Urubamba</p>
                                        <h5>From <span>$500</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single_ihotel_list">
                                    <img src="{{ asset('img/Inkaterra-Pueblo-Hotel-Aguas-Calientes.webp') }}"
                                        alt="">
                                    <div class="hover_text">
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
                                    </div>
                                    <div class="hotel_text_iner">
                                        <h3> <a href="#">Inkaterra Pueblo Hotel</a></h3>
                                        <div class="place_review">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <p>Cusco, Cusco</p>
                                        <h5>From <span>$500</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single_ihotel_list">
                                    <img src="{{ asset('img/Casa-andina-premium-Valle-Sagrado.webp') }}" alt="">
                                    <div class="hover_text">
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
                                    </div>
                                    <div class="hotel_text_iner">
                                        <h3> <a href="#">Casa Andina Premium </a></h3>
                                        <div class="place_review">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <p>Cusco, Cusco</p>
                                        <h5>From <span>$500</span></h5>
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
                        <img src="{{asset('img/galeria/Machu-Picchu-Peru-Cusco.webp')}}" alt="">
                        <h3> <a href="#"> Cusco</a></h3>
                        <p>Trilha Inca, Choquequirao, Machu Picchu, Cusco.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="destinos">
                        <img src="{{asset('img/galeria/Lima-cidade-Peru.webp')}}" alt="">
                        <h3> <a href="#"> Lima</a></h3>
                        <p>Huacca Pucllana, Miraflores, Catacumbas</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="destinos">
                        <img src="{{asset('img/galeria/Puno-cidade-Peru.webp')}}" alt="">
                        <h3> <a href="#"> Puno</a></h3>
                        <p>Lago Titicaca, Ilha de Uros, Ayaviri</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="destinos">
                        <img src="{{asset('img/galeria/Arequipa-cidade-Peru.webp')}}" alt="">
                        <h3> <a href="#"> Arequipa</a></h3>
                        <p>Vulcão Misti, Mosteiro de Santa Catalina, Rota Sillar</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
