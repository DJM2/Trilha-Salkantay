<div class="btn-whatsapp">
    <a href="https://api.whatsapp.com/send?phone=51921136755" target="_blank">
        <img src="{{ asset('img/whatsapp.png') }}" alt="WhatsaApp de Pacha Mama Spirit" width="80%">
    </a>
</div>
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->
<div class="site-navbar-wrap">
    <div class="site-navbar-top">
        <div class="container py-3">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="d-flex mr-auto">
                        <a href="mailto:info@pachamamaspirit.com" class="d-flex align-items-center mr-4">
                            <span class="icon-envelope mr-2"></span>
                            <span class="d-none d-md-inline-block">info@pachamamaspirit.com</span>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=51921136755&app=facebook&entry_point=page_cta" target="_blank" class="d-flex align-items-center mr-auto">
                            <span class="icon-phone mr-2"></span>
                            <span class="d-none d-md-inline-block">+51 921 136 755</span>
                        </a>
                    </div>
                </div>
                <div class="col-6 text-right">
                    <div class="mr-auto">
                        <a href="https://twitter.com/PachaSpirit" target="_blank" rel="no-follow" class="p-2 pl-0"><span
                                class="icon-twitter"></span></a>
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
        </div>
    </div>

    <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
            <div class="row align-items-center row-menu">
                <div class="col-2">
                    <a href="{{ route('inicio') }}">
                        <img src="{{ asset('img/pacha-mama-spirit-logo.png') }}" alt="Logo Pacha Mama Spirit" class="logo">
                    </a>
                </div>
                <div class="col-10">
                    <nav class="site-navigation" role="navigation">
                        <div class="container">
                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3 icon-menu"><a href="#"
                                    class="site-menu-toggle js-menu-toggle text-white"><span
                                        class="icon-menu h3"></span></a>
                            </div>
                            <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                <li class="has-children">
                                    <a href="{{route('destinos-peru')}}" class="nav-link">Destinos
                                         @if (request()->is('destinos-peru')) id="active" @endif </a>
                                    <ul class="dropdown arrow-top">
                                        <li>
                                            <a href="{{route('cusco-ombligo-del-mundo')}}" class="nav-link">Cusco</a>
                                        </li>
                                         <li>
                                            <a href="{{route('lima-ciudad-de-reyes')}}" class="nav-link">Lima</a>
                                        </li>
                                        <li>
                                            <a href="{{route('arequipa-la-ciudad-blanca')}}" class="nav-link">Arequipa</a>
                                        </li>
                                        <li>
                                            <a href="{{route('la-ciudad-de-puno')}}" class="nav-link">Puno</a>
                                        </li>
                                        <li>
                                            <a href="{{route('ciudad-de-ica')}}" class="nav-link">Ica</a>
                                        </li>
                                        <li>
                                            <a href="{{route('ciudad-de-pisco')}}" class="nav-link">Pisco</a>
                                        </li>
                                        <li>
                                            <a href="{{route('puerto-maldonado')}}" class="nav-link">Puerto Maldonado</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('caminata')}}" class="nav-link">¿Te gustan las caminatas?</a>
                                </li>
                                <li>
                                    <a href="{{route('mapi')}}" class="nav-link">Tours a Machu Picchu</a>
                                </li>
                                <li>
                                    <a href="{{route('peru')}}" class="nav-link">Conoce Perú</a>
                                </li>
                                <li>
                                    <a href="{{route('lodges')}}" class="nav-link">Lodge Exclusivo</a>
                                </li>
                                <li>
                                    <a href="{{route('blog-peru')}}" class="nav-link">Blog</a>
                                </li>
                                <li>
                                    {{-- <button type="button" onclick="window.location='{{ URL::route('index'); }}'" class="castellano-es">English</button> --}}
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col">
                                            <i class="icon-search botonsearch" data-toggle="modal"
                                                data-target="#exampleModal"></i>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
