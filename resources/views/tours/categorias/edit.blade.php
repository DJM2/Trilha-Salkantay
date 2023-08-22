@extends('layouts.admin')
@section('titulo', 'Crear nueva categoria')
@section('contenido')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Buscadore</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categorias.update', $categoria->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('tours.categorias.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
