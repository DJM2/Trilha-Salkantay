@extends('layouts.admin')
@section('titulo', 'Crear nueva categoria')
@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Buscadore</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categorias.store') }}" role="form" enctype="multipart/form-data">
                            @csrf
                            @include('tours.categorias.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
