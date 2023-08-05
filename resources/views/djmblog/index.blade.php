@extends('layouts.admin')

@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista de blogs') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('djm.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Img</th>
                                        <th>Keywords</th>
                                        <th>Slug</th>
                                        <th>Tags</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($djmblogs as $djmblog)
                                        <tr>
                                            <td>{{ $djmblog->id }}</td>
                                            <td>{{ $djmblog->nombre }}</td>
                                            <td>{{ $djmblog->descripcion }}</td>
                                            <td><img src="{{ $djmblog->img }}" alt="" width="120px"></td>
                                            <td>{{ $djmblog->keywords }}</td>
                                            <td>{{ $djmblog->slug }}</td>
                                            <td>
                                                @foreach ($djmblog->categorias as $categoria)
                                                  <li> {{ $categoria->nombre }}</li>
                                                @endforeach
                                            </td>

                                            <td>
                                                <form action="{{ route('djm.destroy', $djmblog->id) }}" method="POST">
                                                    @csrf
                                                            <a class="btn btn-sm btn-primary "
                                                        href="{{ route('muestrame', $djmblog->slug) }}" target="_blank"><i
                                                            class="fa fa-fw fa-eye"></i> </a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('djm.edit', $djmblog->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> </a>
                                                    
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
