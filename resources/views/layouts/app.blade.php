<!doctype html>
<html lang="pt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trilha Salkantay to Machu Picchu - @yield('titulo')</title>
    <link rel="shortcut icon" href="{{ asset('img/icono-home.png') }}">
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
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-tripadvisor"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
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
                                                <a href="{{ route('destino.show', $destino->slug) }}" class="dropdown-item">{{ $destino->nombre }}</a>
                                            @endforeach                                           
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="nav-link responsive dropdown-toggle" href="blog.html">
                                                    Pacotes Peru
                                                </a>
                                                <a class="nav-link mobile" href="">
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
                                            <a class="dropdown-item" href="{{ route('blog') }}">Blog</a>
                                            <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="nav-link responsive dropdown-toggle" href="blog.html">
                                                    Machu Picchu
                                                </a>
                                                <a class="nav-link mobile" href="">
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
                                            <a class="dropdown-item" href="blog.html">Blog</a>
                                            <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">

                                        <div class="row">
                                            <div class="col-6">
                                                <a class="nav-link responsive dropdown-toggle" href="blog.html">
                                                    Trilha Inca
                                                </a>
                                                <a class="nav-link mobile" href="">
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
                                            <a class="dropdown-item" href="top_place.html">top place</a>
                                            <a class="dropdown-item" href="tour_details.html">tour details</a>
                                            <a class="dropdown-item" href="elements.html">Elements</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                                    </li>
                                    <li class="nav-item navbar-collapse responsive">
                                        <div class="input-group">
                                            <input type="search" class="form-control form-control-sm"
                                                placeholder="Search" aria-label="Search..."
                                                aria-describedby="search-addon" />
                                            <button type="button"
                                                class="btn btn-sm btn-outline-primary">search</button>
                                        </div>
                                    </li>
                                    <li class="nav-item mobile">
                                        <div class="mb-3 d-flex align-items-center">
                                            <input class="form-control form-control-sm" placeholder="Search" />
                                            <span class="input-group-text border-0" id="search-addon">
                                                <i class="fa fa-search"></i>
                                            </span>
                                        </div>
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
                    <div class="single-footer-widget">
                        <h4>DESCUBRA O DESTINO</h4>
                        <ul>
                            <li><a href="#">Cusco</a></li>
                            <li><a href="#">Arequipa</a></li>
                            <li><a href="#">Lima</a></li>
                            <li><a href="#">Puno</a></li>
                            <li><a href="#">Ica</a></li>
                            <li><a href="#">Paracas</a></li>
                            <li><a href="#">Puerto Maldonado</a></li>
                            <li><a href="#">Choquequirao</a></li>
                            <li><a href="#">Laguna Humantay</a></li>
                            <li><a href="#">Trilha Inca</a></li>
                            <li><a href="#">Montanha Vinicunca</a></li>
                            <li><a href="#">Lagoa Piuray</a></li>
                        </ul>

                    </div>
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
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                            <a href="#"><i class="ti-instagram"></i></a>
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
