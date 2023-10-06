@extends('layouts.app')

@section('titulo', 'Lista de blogs en ingles')
@section('contenido')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 text-center mt-5">
        <h4>Página no encontrada</h4>
        <a href="" class="mb-5">Volver</a>
    </div>
</div>
<script>
    document.getElementById("volver").addEventListener("click", function(event) {
        event.preventDefault(); // Evitar la acción predeterminada del enlace
        window.history.back(); // Volver a la página anterior
        location.reload(); // Recargar la página actual
    });
</script>
@endsection