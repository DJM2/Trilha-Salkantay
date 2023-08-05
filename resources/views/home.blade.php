@extends('layouts.admin')
@section('contenido')
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6">
            <a href="{{ url('tours') }}">
                <div class="card card-new" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/Tours-web.webp') }}" alt="Tours"
                        loading="lazy">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6">
            <a href="{{ route('djm.index') }}">
                <div class="card card-new" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/blogs.webp') }}" alt="Blogs trilha Inca"
                        loading="lazy">
                </div>
            </a>
        </div>
        
        <div class="col-lg-3 col-md-6">
            <a href="{{ url('imagenes') }}">
                <div class="card card-new" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/imagenes-Pacha-Mama-Spirit.jpg') }}" alt="Camino Inca 4 dias"
                        loading="lazy">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6">
            <a href="{{ url('users') }}">
                <div class="card card-new" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/usuarios-Pacha-Mama.jpg') }}" alt="Camino Inca 4 dias"
                        loading="lazy">
                </div>
            </a>
        </div>
    </div>
@endsection
