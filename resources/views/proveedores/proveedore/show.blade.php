@extends('layouts.admin')

@section('template_title')
    {{ $proveedore->name ?? 'Show Proveedore' }}
@endsection

@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Proveedore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $proveedore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ruc:</strong>
                            {{ $proveedore->ruc }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $proveedore->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $proveedore->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $proveedore->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Paginaweb:</strong>
                            {{ $proveedore->paginaweb }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $proveedore->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Detalles:</strong>
                            {{ $proveedore->detalles }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
