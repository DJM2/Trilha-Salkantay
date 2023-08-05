<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pacha Mama Spirit @yield('titulo') </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/icono-home.png') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos-bootstrap.css') }}">
    @yield('metas')

    {{-- ReCaptcha --}}
 
    
</head>

<body>
    {{-- <div id="app"> --}}

    {{-- <main class="py-4"> --}}
    @yield('content')
    {{-- </main> --}}
    {{-- </div> --}}
    <!-- JavaScript Bundle with Popper -->
    <!-- Modal de banner-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="padding: 1em">
                <form style="padding: 0px 25px" action="{{ route('searchen') }}" method="GET">
                    @csrf
                    <h3 class="h3-book-pop-up">Find your destination in Peru</h3>
                    <div class="form-row">
                        <div class="form-group col-12 text-center">
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Search...">
                            <input type="submit" class="boton-index mt-2" value="Search">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Modal de banner-->

    <section>
        <div class="display-foot">
            <img src="{{ asset('img/paisaje-cerros-silueta.png') }}" alt="Paisaje cerros silueta" width="100%">
        </div>
        <div class="display-foot-2">
            <img src="{{ asset('img/paisaje-cerros-silueta-responsive.png') }}" alt="Paisaje cerros silueta"
                width="100%">
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <h4 class="h4-foot">Query</h4>
                        <div class="linea-foot"></div>
                        <a class="a-foot" href=""> About Us</a>
                        <a class="a-foot" href=""> Terms & Conditions</a>
                        <a class="a-foot" href=""> Faqs</a>
                        <a class="a-foot" href=""> Reviews</a>
                    </div>
                    <div class="col-lg-4 text-center">
                        <h4 class="h4-foot">Contact</h4>
                        <div class="linea-foot"></div>
                        <p><span class="icon-whatsapp"></span> +51 921 136 755</p>
                        <p><span class="icon-envelope"></span> info@pachamamaspirit.com</p>
                        <p><span class="icon-map-marker"></span> Cusco - Perú</p>
                    </div>
                    <div class="col-lg-4">
                        <h4 class="h4-foot">Social</h4>
                        <div class="linea-foot"></div>
                        <div class="text-center social-foot">
                            <a href="https://twitter.com/PachaSpirit" target="_blank" rel="no-follow"
                                class="p-2 pl-0"><span class="icon-twitter"></span></a>
                            <a href="https://www.facebook.com/PachaMamaSpiritMountain" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="icon-facebook"></span></a>
                            <a href="https://www.pinterest.com/spiritpachamama/_saved/" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="icon-pinterest"></span></a>
                            <a href="https://www.instagram.com/pachamamaspiritmountain/" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="icon-instagram"></span></a>
                            <a href="#" target="_blank" rel="no-follow" class="p-2 pl-0"><span
                                    class="icon-tripadvisor"></span></a>
                            <a href="https://www.youtube.com/channel/UCR5v94oQX3budGLKTRL4BBQ" rel="no-follow"
                                target="_blank" class="p-2 pl-0"><span class="icon-youtube-play"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="copy">
                        <h5> Copiryght 2022 © All rights reserved | Pacha Mama Spirit | Made by <a
                                href="https://www.facebook.com/DjmWebMaster" class="djm2" target="_blank"
                                rel="no-follow"> DJM2</a></h5>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    {{-- <script src="{{ asset('js/popper.min.js') }}"></script> --}}
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

</body>

</html>
