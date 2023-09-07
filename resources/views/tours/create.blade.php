@extends('layouts.admin')
@section('titulo', 'Crear nuevo tour en español')
@section('contenido')
    <div class="row">
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
            <div class="row" style="padding: 1em; border-radius: 10px;">
                <div class="col-lg-6 float-left">
                    <h3>Crear Nuevo Tour en español</h3>
                </div>
                <div class="col-lg-6">
                    <a href="/tours" class="btn btn-primary float-right">Volver</a>
                </div>
            </div>
            <form action="/tours" method="post" enctype="multipart/form-data" class="bg-light">
                @csrf
                <div class="row">
                    <div class="col-lg-4">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    <div class="col-lg-4">
                        <label for="" class="form-label">Precio:</label>
                        <input type="text" id="precio" name="precio" class="form-control" required
                            placeholder="$0.00">
                    </div>
                    <div class="col-lg-4">
                        <label for="" class="form-label">Días:</label>
                        <input type="text" id="dias" name="dias" class="form-control" required>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <label for="descripcion" class="form-label">Descripción corta: <small>(Maximo 255
                                caracteres)</small></label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control" required
                            maxlength="255">
                        @error('descripcion')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-12 mt-3">
                        <label for="contenido" class="form-label">Contenido Inicial:</label>
                        <textarea class="ckeditor form-control" name="contenido" id="contenido"></textarea>
                        </textarea>
                        @error('contenido')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-12 mt-3">
                        <label for="resumen" class="form-label">Resumen del tour:</label>
                        <textarea class="ckeditor form-control" name="resumen" id="resumen"></textarea>
                        </textarea>
                        @error('resumen')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-12  mt-3">
                        <label for="detallado" class="form-label">Itinerario del Tour:</label>
                        <textarea class="ckeditor form-control" name="detallado" id="detallado"></textarea>
                        </textarea>
                        @error('detallado')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-12 mt-3">
                        <label for="generales" class="form-label">Condiciones Generales:</label>
                        <textarea class="ckeditor form-control" name="generales" id="generales"></textarea>
                        </textarea>
                        @error('generales')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 mt-3">
                        <label for="incluidos" class="form-label">Incluye / No Incluye: <small>Solo listas</small> </label>
                        <textarea class="ckeditor form-control" name="incluidos" id="incluidos" required></textarea>
                        </textarea>
                        @error('incluidos')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 mt-3">
                        <label for="importante" class="form-label">Opcionais: <small>Solo listas</small></label>
                        <textarea class="ckeditor form-control" name="importante" id="importante"></textarea>
                        </textarea>
                        @error('importante')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-6 mt-3">
                        <label for="img" class="form-label">Imagen: (420x280)</label>
                        <input type="file" id="img" name="img" class="form-control" accept="image/*" required>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <label for="mapa" class="form-label">Mapa del tour:</label>
                        <input type="file" id="mapa" name="mapa" class="form-control" accept="image/*">
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="form-group">
                            <label for="categorias">Categorías de tour:</label><br>
                            <div class="form-check form-check-inline">
                                @foreach ($categorias as $id => $nombre)
                                    <input class="form-check-input" type="checkbox" name="categorias[]"
                                        id="categoria{{ $id }}" value="{{ $id }}">
                                    <label class="form-check-label" for="categoria{{ $id }}"
                                        style="margin-right: 0.8em">
                                        {{ $nombre }}
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <label for="" class="form-label">Ubicación:</label>
                        <input type="text" id="ubicacion" name="ubicacion" class="form-control" required>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <label for="" class="form-label">Clase:<small class="text-success">(Tomada para definir
                                img)</small></label>
                        <select name="clase" id="clase" class="form-control">
                            <option value="cusconoche" data-class="cusconoche">Cusco ciudad</option>
                            <option value="puno" data-class="puno">Isla uros</option>
                            <option value="lima1" data-class="lima1">Parque de las aguas</option>
                            <option value="ballestas" data-class="ballestas">Islas Ballestas</option>
                            <option value="lima2" data-class="lima2">Miraflores Lima</option>
                            <option value="mapi1" data-class="mapi1">Machu Picchu</option>
                            <option value="mapi2" data-class="mapi2">Machu Picchu 2</option>
                            <option value="caminoinca" data-class="caminoinca">Camino Inca</option>
                            <option value="caminoinca2" data-class="caminoinca2">Camino Inca 2</option>
                            <option value="sacse" data-class="sacse">Sacsayhuaman</option>
                            <option value="valle" data-class="valle">Valle Sagrado de los incas</option>
                            <option value="valle2" data-class="valle2">Valle Sagrado de los incas 2</option>
                            <option value="salkantay" data-class="salkantay">Salkantay</option>
                            <option value="salkantay2" data-class="salkantay2">Salkantay 2</option>
                            <option value="choque" data-class="choque">Choquequirao</option>
                            <option value="vinicunca" data-class="vinicunca">Vinicunca</option>
                            <option value="humantay" data-class="humantay">Humantay</option>
                            <option value="palcoyo" data-class="palcoyo">Palcoyo</option>
                            <option value="qeswachaca" data-class="qeswachaca">Qeswachaca</option>
                        </select>
                        <div id="blog" style="width: 100%; height: 350px; object-fit: cover">
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
                        <label for="" class="form-label">Keywords: <small class="text-success">(Separar cada
                                palabra/frase por una coma)</small></label>
                        <input type="text" id="keywords" name="keywords" class="form-control" required>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <label for="" class="form-label">Slug:</label>
                        <input type="text" id="slug" name="slug" class="form-control" required onkeyup="replaceSpaces(this);">
                    </div>
                    <script>
                        function replaceSpaces(input) {
                            var value = input.value;
                            var replaced = value.replace(/ /g, '-').replace(/[-]{2,}/g, '-');
                            input.value = replaced;
                        }
                    </script>

                </div>
                <a href="/tours" class="btn btn-secondary mt-3 float-right">Cancelar</a>
                <button class="btn btn-primary mt-4" type="submit">Guardar</button>
            </form>
        </div>
    </div>
    
    <script type="text/javascript">
        CKEDITOR.replace('.ckeditor', {
            extraPlugins: 'youtube',
            toolbar: [
                ['Youtube']
            ]
        });
    </script>
@endsection
