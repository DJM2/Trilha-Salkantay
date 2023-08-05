@extends('layouts.app')
@section('titulo', 'Contato NC travel Cusco')
@section('metas')
    <meta name="title" content="Contato Nc Travel Cusco" />
    <meta name="description" content="Contato nc travel cusco, Comunique-se conosco e forneceremos as informações necessárias para planejar sua viagem NCTRAVELCUSCO">
    <meta name="keywords"
        content="NC travel, cobre nc travel, nc travel cusco" />
    <meta rel="canonical" href="https://www.trilhaincacuzco.com/quem-somos">

    <meta name="og_image" content="https://www.trilhaincacuzco.com/img/sliders/default/2trilha-inca.jpg" />
    <meta name="og_secureImage" content="https://www.trilhaincacuzco.com/img/sliders/default/2trilha-inca.jpg" />

    <meta property="og:title"
        content="Contato Nc Travel Cusco" />
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
                    <h1 style="padding-top: 250px;color:#fff">NC Travel Cusco</h1>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-12 mb-5">
                    <h2 class="h1-index">
                        NC Travel Cusco - agência de viagens Peru:
                    </h2>
                    <p>
                        Somos uma agência de viagens com grande experiência no campo do turismo. Dispomos de um grupo de
                        profissional qualificados e com serviços de primeira qualidade, que se encarregarão para que sua
                        estadia em nosso país seja de seu completo agrado e facilidade. Desenvolvemos um trabalho coordenado
                        e bem organizado, para promover um intercâmbio intercultural com respeito pelos nossos clientes, sua
                        cultura e seus costumes.
                    </p>
                </div>
                <div class="space"></div>
                <div class="col-lg-6">
                    <h3 class="text-center">MISSÃO</h3>
                    <p>
                        Prestar um serviço de alta qualidade técnica e humana, para o benefício criativo do tempo livre de
                        nossos clientes, satisfazendo assim, seus gostos e necessidades. Todo o serviço é disposto em um
                        ambiente seguro, com serviços pessoais de primeira linha e de alta capacidade científica, técnica e
                        humanística, que garante nossa contribuição ao desenvolvimento de uma consciência turística e
                        prosperidade integral.
                    </p>
                </div>
                <div class="col-lg-6 mb-3">
                    <h3 class="text-center">VISÃO</h3>
                    <ul>
                        <li>Ser líder no mercado do turismo dentro e fora de nosso país. </li>
                        <li>Oferecemos um serviço de alta qualidade, com responsabilidade social.</li>
                        <li>Capacitando constantemente o pessoal de nossa organização.</li>
                        <li>Cumprindo rigorosamente com as expectativas de nossos visitantes.</li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <h3>Turismo Responsavel</h3>
                    <p>
                        Nossa organização pratica o Turismo Responsável, portanto, temos o compromisso com uma forma de
                        trabalho cujo objetivo é alcançar um sistema econômico, social e cultural que respeite não apenas os
                        direitos à diversidade cultural, mas também o cuidado e a proteção ao meio ambiente.
                    </p>
                </div>
                <div class="col-lg-12">
                    <h3>Nossos Guias</h3>
                    <p>
                        Nós somos muito exigentes com nosso pessoal, a equipe de guias é capacitada e com vários anos de
                        experiência, todos licenciados em Turismo, de onde se distinguem a cordialidade com nossos clientes,
                        facilidade de comunicação, com domínio nos idiomas: inglês, francês e português. Nossos guias são
                        capacitados em seminários e possuem conhecimentos em primeiros-socorros, resgates e estão regulares
                        com as regras da Unidade de Gestão do Santuário Histórico de Machu Picchu e o DIRECTUR.
                    </p>
                </div>
                <div class="col-lg-12 text-center mt-3 mb-3">
                    <img src="{{ asset('img/panoramico/quem-somos-nc-travel.webp') }}" alt="equipo NC travel Cusco">
                </div>
                <div class="col-lg-12 text-center">
                    <h4>Certificados da nossa agência de viagens</h4>
                    <div class="row">
                        <div class="col-lg-3">
                            <img id="autorizacion" onclick="abrirImg('autorizacion')"
                                src="{{ asset('img/galeria/autorizado-agencia-operadora.webp') }}" width="100%"
                                alt="Autorizacion NC travel" loading="lazy">
                        </div>
                        <div class="col-lg-3">
                            <img id="constancia" onclick="abrirImg('constancia')"
                                src="{{ asset('img/galeria/constancia-nc-travel.webp') }}" width="100%" loading="lazy"
                                alt="Constancia NC travel">
                        </div>
                        <div class="col-lg-3">
                            <img id="sernanp" onclick="abrirImg('sernanp')"
                                src="{{ asset('img/galeria/sernanp-nc-travel.webp') }}" width="100%" loading="lazy"
                                alt="Sernanp NC travel">
                        </div>
                        <div class="col-lg-3">
                            <img id="licencia" onclick="abrirImg('licencia')"
                                src="{{ asset('img/galeria/licencia-nc-travel.webp') }}" width="100%" loading="lazy"
                                alt="Licencia NC travel">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="popupimg" style="display:none">
        <div class="contenedor">
            <img class="imagen" src="" alt="">
            <span class="cerrar">&times;</span>
        </div>
    </div>
    <style>
        .popupimg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
        }

        .popupimg .cerrar {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 30px;
            color: white;
            cursor: pointer;
        }

        .popupimg .imagen {
            width: 50%;
            height: auto;
            max-width: 100%;
            max-height: 100%;
            display: block;
            margin: 0 auto;
            opacity: 0;
            transition: opacity 0.6s ease-in-out;
        }

        .popupimg .imagen.loaded {
            opacity: 1;
        }
    </style>
    <script>
        function abrirImg(img) {
            var ruta = document.getElementById(img).src;
            var descripcion = document.getElementById(img).alt;

            var popup = document.querySelector('.popupimg');
            popup.style.display = 'flex';

            var imagen = popup.querySelector('.imagen');
            var cerrar = popup.querySelector('.contenedor');
            imagen.src = ruta;
            imagen.alt = descripcion;
            imagen.onload = function() {
                imagen.classList.add('loaded');
            };

            cerrar.onclick = function(event) {
                if (event.target === imagen) {
                    return;
                }
                popup.style.display = 'none';
            };
        }
    </script>
@endsection
