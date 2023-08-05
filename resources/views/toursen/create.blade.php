@extends('layouts.admin')
@section('titulo', 'Editar tour en inglés')

@section('contenido')
    @if (session('status'))
        <div class="text-success">
            <h4>{{ session('status') }}</h4>
        </div>
    @endif
    <div class="row">
        <div class="col-12 mt-2">
            <form action="/toursen" method="post" enctype="multipart/form-data" class="bg-light" style="padding: 1em">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    <div class="col-lg-3">
                        <label for="" class="form-label">Precio:</label>
                        <input type="text" id="precio" name="precio" class="form-control" required>
                    </div>
                    <div class="col-lg-3">
                        <label for="" class="form-label">Días:</label>
                        <input type="text" id="dias" name="dias" class="form-control" required>
                    </div>
                    <div class="col-lg-12">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control" required>
                    </div>
                    <div class="col-lg-12">
                        <label for="contenido" class="form-label">Contenido:</label>
                        <textarea class="ckeditor form-control" name="contenido" id="contenido"></textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-12">
                        <label for="resumen" class="form-label">Resumen:</label>
                        <textarea class="ckeditor form-control" name="resumen" id="resumen" required></textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-12">Detallado:</label>
                        <textarea class="ckeditor form-control" name="detallado" id="detallado" required></textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-6">
                        <label for="incluidos" class="form-label">Incluye: <small>Solo listas</small> </label>
                        <textarea class="ckeditor form-control" name="incluidos" id="incluidos" required></textarea>
                        </textarea>
                    </div>

                    <div class="col-lg-6">
                        <label for="importante" class="form-label">Importante: <small>Solo listas</small></label>
                        <textarea class="ckeditor form-control" name="importante" id="importante"></textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-12">
                        <label for="img" class="form-label">Imagen:</label>
                        <input type="file" id="img" name="img" class="form-control" accept="image/*" required>
                    </div>
                    <div class="col-lg-4">
                        <label for="" class="form-label">Clase:<small>(Clase que tomara la imagen)</small></label>
                        <input type="text" id="clase" name="clase" class="form-control" required>
                    </div>

                    <div class="col-lg-4">
                        <label for="" class="form-label">Categoría:</label>
                        <select multiple="multiple" name="categoria[]" id="categoria" class="form-select">
                            <option value="caminata">Hikes</option>
                            <option value="machuPicchu">Machu Picchu</option>
                            <option value="around">Around Perú</option>
                            <option value="luxury">Luxury</option>
                            <option value="fullday">Full day</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label for="" class="form-label">Ubicación:</label>
                        <input type="text" id="ubicacion" name="ubicacion" class="form-control" required>
                    </div>
                    <div class="col-lg-12">
                        <label for="" class="form-label">Keywords: <small>(Separar cada palabra/frase por una
                                coma)</small></label>
                        <input type="text" id="keywords" name="keywords" class="form-control" required>
                    </div>
                    <div class="col-lg-12">
                        <label for="" class="form-label">Slug:</label>
                        <input type="text" id="slug" name="slug" class="form-control" required>
                    </div>
                </div>
                <a href="{{route('toursen.index')}}" class="btn btn-secondary mt-4">Cancelar</a>
                <button class="btn btn-primary mt-4" type="submit">Guardar</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
