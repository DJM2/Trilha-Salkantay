@extends('layouts.admin')
@section('titulo', 'Tours en español')

@section('contenido')
    <form action="/imagenes/{{ $imagen->id }}" method="post" enctype="multipart/form-data" class="bg-light" style="padding: 1em">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-12">
                <label for="img" class="form-label">Editar imagen:</label>
                <a href="{{route('imagenes.index')}}" class="float-right btn btn-primary btn-sm">Volver</a>
                <input type="file" id="img" name="img" class="form-control mt-2" accept="image/*"
                    value="{{ $imagen->img }}">
                <img class="mt-3" src='{{asset("img/galeria/$imagen->img")}}' width="220px">
            </div>
            <a href="{{route('imagenes.index')}}" class="btn btn-secondary mt-4">Cancelar</a>
                <button class="btn btn-primary mt-4" type="submit">Guardar</button>
        </div>
    </form>
@endsection
