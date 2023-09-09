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
                        <input type="file" id="img" name="img" class="form-control" onchange="previewImage();" required>
                        <img id="img-preview" src="#" alt="Vista previa de la imagen" style="display: none; max-width: 100%; object-fit: cover">
                    </div>
                </div>
                <a href="{{route('imagenes.index')}}" class="btn btn-secondary mt-4">Cancelar</a>
                <button class="btn btn-primary mt-4" type="submit">Guardar</button>
            </form>
        </div>
    </div>
    <script>
        function previewImage() {
            var input = document.getElementById('img');
            var imgPreview = document.getElementById('img-preview');
    
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    imgPreview.src = e.target.result;
                    imgPreview.style.display = 'block'; // Mostrar la vista previa
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                imgPreview.style.display = 'none'; // Ocultar la vista previa si no se selecciona ningún archivo
            }
        }
    </script>
    

@endsection
