@extends('layouts.admin')

@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Blog: {{$djmblog->nombre}}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('djm.index') }}"> Vovler</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $djmblog->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $djmblog->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Cuerpo:</strong>
                            {!! $djmblog->cuerpo !!}
                        </div>
                        <div class="form-group">
                            <strong>Img:</strong>
                            {{ $djmblog->img }}
                        </div>
                        <div class="form-group">
                            <strong>Keywords:</strong>
                            {{ $djmblog->keywords }}
                        </div>
                        <div class="form-group">
                            <strong>Slug:</strong>
                            {{ $djmblog->slug }}
                        </div>
                        <div class="form-group">
                            @foreach ($djmblog->categorias as $categoria)
                            <li> {{ $categoria->nombre }}</li>
                          @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
