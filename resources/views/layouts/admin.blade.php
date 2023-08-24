<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="nofollow">
    <title>@yield('titulo')</title>
    <link rel="shortcut icon" href="{{ asset('img/icono-home.png') }}">
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/thumb/favicon-admin.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('index') }}">
                <img src="{{ asset('img/logo-nc-travel-blanco.png') }}" width="50%" alt="">
            </a>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Idiomas
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#espanol" aria-expanded="false" aria-controls="espanol">
                    <i class="fas fa-fw fa-language"></i>
                    <span>Tours</span>
                </a>
                <div id="espanol" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('tours.index') }}">
                            Tours
                        </a>
                        <a class="collapse-item" href="{{ route('categorias.index') }}">
                            Categorias
                        </a>                        
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('destinos.index') }}">
                    <i class="fas fa-fw fa-images"></i>
                    <span>Destinos</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ingles" aria-expanded="false" aria-controls="ingles">
                    <i class="fas fa-fw fa-language"></i>
                    <span>Blogs</span>
                </a>
                <div id="ingles" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('cat.index')}}">
                         Tags de blogs
                        </a>
                        <a class="collapse-item" href="{{route('djm.index')}}">
                           Blogs
                        </a>
                    </div>
                </div>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ingles" aria-expanded="false" aria-controls="ingles">
                    <i class="fas fa-fw fa-language"></i>
                    <span>English</span>
                </a>
                <div id="ingles" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('toursen.index') }}">
                            English tours
                        </a>
                        <a class="collapse-item" href="{{ route('blogen.index') }}">
                            Blog categories
                        </a>
                        <a class="collapse-item" href="{{ route('blogsens.index') }}">
                            English Blogs
                        </a>
                    </div>
                </div>
            </li> --}}
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('imagenes.index') }}">
                    <i class="fas fa-fw fa-images"></i>
                    <span>Imágenes</span>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Usuarios</span>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-bars"></i>
                    <span>Vouchers tours</span>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item no-arrow mx-1">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link mr-4" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-danger mt-3 btn-sm" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    @yield('contenido')
                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Made by DJM2</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="//cdn.ckeditor.com/4.14.1/plugins/youtube/plugin.js"></script>
    <script src="//cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
    
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('admin/js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>
