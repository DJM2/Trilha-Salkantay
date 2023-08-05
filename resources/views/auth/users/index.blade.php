@extends('layouts.admin')
@section('titulo', 'Usuarios registrados')

@section('contenido')
    <div class="row">
        <div class="col-12">
            <h1 class="float-left">Usuarios registrados:</h1>
            <a href="{{route('users.create')}}" class="btn btn-primary float-right">Nuevo Usuario</a>
            <table class="table mt-4 table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/users/{{ $user->id }}/edit" class="btn btn-info">Editar</a>
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
