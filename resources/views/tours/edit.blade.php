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
                            value="{{ $tour->precio }}" placeholder="$0.00">
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
                        <img src="../../img/buscador/{{ $tour->img }}" style="max-width: 100%; object-fit: cover">
                    </div>
                    <div class="col-lg-6 mt-4">
                        <label for="mapa" class="form-label">Mapa:</label>
                        <input type="file" id="mapa" name="mapa" class="form-control" accept="image/*"
                            value="{{ $tour->mapa }}">
                        <img src="../../img/buscador/{{ $tour->mapa }}" style="max-width: 100%; object-fit: cover">
                    </div>


                    <div class="col-lg-12 mt-3">
                        <div class="form-group">
                            <label for="categorias">Categorías:</label><br>
                            <div class="form-check form-check-inline">
                                @foreach ($categorias as $categoria)
                                    <input class="form-check-input" type="checkbox" name="categorias[]"
                                        id="categoria{{ $categoria->id }}" value="{{ $categoria->id }}"
                                        @if (in_array($categoria->id, $tour->categorias->pluck('id')->toArray())) checked @endif>
                                    <label class="form-check-label" for="categoria{{ $categoria->id }}"
                                        style="margin-right: 0.8em">
                                        {{ $categoria->nombre }}
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>                    
                    <div class="col-lg-6 mt-3">
                        <label class="form-label" for="clases">Clase: <small>(Para imagen de fondo)</small></label>
                        <select selected name="clase" id="clase" class="form-control form-control-sm">
                            <option value="{{ $tour->clase }}" data-class="{{ $tour->clase }}" selected style="text-transform: capitalize">
                                {{ $tour->clase }} <small>(Seleccionado)</small></option>
                            <option value="cusconoche" data-class="cusconoche">Cusco noche</option>
                            <option value="puno" data-class="puno">Isla uros</option>
                            <option value="lima1" data-class="lima1">Parque de las aguas</option>
                            <option value="ballestas" data-class="ballestas">Islas Ballestas</option>
                            <option value="lima2" data-class="lima2">Miraflores Lima</option>
                            <option value="mapi1" data-class="mapi1">Machu Picchu</option>
                            <option value="mapi2" data-class="mapi2">Machu Picchu 2</option>
                            <option value="caminoinca" data-class="caminoinca">Camino Inca</option>
                            <option value="sacse" data-class="sacse">Sacsayhuaman</option>
                            <option value="valle" data-class="valle">Valle Sagrado de los incas</option>
                            <option value="valle2" data-class="valle2">Valle Sagrado de los incas 2</option>
                            <option value="salkantay" data-class="salkantay">Salkantay</option>
                            <option value="choque" data-class="choque">Choquequirao</option>
                            <option value="vinicunca" data-class="vinicunca">Vinicunca</option>
                            <option value="humantay" data-class="humantay">Humantay</option>
                            <option value="palcoyo" data-class="palcoyo">Palcoyo</option>
                            <option value="qeswachaca" data-class="qeswachaca">Qeswachaca</option>
                        </select>
                        <div id="blog" class="{{ $tour->clase }}" style="width: 100%; height: 350px; object-fit: cover">
                        </div>
                    </div>
                    <script>
                        const select = document.getElementById('clase');
                        const blogDiv = document.getElementById('blog');
                    
                        select.addEventListener('change', function() {
                            const selectedClass = this.value;
                            blogDiv.className = selectedClass;
                        });
                    </script>
                    <div class="col-lg-6 mt-3">
                        <label for="" class="form-label">Días:</label>
                        <input type="text" id="dias" name="dias" class="form-control form-control-sm"
                            required value="{{ $tour->dias }}">
                    </div>
                    <div class="col-lg-12 mt-3">
                        <label for="keywords" class="form-label">Keywords:</label>
                        <input type="text" id="keywords" name="keywords" class="form-control form-control-sm"
                            required value="{{ $tour->keywords }}">
                    </div>
                    <div class="col-lg-12 mt-3">
                        {{ Form::label('slug') }}
                        {{ Form::text('slug', $tour->slug, ['class' => 'form-control' . ($errors->has('slug') ? ' is-invalid' : ''), 'placeholder' => 'Slug', 'onkeyup' => 'replaceSpaces(this)']) }}
                        {!! $errors->first('slug', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
            
                    <script>
                        function replaceSpaces(input) {
                            var value = input.value;
                            var replaced = value.replace(/ /g, '-').replace(/[-]{2,}/g, '-');
                            input.value = replaced;
                        }
                    </script>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('.ckeditor').ckeditor();
                        });
                    </script>
                    
                </div>
                <a href="/tours" class="btn btn-secondary mt-4 float-right">Cancelar</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="ruta/a/ckeditor.js"></script>
@endsection
