@extends('layouts.admin')
@section('titulo', 'Tours en español')
@section('contenido')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="row">
                <div class="col-6 float-left">
                    <h3>Editar Destino: {{ $destino->nombre }}</h3>
                </div>
                <div class="col-6">
                    <a href="{{ route('destinos.index') }}" class="btn btn-primary btn-sm float-right mr-2">Cancelar</a>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('destinos.update', $destino->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" class="form-control form-control-sm" value="{{ $destino->nombre }}"
                        required>
                    @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="img">Imagen:</label>
                        <input type="file" name="img" accept="image/*" class="form-control form-control-sm"
                            id="imgInput">
                        @error('img')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="mt-2">
                            @if ($destino->img)
                                <img src="{{ asset('img/destinos/' . $destino->img) }}"
                                    style="max-width: 100%; height: 200px; object-fit: cover;" id="imagePreviewNew">
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-6 mt-3">
                        <label for="imgThumb">Img Thumb:</label>
                        <input type="file" name="imgThumb" accept="image/*" class="form-control form-control-sm"
                            id="imgThumbInput">
                        @error('imgThumb')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="mt-2">
                            @if ($destino->imgThumb)
                                <img src="{{ asset('img/destinos/thumb/' . $destino->imgThumb) }}"
                                    style="max-width: 100%; height: 200px; object-fit: cover;" id="imageThumbPreviewNew">
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-12 mt-3">
                        <label for="descripcion">Descripción:</label>
                        <textarea name="descripcion" class="ckeditor form-control form-control-sm" required>{{ $destino->descripcion }}</textarea>
                        @error('descripcion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-lg-6 mt-3">
                        <label for="keywords">Keywords:</label>
                        <input type="text" name="keywords" id="keywords" class="form-control form-control-sm"
                            value="{{ $destino->keywords }}" required>
                        @error('keywords')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mt-3">
                        <label for="slug">Slug:</label>
                        <input type="text" name="slug" id="slugInput" class="form-control form-control-sm"
                            value="{{ $destino->slug }}" required>
                        @error('slug')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-sm mt-4">Guardar</button>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('imgInput').addEventListener('change', function(e) {
            var imagePreview = document.getElementById('imagePreviewNew');
            imagePreview.style.display = 'block';
            imagePreview.src = URL.createObjectURL(e.target.files[0]);
        });

        document.getElementById('imgThumbInput').addEventListener('change', function(e) {
            var imageThumbPreview = document.getElementById('imageThumbPreviewNew');
            imageThumbPreview.style.display = 'block';
            imageThumbPreview.src = URL.createObjectURL(e.target.files[0]);
        });
    </script>
@endsection
