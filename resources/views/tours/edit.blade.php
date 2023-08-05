@extends('layouts.admin')
@section('titulo', 'Editar tour en español')

@section('contenido')
   
    <div class="row">
        <div class="col-lg-12">
            <h3 class="float-left">Editar: {{ $tour->nombre }}</h3>
            <a href="{{ route('tours.index') }}" class="btn btn-primary float-right">Volver</a>
        </div>
        <div class="col-lg-12">
            @if (session('status'))
                <div class="text-success">
                    <div class="alert alert-danger" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
            @endif
        </div>
        <div class="col-12 mt-2">
            <form action="/tours/{{ $tour->id }}" method="post" enctype="multipart/form-data" class="bg-light"
                style="padding: 1em">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-4">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required
                            value="{{ $tour->nombre }}">
                    </div>
                    <div class="col-lg-4">
                        <label for="" class="form-label">Precio:</label>
                        <input type="text" id="precio" name="precio" class="form-control" required
                            value="{{ $tour->precio }}">
                    </div>
                    <div class="col-lg-4">
                        <label for="" class="form-label">Ubicación:</label>
                        <input type="text" id="ubicacion" name="ubicacion" class="form-control" required
                            value="{{ $tour->ubicacion }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control" required
                            value="{{ $tour->descripcion }}" maxlength="255">
                    </div>
                    <div class="col-lg-12">
                        <label for="contenido" class="form-label">Contenido inicial:</label>
                        <textarea class="ckeditor form-control" name="contenido" id="contenido">{!! Request::old('content', $tour->contenido) !!}</textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-12">
                        <label for="resumen" class="form-label">Roteiro:</label>
                        <textarea class="ckeditor form-control" name="resumen" id="resumen">{!! Request::old('content', $tour->resumen) !!}</textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <label for="generales" class="form-label">Condiciones Generales:</label>
                        <textarea class="ckeditor form-control" name="generales" id="generales">{!! Request::old('content', $tour->generales) !!}</textarea>
                        </textarea>
                        @error('generales')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-12">
                        <label for="detallado" class="form-label">Precos:</label>
                        <textarea class="ckeditor form-control" name="detallado" id="detallado">{!! Request::old('content', $tour->detallado) !!}</textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-6">
                        <label for="incluidos" class="form-label">Incluidos:</label>
                        <textarea class="ckeditor form-control" name="incluidos" id="incluidos">{!! Request::old('content', $tour->incluidos) !!}</textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-6">
                        <label for="importante" class="form-label">Opcionais:</label>
                        <textarea class="ckeditor form-control" name="importante" id="importante">{!! Request::old('content', $tour->importante) !!}</textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <label for="img" class="form-label">Imagen:</label>
                        <input type="file" id="img" name="img" class="form-control" accept="image/*"
                            value="{{ $tour->img }}">
                        <img src="../../img/buscador/{{ $tour->img }}" width="220px"><br>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <label for="mapa" class="form-label">Imagen:</label>
                        <input type="file" id="mapa" name="mapa" class="form-control" accept="image/*"
                            value="{{ $tour->mapa }}">
                        <img src="../../img/buscador/{{ $tour->mapa }}" width="220px"><br>
                    </div>

                    <div class="col-lg-6 form-group mt-5">
                        <label for="" class="form-label">Categoría:</label>
                        {{-- <input type="text" id="categoria" name="categoria" class="ckeditor form-control" required value="{{$tour->categoria}}"> --}}
                        <select name="categoria[]" id="categoria" class="form-control" aria-label="Default select example"
                            required>
                            <option value="{{ $tour->categoria }}" selected style="text-transform: capitalize">
                                {{ $tour->categoria }} <small>(Seleccionado)</small></option>
                            <option value="hikes">Pacotes Perú</option>
                            <option value="around">Pacotes Machu Picchu</option>
                            <option value="machupicchu">Pacotes Trilha Inca</option>
                            <option value="luxury">Rotas Alternativas</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="" class="form-label">Días:</label>
                        <input type="text" id="dias" name="dias" class="form-control" required
                            value="{{ $tour->dias }}">
                    </div>
                    <div class="col-lg-6 form-group">
                        <label class="form-label" for="clases">Clase:</label>
                        <select selected name="clase" id="clase" class="form-control">
                            <option value="{{ $tour->clase }}" selected style="text-transform: capitalize">
                                {{ $tour->clase }} <small>(Seleccionado)</small></option>
                            <option value="cusconoche">Cusco noche</option>
                            <option value="puno">Isla uros</option>
                            <option value="lima1">Parque de las aguas</option>
                            <option value="lima2">Miraflores Lima</option>
                            <option value="mapi1">Machu Picchu</option>
                            <option value="mapi2">Machu Picchu 2</option>
                            <option value="caminoinca">Camino Inca</option>
                            <option value="sacse">Sacsayhuaman</option>
                            <option value="valle">Valle Sagrado de los incas</option>
                            <option value="valle2">Valle Sagrado de los incas 2</option>
                            <option value="salkantay">Salkantay</option>
                            <option value="choque">Choquequirao</option>
                            <option value="vinicunca">Vinicunca</option>
                            <option value="humantay">Humantay</option>
                        </select>
                    </div>

                    <div class="col-lg-12">
                        <label for="keywords" class="form-label">Keywords:</label>
                        <input type="text" id="keywords" name="keywords" class="form-control" required
                            value="{{ $tour->keywords }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="" class="form-label">Slug:</label>
                        <input type="text" id="slug" name="slug" class="form-control" required
                            value="{{ $tour->slug }}">
                    </div>
                </div>
                <a href="/tours" class="btn btn-secondary mt-4">Cancelar</a>
                <button class="btn btn-primary mt-4" type="submit">Guardar</button>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
            CKEDITOR.config.allowedContent = true;
        });
    </script>
@endsection
