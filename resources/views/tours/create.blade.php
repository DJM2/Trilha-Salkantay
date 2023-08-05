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
                        <input type="text" id="precio" name="precio" class="form-control" required>
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
                        <label for="resumen" class="form-label">Roteiro:</label>
                        <textarea class="ckeditor form-control" name="resumen" id="resumen"></textarea>
                        </textarea>
                        @error('resumen')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-12  mt-3">
                        <label for="detallado" class="form-label">Precos:</label>
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

                    <div class="col-lg-6 mt-3">
                        <label for="" class="form-label">Categoría:</label>
                        <select name="categoria[]" id="categoria" class="form-select" required>
                            <option value="hikes">Pacotes Perú</option>
                            <option value="around">Pacotes Machu Picchu</option>
                            <option value="machupicchu">Pacotes Trilha Inca</option>
                            <option value="luxury">Rotas Alternativas</option>
                        </select>

                    </div>
                    <div class="col-lg-3 mt-3">
                        <label for="" class="form-label">Ubicación:</label>
                        <input type="text" id="ubicacion" name="ubicacion" class="form-control" required>
                    </div>
                    <div class="col-lg-3 mt-3">
                        <label for="" class="form-label">Clase:<small class="text-success">(Tomada para definir
                                img)</small></label>
                        <select name="clase" id="clase" class="form-control">
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
                    <div class="col-lg-12 mt-3s">
                        <label for="" class="form-label">Keywords: <small class="text-success">(Separar cada
                                palabra/frase por una coma)</small></label>
                        <input type="text" id="keywords" name="keywords" class="form-control" required>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <label for="" class="form-label">Slug:</label>
                        <input type="text" id="slug" name="slug" class="form-control" required>
                    </div>

                </div>
                <a href="/tours" class="btn btn-secondary mt-4">Cancelar</a>
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
