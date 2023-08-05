@extends('layouts.admin')
@section('titulo', 'Crud de imágenes')

@section('contenido')
    <div class="row">
        <div class="col-12">
            <h4 class="float-left">Subir imagen nueva:</h4>
            <a href="{{ route('imagenes.index') }}" class="btn btn-primary float-right">Volver</a>
        </div>
        <div class="col-12">
            <form action="{{ route('imagenes.index') }}" method="post" enctype="multipart/form-data" class="bg-light">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <input type="file" id="img" name="img" class="form-control" required>
                    </div>
                </div>
                <a href="{{route('imagenes.index')}}" class="btn btn-secondary mt-4">Cancelar</a>
                <button class="btn btn-primary mt-4" type="submit">Guardar</button>
            </form>
        </div>
    </div>

@endsection
