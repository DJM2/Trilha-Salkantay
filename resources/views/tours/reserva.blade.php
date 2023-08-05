@extends('layouts.app')
@section('titulo', 'Contato NC travel Cusco')
@section('metas')
    <meta name="title" content="Contato Nc Travel Cusco" />
    <meta name="description"
        content="Contato nc travel cusco, Comunique-se conosco e forneceremos as informações necessárias para planejar sua viagem NCTRAVELCUSCO">
    <meta name="keywords" content="NC travel, cobre nc travel, nc travel cusco" />
    <meta rel="canonical" href="https://www.trilhaincacuzco.com/quem-somos">

    <meta name="og_image" content="https://www.trilhaincacuzco.com/img/sliders/default/2trilha-inca.jpg" />
    <meta name="og_secureImage" content="https://www.trilhaincacuzco.com/img/sliders/default/2trilha-inca.jpg" />

    <meta property="og:title" content="Contato Nc Travel Cusco" />
    <meta property="og:description"
        content="Contato nc travel cusco, Comunique-se conosco e forneceremos as informações necessárias para planejar sua viagem NCTRAVELCUSCO" />
    <meta property="og:locale" content="es" />
    <meta property="og:url" content="https://www.trilhaincacuzco.com/quem-somos" />
    <meta name="twitter:card" content="summary" />
    <meta name="robots" content="index,follow" />
@endsection
@section('contenido')
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 250px;color:#fff">Contato NC Travel Cusco</h1> <span><img
                            src="{{ asset('img/pacha-mama-spirit-logo.png') }}" width="260px" alt=""></span>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-12 mb-5">
                    <h2 class="h1-index text-center">
                        NC Travel Cusco - agência de viagens Peru:
                    </h2>
                </div>
                <div class="space"></div>
                <div class="col-lg-6 p-4">
                    <h3 class="text-center">Nc Travel Cusco Information</h3>
                    <p>
                        Somos uma equipe que oferece experiências únicas e inesquecíveis nos mais belos destinos turísticos
                        do mundo.
                    </p>
                    <ul class="contato">
                        <li><i class="icon-phone"></i> <span>Oficina Local:</span> +51 084 23 51 90 </li>
                        <li><i class="icon-mobile"></i> <span>Numero de Celulare:</span> +51 984 606 757</li>
                        <li><i class="icon-map-marker"></i> <span>Dirección:</span> Pasaje San Martin X2 - 16 Dep 201
                            Cusco - Peru</li>
                        <li><i class="icon-envelope"></i> <span>Email:</span> <a
                                href="mailto:info@nctravelcusco.com">info@nctravelcusco.com</a> | <a
                                href="mailto:reservas@nctravelcusco.com">reservas@nctravelcusco.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 mb-3 p-3">
                    <h3 class="text-center">Agende agora</h3>
                    <form class="" action="{{ route('mensajePacha') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="inputEmail4">Nome:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    placeholder="Inca Pachacutec" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="inputEmail4">Email:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="hijo-del-sol@gmail.com" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputAddress">N° Passageiros:</label>
                                <input type="number" class="form-control" name="adultos" id="inputAddress"
                                    placeholder="Number" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress2" title="Children under 3 years old do not pay">Crianças:
                                    ⓘ</label>
                                <input type="number" name="childs" class="form-control" id="inputAddress2"
                                    placeholder="Number">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputCity">Data da viagem Peru:</label>
                                <input type="date" name="date" class="form-control" id="date">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputCity">Número de telefone: <i class="icon-whatsapp"></i></label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="mensaje">Mensagem:</label>
                                <textarea class="form-control" name="mensaje" id="mensaje">
                                </textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="boton-card">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="padding-left:0px; padding-right:0px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d969.7625861470573!2d-71.96605737310344!3d-13.532501925028365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd67345ad021f%3A0x5bd777d45ae78f8c!2sNc+Travel+Cusco!5e0!3m2!1ses!2spe!4v1545324603526" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>

        </div>
    </section>
    <div class="popupimg" style="display:none">
        <div class="contenedor">
            <img class="imagen" src="" alt="">
            <span class="cerrar">&times;</span>
        </div>
    </div>
@endsection
