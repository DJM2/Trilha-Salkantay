<!doctype html>
<html lang="pt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trilha Salkantay to Machu Picchu - @yield('titulo')</title>
    <link rel="icon" href="{{ asset('img/thumb/favicon-admin.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gijgo.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    @yield('metas')
    <script type="text/javascript">
        function callbackThen(response) {
            console.log(response.status);
            response.json().then(function(data) {
                console.log(data);
                if (data && data.score) {
                    document.getElementById("recaptcha_score").value = data.score;
                    document.getElementById("mi_formulario").submit();
                }
            });
        }

        function callbackCatch(error) {
            console.error('Error:', error)
        }
    </script>

    {!! htmlScriptTagJsApi([
        'callback_then' => 'callbackThen',
        'callback_catch' => 'callbackCatch',
    ]) !!}
</head>

<body>
    <header class="main_menu">
        <div class="sub_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="sub_menu_right_content text-center">
                            <a href="#">info@trilhasalkantay.com </a>
                            <a href="#"><span class="colorS responsive">|</span> niko@nctravelcusco.com</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="sub_menu_social_icon">
                            <a href="https://www.facebook.com/MachupicchuCusco" target="_blank"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="https://www.pinterest.es/nctravelcusco/" target="_blank"><i
                                    class="fa fa-pinterest"></i></a>
                            <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d6886235-Reviews-Nc_Travel_Cusco-Cusco_Cusco_Region.html"
                                target="_blank"><i class="fa fa-tripadvisor"></i></a>
                            <a href="https://www.instagram.com/nctravelcusco_oficial/" target="_blank"><i
                                    class="fa fa-instagram"></i></a>
                            <span><i class="fa fa-whatsapp"></i>+51 984 606 757</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu_iner">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="{{ route('index') }}">
                                <img class="p-3" src="{{ asset('img/logo-trilha-salkantay.png') }}" alt="logo"
                                    width="220px">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item justify-content-center"
                                id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="nav-link responsive dropdown-toggle"
                                                    href="{{ route('destinosLista') }}">
                                                    Destinos
                                                </a>
                                                <a class="nav-link mobile" href="{{ route('destinosLista') }}">
                                                    Destinos
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <i class="ml-2 d-md-none float-right dropdown-toggle" role="button"
                                                    aria-haspopup="true" aria-expanded="false" id="navbarDropdown"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            @foreach ($destinos as $destino)
                                                <a href="{{ route('destino.show', $destino->slug) }}"
                                                    class="dropdown-item">{{ $destino->nombre }}</a>
                                            @endforeach
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="nav-link responsive dropdown-toggle"
                                                    href="{{ route('mapi') }}">
                                                    Machu Picchu
                                                </a>
                                                <a class="nav-link mobile" href="{{ route('mapi') }}">
                                                    Machu Picchu
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <i class="ml-2 d-md-none float-right dropdown-toggle" role="button"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    id="navbarDropdown"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            @foreach ($tours as $mapi)
                                                @foreach ($mapi->categorias as $categoria)
                                                    @if ($categoria->nombre === 'Machu Picchu')
                                                        <a class="dropdown-item"
                                                            href="{{ route('tours.show', ['slug' => $mapi->slug]) }}">
                                                            {{ $mapi->nombre }} <span
                                                                style="color: #2493e0;font-weight: bold;
                                                            font-size: 14px;">→
                                                                {{ $mapi->dias }} dias</span>
                                                        </a>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="nav-link responsive dropdown-toggle"
                                                    href="{{ route('peru') }}">
                                                    Pacotes Peru
                                                </a>
                                                <a class="nav-link mobile" href="{{ route('peru') }}">
                                                    Pacotes Peru
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <i class="ml-2 d-md-none float-right dropdown-toggle" role="button"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    id="navbarDropdown"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            @foreach ($tours as $pacotes)
                                                @foreach ($pacotes->categorias as $categoria)
                                                    @if ($categoria->nombre === 'Pacotes Peru')
                                                        <a class="dropdown-item"
                                                            href="{{ route('tours.show', ['slug' => $pacotes->slug]) }}">
                                                            {{ $pacotes->nombre }} <span
                                                                style="color: #2493e0;font-weight: bold;
                                                            font-size: 14px;">
                                                                → {{ $pacotes->dias }} dias</span>
                                                        </a>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="nav-link responsive dropdown-toggle"
                                                    href="{{ route('trilhas') }}">
                                                    Trilha Inca
                                                </a>
                                                <a class="nav-link mobile" href="{{ route('trilhas') }}">
                                                    Trilha Inca
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <i class="ml-2 d-md-none float-right dropdown-toggle" role="button"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    id="navbarDropdown"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                            @foreach ($tours as $trilha)
                                                @foreach ($trilha->categorias as $categoria)
                                                    @if ($categoria->nombre === 'Trilha Inca')
                                                        <a class="dropdown-item"
                                                            href="{{ route('tours.show', ['slug' => $trilha->slug]) }}">
                                                            {{ $trilha->nombre }}<span
                                                                style="color: #2493e0;font-weight: bold;
                                                            font-size: 14px;">
                                                                → {{ $trilha->dias }} dias</span>
                                                        </a>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                                    </li>
                                    <li class="nav-item navbar-collapse responsive">
                                        <form action="{{ route('search') }}" method="get">
                                            @csrf
                                            <div class="input-group mb-3 mt-4">
                                                <input type="search" id="name" name="name"
                                                    class="form-control form-control-sm" placeholder="Procurar..."
                                                    style="z-index:10" required>
                                                <div class="input-group-append">
                                                    <input type="submit" class="btn btn-sm btn-outline-primary"
                                                        value="Ir">
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                    <li class="nav-item mobile">
                                        <form action="{{ route('search') }}" method="get">
                                            @csrf
                                            <div class="mb-3 d-flex align-items-center">
                                                <input type="search" id="name" name="name"
                                                    class="form-control form-control-sm" placeholder="Procurar..."
                                                    style="z-index:10" required>
                                                <div class="input-group-append">
                                                    <span class="border-0">
                                                        <input type="submit" value="Ir"
                                                            style="background: #2493e0;border: 1px solid #2493e0;padding: 0.3em 0.6em; color:#fff">
                                                    </span>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('contenido')
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-5">
                    <div class="">
                        <div class="row single-footer-widget">
                            <div class="col-md-6">
                                <img class="mb-4" width="80%"
                                    src="{{ asset('img/logo-nc-travel-blanco.png') }}" alt="Logo NC Travel Cusco"
                                    loading="lazy">
                                <ul style="columns: 1">
                                    <li><a href="{{ route('nosotros') }}"> Quem Somos</a></li>
                                    <li><a href="{{ route('contato') }}"> Contato</a></li>
                                    <li><a href="{{ route('faq') }}"> Perguntas frequentes</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4>DESCUBRA O DESTINO</h4>
                                <ul style="columns: 1">
                                    @foreach ($destinos->take(6) as $destino)
                                        <li><a
                                                href="{{ route('destino.show', $destino->slug) }}">{{ $destino->nombre }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                    {{--  
                        <h4>DESCUBRA O DESTINO</h4>
                        <ul>
                            @foreach ($destinos->take(6) as $destino)
                                <li><a href="{{ route('destino.show', $destino->slug) }}">{{ $destino->nombre }}</a></li>
                            @endforeach
                            @foreach ($tours->take(6) as $tour)
                                <li><a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}">{{ $tour->nombre }}</a></li>
                            @endforeach
                        </ul>
                    </div> --}}
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="single-footer-widget">
                        <h4>ASSINE O NEWSLETTER</h4>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Seu endereço de email"
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Seu endereço de email'" required=""
                                    type="email">
                                <button class="click-btn btn btn-default text-uppercase"> <i
                                        class="fa fa-paper-plane"></i>
                                </button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1"
                                        value="" type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                        <p>Assine nossa newsletter para receber notícias e ofertas atualizadas no Peru</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="single-footer-widget footer_icon">
                        <h4>Contate-nos</h4>
                        <p>San Andres N° 240 of. 201, Cusco - Peru</p>
                        <span>niko@nctravelcusco.com</span>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/MachupicchuCusco" target="_blank"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d6886235-Reviews-Nc_Travel_Cusco-Cusco_Cusco_Region.html"
                                target="_blank"><i class="fa fa-tripadvisor"></i></a>
                            <a href="https://www.instagram.com/nctravelcusco_oficial/" target="_blank"><i
                                    class="fa fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCBJP3DFKGpcsRnjjTnrf5pA" target="_blank"><i
                                    class="fa fa-youtube"></i></a>
                            <a href="https://www.pinterest.es/nctravelcusco/" target="_blank"><i
                                    class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> Todos os direitos reservados | Este modelo é feito por <a
                                href="https://www.facebook.com/DjmWebMaster" target="_blank">DJM2</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/jquery-1.12.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/gijgo.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
