@extends('layouts.admin')
@section('titulo', 'Crud de imágenes')

@section('contenido')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

    <div class="row">
        <div class="col-12">
            <h2 class="float-left">Lista de imagenes:</h2>
            <a href="{{ route('imagenes.create') }}" class="btn btn-primary float-right">Subir nueva imagen</a>
        </div>
        <div class="col-lg-12 mt-4">
            @if (session('status'))
                <div class="text-success">
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <table id="tabladatos" class="table table-hover">
                <thead>
                    <tr>
                        <th>Id:</th>
                        <th>Imagen: </th>
                        <th>URL:</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($imagenes as $imagen)
                        <tr>
                            <td>{{ $imagen->id }}</td>
                            <td> <img width="80px" height="auto" src="../img/galeria/{{ $imagen->img }}">
                            </td>
                            <td onclick="copiar(this)">{{ asset("img/galeria/$imagen->img") }}
                            </td>
                            <td>
                                <form action="{{ route('imagenes.destroy', $imagen->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/imagenes/{{ $imagen->id }}/edit" class="btn btn-info btn-sm" title="Editar">
                                        <i class="fa fa-edit"></i> </a>
                                    <a href='{{ asset("img/galeria/$imagen->img") }}' target="_blank"
                                        class="btn btn-success btn-sm" title="Ver imagen">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function copiar(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).html()).select();
            document.execCommand("copy");
            $temp.remove();
            alert('URL copiada');
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        /*  $(document).ready(function() {
                        $('#tabladatos').DataTable();
                    }); */
        var j = jQuery.noConflict();
        j(document).ready(function() {
            j('#tabladatos').DataTable();
        });
    </script>

@endsection
